<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat_ingredientes;
use App\Models\Produto;

class ProdutoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:produto-list|produto-create|produto-edit|produto-delete', ['only' => ['index','show']]);
         $this->middleware('permission:produto-create', ['only' => ['create','store']]);
         $this->middleware('permission:produto-edit',   ['only' => ['edit','update']]);
         $this->middleware('permission:produto-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
    $insumo = Produto::all();
        $search = request('search');

        if($search) {
            $insumo = Produto::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $insumo = Produto::all();
            }
        return view('insumo.index',compact('insumo','search'));       
    }
    

    public function create()
    {
        $insumo = Cat_ingredientes::all();

        return view('insumo.create',compact('insumo'));
    }
    

    public function store(Request $request)
    {
       // Produto::create($request->all());
       $insumo =  new Produto;
        
       $insumo -> Nome                 = $request->Nome;
       $insumo -> cat_ingredientes_id  = $request->cat_ingredientes_id;

           // Imagem do produto upload
           if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('images/ingredientes'), $imageName);
            
            $insumo -> image = $imageName;
            
        }
        $insumo ->save();
        
        $insumo = Produto::all();

        return redirect('/produto')->with('success','Ingrediente criado com sucesso!');

    }

    public function show(Produto $insumo)
    {
        return view('produto.show',compact('insumo'));
    }
    
  
    public function edit(Produto $insumo)
    {
        $cat_ingredientes = Cat_ingredientes::all();

        return view('produto.edit',compact('insumo', 'cat_ingredientes'));
    
    }
    
    public function update(Request $request, Produto $insumo) {

        $insumo -> Nome                 = $request->Nome;
        $insumo -> cat_ingredientes_id  = $request->cat_ingredientes_id;


       // Imagem do produto upload
       if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
        $requestImage = $request -> image;
        
        $extension = $requestImage-> extension();
        
        $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
        
        $request -> image->move(public_path('images/ingredientes'), $imageName);
        
        $insumo -> image = $imageName;
        
    }
        
        $insumo->update();


     
        return redirect('/insumo')->with('edit','Ingrediente editado com sucesso!');
    }

    public function destroy(Produto $insumo)
    {
        $insumo->delete();
      //  dd($ingredientes);
        return redirect()->route('insumo.index')
                        ->with('delete','Ingrediente deletado com sucesso!');
    }
}