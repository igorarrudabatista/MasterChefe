<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ALUNO;
use App\Models\Escola;
use App\Models\Recibo;
use App\Models\Cidade;
use App\Models\Produto;
use App\Models\Dre;
use App\Models\Like;
use Intervention\Image\ImageManager;

use Illuminate\Support\Facades\Session;


class SiteController extends Controller
{


    public function vote(Request $request, Recibo $recibo)
    {
        $sessionId = Session::getId();

        if ($recibo->hasLiked($sessionId)) {
            return redirect()->back()->with('error', 'Você já votou nesta receita!');
        }

        $recibo->likes()->create([
            'sessao' => $sessionId,
        ]);

        return redirect()->back()->with('success', 'Voto registrado com sucesso.');
    }



    public function index(Request $request) {


        $id_recibo = Recibo::get('id');

        
        
        $search = $request->input('search');
        
        if($search) {
            $recibo = Recibo::where([['Nome_Prato', 'like', '%'.$search. '%' ]])->paginate('12');
            
        } else {
            $recibo = Recibo::with('dre','likes')->where('disp_site','=',0)->paginate('12');  
        }
        
   //     $recibo = Recibo::with('dre','likes')->where('disp_site','=',0)->paginate('12');  

//    $search = $request->input('search');
//      $response = Recibo::query()
//          ->where('Nome_Prato', 'LIKE', "%{$search}%")
//          ->get();


        return view('Site.index', [
        'recibo'=> $recibo,
        'search' => $search,
        'id_recibo' => $id_recibo,

    ]);
   }
        
   public function formulario(){

    $ingredientes = Produto::all();
    $escola = escola::all();
    $dre = Dre::all();
    $cidade = Cidade::all();
   // $dre_cidade = Dre::with('escola')->get();


    return view('Site.formulario', compact('ingredientes', 'escola', 'dre', 'cidade'));

}

    public function getEscolasByDre($dreId)
    {
        // Obter as escolas relacionadas à DRE selecionada
        $escolas = Escola::where('dre_id', $dreId)->get();

        // Retornar as escolas em formato JSON
        return response()->json($escolas);
    }


   public function store_formulario(Request $request)
   {
       //dd($request->all());
       $recibo = Recibo::create($request->all()); 
   
       // Imagem do produto upload
       if ($request->hasFile('image') && $request->file('image')->isValid()) {
           $requestImage = $request->image;
           $extension = $requestImage->extension();
           $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
           $imagePath = public_path('images/inscricao') . '/' . $imageName;
           
           // Crie uma instância da classe Intervention ImageManager
           $imageManager = new ImageManager();
           
           // Abra a imagem usando o ImageManager
           $image = $imageManager->make($requestImage->path());
           
           // Redimensione a imagem para as dimensões desejadas
           $largura = 900;
           $altura = 500;
           $image->resize($largura, $altura, function ($constraint) {
               $constraint->aspectRatio(); // Mantém a proporção da imagem
               $constraint->upsize(); // Evita que a imagem seja dimensionada para cima
           });
           
           // Salve a imagem redimensionada
           $image->save($imagePath);
           
           $recibo->image = $imageName;
       }
   
       $products = $request->input('products', []);
       $quantities = $request->input('quantities', []);
       $units = $request->input('units', []);
       
       foreach ($products as $product) {
           if ($product != '') {
               $recibo->produto()->attach($product, [
                   'Quantidade' => $quantities[$product],
                   'unidade' => $units[$product]
               ]);
           }
       }
       
       
       $recibo->save();
   
       return back()->with('success', ' A sua inscrição foi realizada com sucesso!!');
   
   }
   

    public function store(Request $request, $reciboId) {

        $session_id = $request->session()->getId();

        $curtida = Like::where('recibo_id', $reciboId)
            ->where('sessao', $session_id)
            ->first();

        if ($curtida) {
//            // O usuário já curtiu este recibo, então vamos descurtir
            $curtida->delete();
            return redirect()->back()->with('success', 'Curtida removida com sucesso!');
        } else {
            // O usuário ainda não curtiu este recibo, vamos curtir
            Like::create([
                'recibo_id' => $reciboId,
                'sessao' => $session_id,
            ]);

            return redirect()->back()->with('success', 'Recibo curtido com sucesso!');
        }
    }

   public Function search(Request $request) {

    // $search = $request->input('search');
    // $response = Recibo::query()
    //     ->where('Nome_Prato', 'LIKE', "%{$search}%")
    //     ->get();

  return view('Site.index',         ['search'      => $search,
                                        'response' => $response
                                    ]);

  }



   public function create (){

       return view ('produtos.create');
       }



   public function edit ($id){

       $editar_produto = Product::findOrFail($id);

       return view ('produtos.edit', ['editar_produto'=> $editar_produto]);


   }

   public function update (Request $request){
       
       $data = $request->all();
       
       
       // Imagem do produto upload
       if ($request->hasFile('image')&& $request->file('image')->isValid()){
           
           $requestImage = $request -> image;
           
           $extension = $requestImage-> extension();
           
           $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
           
           $request -> image->move(public_path('img/produtos'), $imageName);
           
           $data['image'] = $imageName;
           
       }
       toast('Produto editado com sucesso!','success');

       Product::findOrFail($request->id) -> update ($data);
       return redirect('/produtos/produtos');



   }

   public function destroy($id){
  
    Product::findOrFail($id) -> delete();
      toast('Produto deletado com sucesso!','error');
       return redirect('/produtos/produtos');
   }
}