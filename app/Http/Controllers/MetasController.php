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
    public function store(Request $request, $id)
    {
        $data = [
            'n_processo_id' => $id,
            'Especificacao_metas' => $request->input('Especificacao_metas'),
            'Quantidade_metas' => $request->input('Quantidade_metas'),
            'Unidade_medida_metas' => $request->input('Unidade_medida_metas'),
            'Inicio_metas' => $request->input('Inicio_metas'),
            'Termino_metas' => $request->input('Termino_metas'),
        ];
        dd($data);

        // Criar uma nova instância de Meta com os dados e salvar no banco de dados
        Metas::create($data);

        return redirect()->back();
        
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
    
    public function update (Request $request, Metas $meta) {

        $data = [
            'Especificacao_metas' => $request->input('Especificacao_metas'),
            'Quantidade_metas' => $request->input('Quantidade_metas'),
            'Unidade_medida_metas' => $request->input('Unidade_medida_metas'),
            'Inicio_metas' => $request->input('Inicio_metas'),
            'Termino_metas' => $request->input('Termino_metas'),
        ];

        $meta->update($data);
        return redirect()->back();

    }
    

    public function destroy(Metas $metas, $id)
    {
        $metas = Metas::find($id);
    
        if (!$metas) {
            // Lógica de tratamento se a meta não for encontrada
        }
    
        $metas->delete();
        return redirect()->back()->with('delete', 'Meta excluída com sucesso!');
    }

}


