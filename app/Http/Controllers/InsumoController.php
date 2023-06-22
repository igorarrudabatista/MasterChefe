<?php

namespace App\Http\Controllers;

use App\Models\Cat_ingredientes;
use Illuminate\Http\Request;
use App\Models\Ingredientes;

class InsumoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:insumo-list|insumo-create|insumo-edit|insumo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:insumo-create', ['only' => ['create','store']]);
         $this->middleware('permission:insumo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:insumo-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $insumo = Ingredientes::all();
        $search = request('search');

        if($search) {
            $insumo = Ingredientes::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $insumo = Ingredientes::all();
            }
        return view('insumo.index',compact('insumo','search'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insumo = Cat_ingredientes::all();

        return view('insumo.create',compact('insumo'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // Produto::create($request->all());
       $insumo =  new Ingredientes;
        
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
        
        $insumo = Ingredientes::all();

        return redirect('/insumo')->with('success','Ingrediente criado com sucesso!');

    }

    public function show(Ingredientes $insumo)
    {
        return view('insumo.show',compact('insumo'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredientes $insumo)
    {
        $cat_ingredientes = Cat_ingredientes::all();

        return view('insumo.edit',compact('insumo', 'cat_ingredientes'));
    
    }
    
    public function update(Request $request, Ingredientes $insumo) {

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
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredientes $insumo)
    {
        $insumo->delete();
      //  dd($ingredientes);
        return redirect()->route('insumo.index')
                        ->with('delete','Ingrediente deletado com sucesso!');
    }
}