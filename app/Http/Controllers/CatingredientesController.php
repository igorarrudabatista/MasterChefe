<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat_ingredientes;

class CatingredientesController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:catingrediente-list|catingrediente-create|catingrediente-edit|catingrediente-delete', ['only' => ['index','show']]);
         $this->middleware('permission:catingrediente-create', ['only' => ['create','store']]);
         $this->middleware('permission:catingrediente-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:catingrediente-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
       
        $catingrediente = Cat_ingredientes::all();
        $search = request('search');

        if($search) {
            $catingrediente = Cat_ingredientes::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $catingrediente = Cat_ingredientes::all();
            }
        return view('catingrediente.index',compact('catingrediente','search'));
               
    }
    
   public function create()
   {
    $catingrediente = Cat_ingredientes::all();

    return view('catingrediente.create', compact('catingrediente'));
   }
    

    public function store(Request $request)
    {

    
        Cat_ingredientes::create($request->all());
    
         return redirect()->route('catingrediente.index')
                         ->with('success','Categoria cadastrada com sucesso!');
     }
    

    public function show(Cat_ingredientes $catingrediente)
    {
        return view('catingrediente.show',compact('catingrediente'));
    }
    

     public function edit(Cat_ingredientes $catingrediente)
     {
    
         return view('catingrediente.edit',compact('catingrediente'));
     }

     public function update(Request $request, Cat_ingredientes $catingrediente)
     {

         $catingrediente->update($request->all());
    
         return redirect()->route('catingrediente.index')
                         ->with('edit','Categoria atualizada com sucesso!');
     }
    

     public function destroy(Cat_ingredientes $catingrediente)
     {
         $catingrediente->delete();
         
         return redirect()->route('catingrediente.index')
                         ->with('delete','Categoria deletada com sucesso!');
     }
 }