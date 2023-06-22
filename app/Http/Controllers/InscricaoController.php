<?php

namespace App\Http\Controllers;
use App\Models\ESCOLA;
use App\Models\Ingredientes;
use App\Models\Inscricao;
use App\Models\Dre;

use Illuminate\Http\Request;

class InscricaoController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:inscricao-list|inscricao-create|inscricao-edit|inscricao-delete', ['only' => ['index','show']]);
         $this->middleware('permission:inscricao-create', ['only' => ['create','store']]);
         $this->middleware('permission:inscricao-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:inscricao-delete', ['only' => ['destroy']]);
    }

    
    public function formulario(){

        $ingredientes = Ingredientes::all();
        $escola = escola::all();
        $dre = Dre::all();


        return view('inscricao.formulario', compact('ingredientes', 'escola', 'dre'));

    }
    

    public function index()
    {
    
        $inscricao = Inscricao::get();


          return view(
            'inscricao.index',
            [
                'inscricao'
                
            ]
        );

           
    }

    
   public function create()
   {

       return view('inscricao.create');
   }
    

    public function store(Request $request)
    {

        $inscricao =  new Inscricao;
        
        $inscricao -> dre_id                 = $request->dre_id;
        // $inscricao -> ingredientes_id        = $request->ingredientes_id;
        $inscricao -> escola_id              = $request->escola_id;
        $inscricao -> Nome                   = $request->Nome;
        $inscricao -> Email                  = $request->Email;
        $inscricao -> Telefone               = $request->Telefone;
        $inscricao -> Outros_ingredientes    = $request->Outros_ingredientes;
        $inscricao -> Preparo  = $request->Preparo;
        $inscricao -> checkbox  = $request->checkbox;
        
        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        // dd($products);
        // dd($quantities);   
         for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $inscricao->ingredientes()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }
        }
           // Imagem do produto upload
           if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('images/inscricao'), $imageName);
            
            $inscricao -> image = $imageName;
            
        }
        $inscricao ->save();
        
    
         return redirect()->route('inscricao.index')
                         ->with('success','Inscricao cadastrada com sucesso!');
     }
    

    public function show(Inscricao $inscricao)
    {
        return view('inscricao.index',compact('escola'));
    }
    

     public function edit(Inscricao $inscricao)
     {

         return view('inscricao.edit',compact('escola'));
     }

     public function update(Request $request, Inscricao $inscricao)
     {

         $inscricao->update($request->all());
    
         return redirect()->route('inscricao.index')
                         ->with('edit','Escola atualizada com sucesso!');
     }
    

     public function destroy(Inscricao $inscricao)
     {
         $inscricao->delete();
         
         toast('Your Post as been submited!','success');

         return redirect()->route('inscricao.index')
                         ->with('delete','Escola deletada com sucesso!');
     }
 }