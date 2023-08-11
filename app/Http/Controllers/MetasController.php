<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dre;
use App\Models\Cidade;
use App\Models\Metas;


class MetasController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:metas-list|metas-create|metas-edit|metas-delete', ['only' => ['index','show']]);
         $this->middleware('permission:metas-create', ['only' => ['create','store']]);
         $this->middleware('permission:metas-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:metas-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $search = request('search');

        if($search) {
            $cidade = Cidade::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $cidade = Cidade::all();
            }
        return view('metas.index',compact('search'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('metas.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     //   dd($request);
        Metas::create($request->all());

        toast('Meta criada com sucesso!','success');

        return view('trdigital.index');
        
    }

    public function show(Metas $metas)
    {
        return view('trdigital.index');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Metas $metas)
    {

        $metas = Metas::all();

        return view('trdigital',compact('metas'));
    
    }
    
    public function update(Request $request, Metas $metas) {

        $metas->update($request->all());


     
        return redirect('/trdigital')->with('edit','Cidade editada com sucesso!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */

     public function metasstoredestroy($id)
{
    $metas = Metas::find($id);

    if (!$metas) {
        // Lógica de tratamento se a meta não for encontrada
    }

    $metas->delete();
    return redirect()->back()->with('delete', 'Meta excluída com sucesso!');
}

    public function destroy(Metas $metas)
    {
        $metas->delete();
    
        return redirect()->route('trdigital.index')
                        ->with('delete','Cidade deletado com sucesso!');
    }

}


