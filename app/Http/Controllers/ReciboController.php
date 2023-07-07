<?php
    
namespace App\Http\Controllers;

use App\Models\Dre;
use App\Models\Recibo;
use App\Models\Ingredientes;
use App\Models\Escola;
use App\Models\Produto;
use App\Models\Cat_ingredientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;


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
        $nota = $recibo;
    //    $recibo = Recibo::with('empresa_cliente')->get();  

      //  $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $produtos = Recibo::where ([['name', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Recibo::all();
            }
       
       
        return view('inscricao.index', [   'recibo'=> $recibo, 
                                           'search' => $search,
                                            'dre' => $dre,
                                            'nota' =>$nota
                                    ]);

    }
    public function semnotas()
    {
        $dre = Dre::all();

        $recibo = Recibo::where('nota_seduc1', '=', NULL)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $dre1Cuiaba = Recibo::where('dre_id', '=', 1)->get();
        $nota = $recibo;
    //    $recibo = Recibo::with('empresa_cliente')->get();  

      //  $empresa_cliente = Empresa_Cliente::get();
        $search = request('search');

        if($search) {
            $produtos = Recibo::where ([['name', 'like', '%'.$search. '%' ]])->get();

             } else {
                $produtos = Recibo::all();
            }
       
       
        return view('inscricao.index', [   'recibo'=> $recibo, 
                                           'search' => $search,
                                            'dre' => $dre,
                                            'nota' =>$nota
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
    //dd($request->all());
    $recibo = Recibo::create($request->all()); 

    // Imagem do produto upload
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $imagePath = public_path('images/inscricao') . '/' . $imageName;
        
        // Crie uma instância da classe Intervention ImageManager
        $imageManager = new ImageManager();
        
        // Abra a imagem usando o ImageManager
        $image = $imageManager->make($requestImage->path());
        
        // Redimensione a imagem para as dimensões desejadas
        $largura = 900;
        $altura = 500;
        $image->resize($largura, $altura, function ($constraint) {
            $constraint->aspectRatio(); // Mantém a proporção da imagem
            $constraint->upsize(); // Evita que a imagem seja dimensionada para cima
        });
        
        // Salve a imagem redimensionada
        $image->save($imagePath);
        
        $recibo->image = $imageName;
    }

    $products = $request->input('products', []);
    $quantities = $request->input('quantities', []);
    $units = $request->input('units', []);
    
    foreach ($products as $product) {
        if ($product != '') {
            $recibo->produto()->attach($product, [
                'Quantidade' => $quantities[$product],
                'unidade' => $units[$product]
            ]);
        }
    }
    
    
    $recibo->save();


  return redirect()->back()->with('success', 'Inscrição realizada com sucesso!');
}

    

     public function show(Recibo $recibo)
     {
         return view('inscricao.show',compact('recibo'));
     }

     
    public function invoice($id)
    {
       $recibo        = Recibo::find($id);
       $dre           = Dre::all();

        return view('inscricao.invoice', ['recibo'        => $recibo, 
                                          'dre'           => $dre,
                                            
       ]);

    }

    public function edit(Recibo $recibo, $id)
    {
        $produto = Produto::get();
        $categoria = Cat_ingredientes::all();

    //    $recibo->load('produto');
        $recibo = Recibo::get();
     //   $empresa_cliente = Empresa_Cliente::get();
        $recibo = Recibo::find($id);
        $dre = Dre::all();

        return view('inscricao.edit',compact('recibo', 'produto', 'recibo', 'dre', 'categoria'));
    }
    
    public function update(Request $request, Recibo $recibo)
    {
        $recibo -> Nota1       = $request->Nota1;

        $recibo->update();

        //dd($recibo);
       // $recibo->update($request->all());
        return redirect('/inscricao')->with('edit','sucesso!');

}   


    

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

    public function inscricao_update(Request $request, $id)
    {
        $recibo = Recibo::find($id);

        // $Recibo = Orcamento::create($request->all());
             
        Recibo::findOrFail($request->id)->update($request->all());
            
            // Orcamento::findOrFail($request->id) -> update();
            
            $recibo->save();

        //$recibo->update();

        //dd($recibo);
       // $recibo->update($request->all());
        return redirect('/inscricao')->with('edit','sucesso!');

}   

public function disp_site_sim(Request $request, $id)    {

    $recibo = Recibo::find($id);
    $venda = 0;
    $recibo -> disp_site = $venda;
    $recibo -> save();
      //   dd($recibo);
      toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return redirect('/inscricao');
  }

public function disp_site_nao(Request $request, $id)    {

    $recibo = Recibo::find($id);
    $venda = 1;
    $recibo -> disp_site = $venda;
    $recibo -> save();
         
      toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return redirect('/inscricao');
  }
    
}