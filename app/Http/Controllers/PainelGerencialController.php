<?php

namespace App\Http\Controllers;
use App\Models\ESCOLA;
use App\Models\Produto;
use App\Models\Recibo;
use App\Models\Dre;
use App\Models\User;
use App\Models\Like;



use Illuminate\Http\Request;

class PainelGerencialController extends Controller
{



        public function dashboard() {

   //         $usuarios = User::orderBy('id','DESC')->paginate(5);

            // $userCount  =  FICHA::where('AlunoNome', '=', auth()->id())
            // ->count();
            $escolas = ESCOLA::count();
            $recibo = Recibo::count();
            $produtos = Produto::count();
            $escolas = ESCOLA::count();
            $dre = DRE::count();

         //   $recibo = Recibo::with('dre','likes')->get();
//////////////////////////////////////////////////////////////////////////////////
// Obtém os votos agrupados pelo candidato e conta a quantidade de votos para cada um
$votos  = Like::all();
$totalVotos = $votos->count(); // Conta o total de votos

$votosPorCandidato = $votos->groupBy('recibo_id')->map(function ($grupo) {
    return $grupo->count();
    });
$votosPorCandidato2 = $votos->groupBy('recibo_id')->map(function ($grupo) {
    return $grupo->all();
    });
// Obtém o candidato com o maior número de votos
//$vencedor = $votosPorCandidato->max();
$vencedor = $votosPorCandidato->max();

$recibos = Recibo::all();

            $likedre1 = Recibo::with('dre','likes')->where('dre_id','=', '1')->count(); // Alta floresta
            $likedre2 = Recibo::with('likes')->where('dre_id','=', '2')->count(); //,'=', '2')->count();
            $likedre3 = Recibo::with('dre','likes')->where('dre_id','=', '3')->count(); // Caceres
            $likedre4 = Recibo::with('dre','likes')->where('dre_id','=', '4')->count();
            $likedre5 = Recibo::with('likes')->where('dre_id','=', '5')->count();
            $likedre6 = Recibo::with('likes')->where('dre_id','=', '6')->count();
            $likedre7 = Recibo::with('likes')->where('dre_id','=', '7')->count();
            $likedre8 = Recibo::with('likes')->where('dre_id','=', '8')->count();
            $likedre9 = Recibo::with('likes')->where('dre_id','=', '9')->count();
            $likedre10 = Recibo::with('likes')->where('dre_id','=', '10')->count();
            $likedre11 = Recibo::with('likes')->where('dre_id','=', '11')->count();
            $likedre12 = Recibo::with('likes')->where('dre_id','=', '12')->count();
            $likedre13 = Recibo::with('likes')->where('dre_id','=', '13')->count();
            $likedre14 = Recibo::with('likes')->where('dre_id','=', '14')->count();
            

            $produto = Produto::all();
            $search = request('search');
            if($search) {
                $produto = Produto::where([['Nome', 'like', '%'.$search. '%' ]])->get();
    
                 } else {
                    $produto = Produto::all();
                }
            // $totalfichas = FICHA::count();
            // $fichasNAOtramitadas = FICHA::where('status_id', '=', NULL)->count();
            // $fichasTramitadas = FICHA::where('status_id', '!=', NULL)->count();
        
            return view('painel.painel-dashboard',compact(
                                                          
                'recibo', 'escolas', 'produtos', 'dre', 'produto', 'search','likedre1','likedre2','likedre3','likedre4',
                'likedre5','likedre6','likedre7','likedre8','likedre9','likedre10','likedre11','likedre12','likedre13',
                'likedre14','votos', 'vencedor','votosPorCandidato', 'totalVotos', 'votosPorCandidato2', 'recibos'
            ));

        }

    public function index() {
      
        return view('painel.index'); 
    }

    public function consulta_aluno() {
      
        return view('painel.consulta_aluno');
    }

    public function consulta_ficha() {
        // $userCount  =          $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ::where('status_id', '=', auth()->id())
        // ->count();
        return view('painel.consulta_ficha',compact('userCount'));    
    }

//// Cadastro
    public function cadastro_menu() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.index');
    }

    public function cadastro_aluno() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_aluno',compact('userCount'));
    }
    public function cadastro_categoria() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_categoria',compact('userCount'));    
    }
    public function cadastro_conselho() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_conselho',compact('userCount'));
    }
    
    public function cadastro_escola() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_escola',compact('userCount'));
    }
    
    public function cadastro_ministerio() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_ministerio',compact('userCount'));
    }
    
    public function cadastro_polo() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_polo',compact('userCount'));
  }
    
    public function cadastro_prazo() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_prazo',compact('userCount'));
  }
    
    public function cadastro_serie() {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_serie',compact('userCount'));
  }
    

}