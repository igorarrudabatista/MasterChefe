<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dre;
use App\Models\Cidade;
use App\Models\Estado;
class CidadeController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:cidade-list|cidade-create|cidade-edit|cidade-delete', ['only' => ['index','show']]);
         $this->middleware('permission:cidade-create', ['only' => ['create','store']]);
         $this->middleware('permission:cidade-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:cidade-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cidade = Cidade::all();
        $search = request('search');

        if($search) {
            $cidade = Cidade::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $cidade = Cidade::all();
            }
        return view('cidade.index',compact('cidade','search'));
       
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cidade = Cidade::all();
        $estado = Estado::all();


        return view('cidade.create',compact('cidade','estado'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cidade::create($request->all());

        toast('Produto criado com sucesso!','success');

        return redirect('/cidade')->with('success','Produto criado com sucesso!');
        
    }

    public function show(Dre $dre)
    {
        return view('cidade.show');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {

        $cidade = Cidade::all();
        $estado = Estado::all();

        return view('cidade.edit',compact('cidade','estado'));
    
    }
    
    public function update(Request $request, Cidade $cidade) {


    $cidade -> Nome_dre       = $request->Nome_dre;
    $cidade -> Categoria_dre  = $request->Categoria_dre;
    $cidade -> Status_dre     = $request->Status_dre;
    $cidade -> Preco_dre      = $request->Preco_dre;
    $cidade -> Estoque_dre    = $request->Estoque_dre;
    $cidade -> Quantidade_dre = $request->Quantidade_dre;

    //  $produto = $request->all();

        
        // Imagem do produto upload
        if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
            $requestImage = $request -> image;
            
            $extension = $requestImage-> extension();
            
            $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request -> image->move(public_path('images/produtos'), $imageName);
            
            $cidade -> image = $imageName;
            
        }
        
        $cidade->update();


     
        return redirect('/cidade')->with('edit','DRE editado com sucesso!');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dre $dre)
    {
        $dre->delete();
    
        return redirect()->route('produtos.index')
                        ->with('delete','Produto deletado com sucesso!');
    }

}


