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
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;


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

        if (Auth::check() && Auth::user()->hasRole('seduc','Admin')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 1)->get();
            
            return view('inscricao.dre.drealtafloresta', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    public function semnotas()
    {
        $dre = Dre::all();

        if (Auth::check() && Auth::user()->hasRole('seduc')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 1)->get();
            
            return view('inscricao.dre.drealtafloresta', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    //1 - Alta floresta
    public function drealtafloresta()
    {
        $dre = Dre::all();

        if (Auth::check() && Auth::user()->hasRole('drealtafloresta')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 1)->get();
            
            return view('inscricao.dre.drealtafloresta', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    //2 - Barra do Garças
    public function drebarradogarcas()
    {
        $dre = Dre::all();
        if (Auth::check() && Auth::user()->hasRole('drebarradogarcas')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 2)->get();
            
            return view('inscricao.dre.drebarradogarcas', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    //3 - Cáceres
    public function drecaceres()
    {
        $dre = Dre::all();

        if (Auth::check() && Auth::user()->hasRole('drecaceres')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 3)->get();
            
            return view('inscricao.dre.drecaceres', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    //4 - Confresa
    public function dreconfresa()
    {
        $dre = Dre::all();
        if (Auth::check() && Auth::user()->hasRole('dreconfresa')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 4)->get();
            
            return view('inscricao.dre.dreconfresa', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
    //5 - Cuiabá
    public function drecuiaba()
    {
        $dre = Dre::all();

    if (Auth::check() && Auth::user()->hasRole('drecuiaba')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 5)->get();
            $dre = Dre::all();

            return view('inscricao.dre.drecuiaba', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }

    }

       //6 - Varzea Grande
       public function drevarzeagrande()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('drevarzeagrande')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 6)->get();
            
            return view('inscricao.dre.drevarzeagrande', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
       }

       //7 - Diamantino
       public function drediamantino()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('drediamantino')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 7)->get();
            
            return view('inscricao.dre.drediamantino', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
       }
       //8 - Juina
       public function drejuina()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('drejuina')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 8)->get();
            
            return view('inscricao.dre.drejuina', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
       }
       //9 - Matupá
       public function drematupa()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('drematupa')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 9)->get();
            
            return view('inscricao.dre.drematupa', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
       }
       //10 - Matupá
       public function dreponteselacerda()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('dreponteselacerda')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 10)->get();
            
            return view('inscricao.dre.dreponteselacerda', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
            }
       //11 - Prm.do leste
       public function dreprimaveradoleste()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('dreprimaveradoleste')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 11)->get();
            
            return view('inscricao.dre.dreprimaveradoleste', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
       //12 - Rondonópolis
       public function drerondonopolis()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('drerondonopolis')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 12)->get();
            
            return view('inscricao.dre.drerondonopolis', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
       //13 - Sinop
       public function dresinop()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('dresinop')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 13)->get();
            
            return view('inscricao.dre.dresinop', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
    }
       //14 - Sinop
       public function dretangaradaserra()
       {
           $dre = Dre::all();
           if (Auth::check() && Auth::user()->hasRole('dretangaradaserra')) {
            // Se o usuário possui o perfil, realizar a consulta
            $recibo = Recibo::where('dre_id', '=', 14)->get();
            
            return view('inscricao.dre.dretangaradaserra', ['recibo'=> $recibo, 'dre' => $dre,  ]);
        } else {

            return view('errors.403');
        }
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

    return back()->with('success', ' A sua inscrição foi realizada com sucesso!!');

}

    

     public function show(Recibo $recibo, $id)
     {

        $recibo        = Recibo::find($id);
        $dre           = Dre::all();
 
         return view('inscricao.show', ['recibo'        => $recibo, 
                                           'dre'           => $dre,
                                             
        ]);
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

        $produtocont1 = Recibo::with('categoria')->where('Nome', '=', 'ALIMENTOS PROIBIDOS')->count();
        $produtocont2 = Recibo::with('produto')->where('Nome', '=', 'ALIMENTOS PROIBIDOS')->count();
       // dd($produtocont1);
        $produto = Produto::get();
        $categoria = Cat_ingredientes::all();

    //    $recibo->load('produto');
        $recibo = Recibo::get();
     //   $empresa_cliente = Empresa_Cliente::get();
        $recibo = Recibo::find($id);
        $dre = Dre::all();

        return view('inscricao.edit',compact('recibo', 'produto', 'recibo', 'dre', 'categoria', 'produtocont1', 'produtocont2'))->with('delete','Recibo deletado com sucesso!');
    }

    public function dreedit(Recibo $recibo, $id)
    {

        $produtocont1 = Recibo::with('categoria')->where('Nome', '=', 'ALIMENTOS PROIBIDOS')->count();
        $produtocont2 = Recibo::with('produto')->where('Nome', '=', 'ALIMENTOS PROIBIDOS')->count();
       // dd($produtocont1);
        $produto = Produto::get();
        $categoria = Cat_ingredientes::all();

    //    $recibo->load('produto');
        $recibo = Recibo::get();
     //   $empresa_cliente = Empresa_Cliente::get();
        $recibo = Recibo::find($id);
        $dre = Dre::all();

        return view('inscricao.dre.edit',compact('recibo', 'produto', 'recibo', 'dre', 'categoria', 'produtocont1', 'produtocont2'))->with('delete','Recibo deletado com sucesso!');
    }
    
    
    public function update(Request $request, Recibo $recibo)
    {
      //  $recibo -> Nota1       = $request->Nota1;

        $recibo->update();

        //dd($recibo);
       // $recibo->update($request->all());
        return redirect('/inscricao')->with('edit','Inscrição avaliada com sucesso!');

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
    public function obrigado(){

        return view('inscricao.obrigado');
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
        return redirect('/inscricao')->with('edit','Inscrição avaliada com sucesso!');

}   

public function disp_site_sim(Request $request, $id)    {

    $recibo = Recibo::find($id);
    $venda = 0;
    $recibo -> disp_site = $venda;
    $recibo -> save();
      //   dd($recibo);
      toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return back();
  }

public function disp_site_nao(Request $request, $id)    {

    $recibo = Recibo::find($id);
    $venda = 1;
    $recibo -> disp_site = $venda;
    $recibo -> save();
         
      toast('Status do Orçamento alterado para <b> Venda Realizada! </b> ','success');

      return back();
  }
    
}