<?php
    
namespace App\Http\Controllers;
    
use App\Models\ESCOLA;
use App\Models\ALUNO;
use App\Models\Cidade;
use App\Models\Dre;
use App\Models\Estado;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;


class EscolaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:escola-list|escola-create|escola-edit|escola-delete', ['only' => ['index','show']]);
         $this->middleware('permission:escola-create', ['only' => ['create','store']]);
         $this->middleware('permission:escola-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:escola-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {
       
        $escola = ESCOLA::get();
        $cidade = Cidade::get();
        $estado = Estado::get();
//        $ficha =  ALUNO::where('AlunoNome', '=', 'Auth()user()->id');
        $user =   Auth::user()->id;

          return view(
            'escola.index',
            [
                'escola'       => $escola,
                'user'         => $user,               
                
            ]
        );           
    }
    
   public function create()
   {
        $cidade = Cidade::get();
        $estado = Estado::get();
        $dre    = Dre::get();
    return view('escola.create', compact('cidade','estado','dre'));
   }
    

    public function store(Request $request)
    {

    
        ESCOLA::create($request->all());
    
         return redirect()->route('escola.index')
                         ->with('success','Escola cadastrada com sucesso!');
     }
    

    public function show(ESCOLA $escola)
    {
        return view('escola.show',compact('escola'));
    }
    

     public function edit(ESCOLA $escola)
     {
        $cidade = Cidade::get();
        $estado = Estado::get();
        $dre    = Dre::get();
         return view('escola.edit',compact('estado','cidade','dre','escola'));
     }

     public function update(Request $request, ESCOLA $escola)
     {

         $escola->update($request->all());
    
         return redirect()->route('escola.index')
                         ->with('edit','Escola atualizada com sucesso!');
     }
    

     public function destroy(ESCOLA $escola)
     {
         $escola->delete();
         
         return redirect()->route('escola.index')
                         ->with('delete','Escola deletada com sucesso!');
     }
 }