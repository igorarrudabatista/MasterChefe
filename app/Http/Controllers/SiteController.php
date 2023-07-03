<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ALUNO;
use App\Models\Recibo;
use App\Models\Produto;
use App\Models\Like;

class SiteController extends Controller
{
     public function voto(Request $request, $reciboId) {
 
      //  $ipAddress = $request->ip();
        $ipAddress = $request->session()->getId();


        // Verificar se o visitante já curtiu o recibo
        $curtida = Like::where('recibo_id', $reciboId)
            ->where('sessao', $ipAddress)
            ->first();

        if ($curtida) {
            // O visitante já curtiu o recibo, então vamos remover a curtida
            $curtida->delete();
            return redirect()->back()->with('success', 'Curtida removida com sucesso!');
        } else {
            // O visitante ainda não curtiu o recibo, vamos criar uma nova curtida
            $recibo = Recibo::find($reciboId);

            if (!$recibo) {
                return redirect()->back()->with('error', 'Recibo não encontrado!');
            }

            Like::create([
                'recibo_id' => $reciboId,
                'sessao' => $ipAddress,
            ]);

            return redirect()->back()->with('success', 'Recibo curtido com sucesso!');
        }
    }

    // public function retiravoto($id) {
    //         $recibo = Recibo::find($id);         
    //         $session = session()->getId();
    //         $recibo->likes()->delete(['sessao' => $session,'recibo_id' => $recibo->id]);
    //     return back();
    // }

    public function index() {
        
        $ultimos_recibos = Recibo::orderBy('id', 'DESC')->limit(8)->get();

        $sessao1 = session()->getId(); // Pega o ID da Sessão atual        

        $recibo = Recibo::get();     
        
        $recibo2 = Like::all();

       return view('Site.index', [
        'recibo'=> $recibo,
        'sessao1' => $sessao1,
        'ultimos_recibos' => $ultimos_recibos,
        'recibo2' => $recibo2,
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

    $search = $request->input('search');
    $response = ALUNO::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->get();

  return view('Site.index',         ['search'    => $search,
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
