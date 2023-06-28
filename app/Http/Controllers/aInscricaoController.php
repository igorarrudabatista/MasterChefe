<?php

namespace App\Http\Controllers;
use App\Models\ESCOLA;
use App\Models\Ingredientes;
use App\Models\Inscricao;
use App\Models\Dre;
use App\Models\Produto;
use Database\Factories\EscolaFactory;
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

        $ingredientes = Produto::all();
        $escola = escola::all();
        $dre = Dre::all();


        return view('inscricao.formulario', compact('ingredientes', 'escola', 'dre'));

    }
    

    public function index()
    {
    
        $inscricao = Inscricao::get();
        $ingredientes = Ingredientes::all();
        $escola = escola::all();
        $dre = Dre::all();

          return view(
            'inscricao.index',
            [
                'inscricao' => $inscricao,
                'ingredientes' => $ingredientes,
                'dre' => $dre,
                'escola' => $escola,
            ]
        );

           
    }
    
   public function create()
   {
    $dre = Dre::all();
    $ingredientes = Ingredientes::get();
    $escola = Escola::all();
    $produto = Produto::orderBy('id','asc')->get();

       return view('inscricao.create',compact('dre','ingredientes','escola'));
   }    

    public function store(Request $request)
    {
      
            $inscricao = Inscricao::create($request->all()); 
            $inscricao->Preparo    = $inscricao->input('Preparo');

            $products = $request->input('products', []);
            $quantities = $request->input('quantities', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != '') {
                    $inscricao->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
             //   dd($quantities);
                }
            }

    //dd($recibo);
        return redirect()->route('inscricao.index')
                        ->with('success','Recibo criado com sucesso!');
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