<?php
    
namespace App\Http\Controllers;

use App\Models\Dre;
use App\Models\Recibo;
use App\Models\Ingredientes;
use App\Models\Escola;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;



use App\Exports\ReciboExport;


class ReciboController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:recibo-list|recibo-create|recibo-edit|recibo-delete|recibo-invoice', ['only' => ['index','show']]);
         $this->middleware('permission:recibo-create', ['only' => ['create','store']]);
         $this->middleware('permission:recibo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:recibo-delete', ['only' => ['destroy']]);
         $this->middleware('permission:recibo-invoice', ['only' => ['invoice']]);
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dre = Dre::all();

        $recibo = Recibo::get();  
    //    $recibo = Recibo::with('empresa_cliente')->get();  

      //  $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $produtos = Recibo::where ([['name', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Recibo::all();
            }
       
       
        return view('inscricao.index', ['recibo'=> $recibo, 
                                           'search' => $search,
                                            'dre' => $dre,
                                    ]);

    }

    public function create()
    {
        $dre = Dre::all();
        $ingredientes = Ingredientes::get();
        $escola = Escola::all();
        $produto = Produto::orderBy('id','asc')->get();
        return view('inscricao.create',compact('dre','ingredientes','escola'));

    //    return view('recibo.create', compact('produto'));
    }
    

    public function store(Request $request)
    {
      
            $recibo = Recibo::create($request->all()); 

            //  // Imagem do produto upload
                  if ($request->hasFile('image')&& $request->file('image')->isValid()){
                            
                     $requestImage = $request -> image;
                    
                     $extension = $requestImage-> extension();
                    
                     $imageName = md5($requestImage -> getClientOriginalName() . strtotime("now")) . "." . $extension;
                    
                     $request -> image->move(public_path('images/inscricao'), $imageName);
                    
                     $recibo -> image = $imageName;
                    
                 }
                $products = $request->input('products', []);
                $quantities = $request->input('quantities', []);
                //dd($recibo);
                for ($product=0; $product < count($products); $product++) {
                    if ($products[$product] != '') {
                        $recibo->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
                   // dd($quantities);
                }
            }
            $recibo ->save();
           //  dd($recibo);


// $recibo ->save();

    //dd($recibo);
        return redirect()->route('inscricao.index')
                        ->with('success','Recibo criado com sucesso!');
    }
    

     public function show(Recibo $recibo)
     {
         return view('inscricao.show',compact('recibo'));
     }

     
    public function invoice($id)
    {

        //$recibo = Recibo::with('dre', 'produto');
       $recibo        = Recibo::find($id);

  //      $minha_empresa = MinhaEmpresa::all();
        //$recibox       = Recibo::all();
        $dre           = Dre::all();

        return view('inscricao.invoice', ['recibo'        => $recibo, 
                                          'dre' => $dre,
                                        //  'recibox'       => $recibox

       ]);

    }
    public function avaliar($id)
    {

       $recibo = Recibo::findOrFail($id);
        
      $recibos          = Recibo::with('produto')->get();  
     //   $minha_empresa   = MinhaEmpresa::all();
       // $recibox         = Recibo::all();

        return view('inscricao.avaliar', ['recibo'        => $recibo, 
                                       //'minha_empresa' => $minha_empresa,
                                       'recibos'       => $recibos

       ]);

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Recibo $recibo)
    {
        $produto = Produto::get();
    //    $recibo->load('produto');
        $recibo = Recibo::get();
     //   $empresa_cliente = Empresa_Cliente::get();

        return view('inscricao.edit',compact('recibo', 'produto'));
    }
    
    public function update(Request $request, Recibo $recibo)
    {

        $recibo->update($request->all());

        $recibo->produto()->detach();

        $products = $request->input('products', []);
        $quantities = $request->input('quantities', []);
        for ($product=0; $product < count($products); $product++) {
            if ($products[$product] != '') {
                $recibo->produto()->attach($products[$product], ['Quantidade' => $quantities[$product]]);
            }

            return redirect()->route('inscricao.index')
            ->with('edit','Recibo atualizado com sucesso!');
   
    }
}   

    // public function update(Request $request, Recibo $recibo)
    // {
 
    //     $recibo->update($request->all());
    
    //     return redirect()->route('recibos.index')
    //                     ->with('success','Product updated successfully');
    // }
    

    public function destroy(Recibo $recibo)
    {
        $recibo->delete();
        return redirect()->route('inscricao.index')
                        ->with('delete','Recibo deletado com sucesso!');
    }


    
    public function export () {
        

        return Excel::download(new InscricaoExport, 'Lista_Inscritos.xlsx');
    }


        
    public function formulario(){

        $ingredientes = Produto::all();
        $escola = escola::all();
        $dre = Dre::all();


        return view('inscricao.formulario', compact('ingredientes', 'escola', 'dre'));

    }
}