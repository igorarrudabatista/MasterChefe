<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dre;
use App\Models\Cidade;
use App\Models\Estado;


class DreController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:dre-list|dre-create|dre-edit|dre-delete', ['only' => ['index','show']]);
         $this->middleware('permission:dre-create', ['only' => ['create','store']]);
         $this->middleware('permission:dre-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:dre-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dre = Dre::all();
        $search = request('search');

        if($search) {
            $dre = Dre::where([['Nome', 'like', '%'.$search. '%' ]])->get();

             } else {
                $dre = Dre::all();
            }
        return view('dre.index',compact('dre','search'));
       
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


        return view('dre.create',compact('cidade','estado'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Dre::create($request->all());

        toast('Produto criado com sucesso!','success');

        return redirect('/dre')->with('success','Produto criado com sucesso!');
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Dre $dre)
    {
        return view('dre.show',compact('dre'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Dre $dre)
    {

        $cidade = Cidade::all();
        $estado = Estado::all();

        return view('dre.edit',compact('dre','cidade','estado'));
    
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dre $dre) {
    
    
  // $produto->update($request->all());   
    
   // $produto->body = $request->body;

    $dre -> Nome       = $request->Nome;
    $dre -> Tel   = $request->Tel;
    $dre -> Email     = $request->Email;
    $dre -> Endereco      = $request->Endereco;
    $dre -> Numero = $request->Numero;
    $dre -> Bairro = $request->Bairro;
    $dre -> Cep = $request->Cep;

    //  $produto = $request->all();

        
        // // Imagem do produto upload
        // if ($request->hasFile('image')&& $request->file('image')->isValid()){
            
        //     $requestImage = $request -> image;
            
        //     $extension = $requestImage-> extension();
            
        //     $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
            
        //     $request -> image->move(public_path('images/produtos'), $imageName);
            
        //     $dre -> image = $imageName;
            
        // }
        
        $dre->update();


     
        return redirect('/dre')->with('edit','DRE editado com sucesso!');
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

    // public function export () {
        

    //     return Excel::download(new ProdutoExport, 'Produtos.xlsx');
    //   //  return Excel::download(new Empresa_Cliente, 'users.xlsx');
    // }
}

