<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
class EstadoController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:estado-list|estado-create|estado-edit|estado-delete', ['only' => ['index','show']]);
         $this->middleware('permission:estado-create', ['only' => ['create','store']]);
         $this->middleware('permission:estado-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:estado-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado = Estado::all();

        $search = request('search');

        if($search) {
            $estado = Estado::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $estado = Estado::all();
            }
        return view('estado.index',compact('estado','search'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = Estado::all();
        return view('estado.create',compact('estado'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estado::create($request->all());

        toast('Produto criado com sucesso!','success');

        return redirect('/estado')->with('success','Estado criado com sucesso!');
        
    }

    public function show(Estado $estado)
    {
        return view('estado.show');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estado.edit',compact('estado'));
    
    }
    
    public function update(Request $request, Estado $estado) {
        
        
        $estado->update($request->all());

     
        return redirect('/estado')->with('edit','Estado editado com sucesso!');
    }

    public function destroy(Estado $estado)
    {
        $estado->delete();
    
        return redirect()->route('estado.index')
                        ->with('delete','Estado deletado com sucesso!');
    }

}


