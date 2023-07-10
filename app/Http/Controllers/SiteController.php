<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ALUNO;
use App\Models\Recibo;
use App\Models\Produto;
use App\Models\Like;

use Illuminate\Support\Facades\Session;


class SiteController extends Controller
{
    //  public function voto(Request $request, $reciboId) {
 
    //   //  $ipAddress = $request->ip();
    //     $ipAddress = $request->session()->getId();

    //     // Verificar se o visitante já curtiu o recibo
    //     $curtida = Like::where('recibo_id', $reciboId)
    //         ->where('sessao', $ipAddress)
    //         ->first();

    //     if ($curtida) {
    //         // O visitante já curtiu o recibo, então vamos remover a curtida
    //         $curtida->delete();
    //         return redirect()->back()->with('success', 'Voto removido com sucesso!');

     
    //     } else {
    //         // O visitante ainda não curtiu o recibo, vamos criar uma nova curtida
    //         $recibo = Recibo::find($reciboId);

            

    //         if (!$recibo) {
    //             return redirect()->back()->with('error', 'Voto não realizado!');
    //         }

    //         Like::create([
    //             'recibo_id' => $reciboId,
    //             'sessao' => $ipAddress,
    //         ]);

    //         return redirect()->back()->with('success', 'Voto realizado com sucesso!');
    //     }
    // }

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

        $ultimos_recibos = Recibo::orderBy('id', 'DESC')->limit(6)->get();

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
        'ultimos_recibos' => $ultimos_recibos,

    ]);
   }

   public function store(Request $request, $reciboId) {

       $session_id = $request->session()->getId();

       $curtida = Like::where('recibo_id', $reciboId)
           ->where('sessao', $session_id)
           ->first();

       if ($curtida) {
           // O usuário já curtiu este recibo, então vamos descurtir
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

   
//    public function store (Request $request) {
       
       
//        $criar_produto =  new Product;
       
//        $criar_produto -> Nome_Produto       = $request->Nome_Produto;
//        $criar_produto -> Categoria_Produto  = $request->Categoria_Produto;
//        $criar_produto -> Status_Produto     = $request->Status_Produto;
//        $criar_produto -> Preco_Produto      = $request->Preco_Produto;
//        $criar_produto -> Estoque_Produto    = $request->Estoque_Produto;
//        $criar_produto -> Quantidade_Produto = $request->Quantidade_Produto;
       
       
//        // Imagem do produto upload
//        if ($request->hasFile('image')&& $request->file('image')->isValid()){
           
//            $requestImage = $request -> image;
           
//            $extension = $requestImage-> extension();
           
//            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
           
//            $request -> image->move(public_path('img/produtos'), $imageName);
           
//            $criar_produto -> image = $imageName;
           
//        }
       
//        $criar_produto ->save();
       
//        $criar_produto = Product::all();
       
//        toast('Produto criado com sucesso!','success');

//       return redirect('/produtos/produtos');

        

//    }


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