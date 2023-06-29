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

  
     // dd($sessao);
        // if ($request->session()->exists('') ){
        //     // do some thing if the key is exist
        // }else{
        //     //the key does not exist in the session
        // }
        
        // dd($sessao);
  //      $sessao -> sessao       = $request->sessao;
    //    dd($sessao);
//        $sessao->sessao = $request->sessao;

               // $recibo->increment('voto');
          //  $recibo->insert('sessao');

          public function voto($id) {

            $recibo = Recibo::find($id);
         
            $session = session()->getId();
            //dd($session);
            $recibo->likes()->create([
                'sessao' => $session, ]);
            
             return back();
                }

    public function index(Request $request, Recibo $recibo) {
        
        
        $sessao1 = session()->getId();
        $sessao2 = Like::where('sessao', '=', $sessao1)->get();
     //    dd($sessao2);
        $sessao3 = Recibo::all();
        
        $ultimos_recibos = Recibo::orderBy('id', 'DESC')->limit(8)->get();
        $recibo = Recibo::all();
       // $recibo = Recibo::all();

        $search = request('search');

        if($search) {
            $recibo = Recibo::where ([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $recibo = Recibo::all();
            }
       

       return view('Site.index', [
        'recibo'=> $recibo,
        'search' => $search,
        'ultimos_recibos' => $ultimos_recibos,
        'sessao1' => $sessao1,
        'sessao2' => $sessao2,
        'sessao3' => $sessao3
    ]);
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

   
   public function store (Request $request) {
       
       
       $criar_produto =  new Product;
       
       $criar_produto -> Nome_Produto       = $request->Nome_Produto;
       $criar_produto -> Categoria_Produto  = $request->Categoria_Produto;
       $criar_produto -> Status_Produto     = $request->Status_Produto;
       $criar_produto -> Preco_Produto      = $request->Preco_Produto;
       $criar_produto -> Estoque_Produto    = $request->Estoque_Produto;
       $criar_produto -> Quantidade_Produto = $request->Quantidade_Produto;
       
       
       // Imagem do produto upload
       if ($request->hasFile('image')&& $request->file('image')->isValid()){
           
           $requestImage = $request -> image;
           
           $extension = $requestImage-> extension();
           
           $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
           
           $request -> image->move(public_path('img/produtos'), $imageName);
           
           $criar_produto -> image = $imageName;
           
       }
       
       $criar_produto ->save();
       
       $criar_produto = Product::all();
       
       toast('Produto criado com sucesso!','success');

      return redirect('/produtos/produtos');

        

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
