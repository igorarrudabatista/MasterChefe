<?php

namespace App\Http\Controllers;
use App\Models\ESCOLA;
use App\Models\User;



use Illuminate\Http\Request;

class PainelGerencialController extends Controller
{



        public function dashboard() {

            $usuarios = User::orderBy('id','DESC')->paginate(5);

            // $userCount  =  FICHA::where('AlunoNome', '=', auth()->id())
            // ->count();
            $escolas = ESCOLA::count();
            // $totalfichas = FICHA::count();
            // $fichasNAOtramitadas = FICHA::where('status_id', '=', NULL)->count();
            // $fichasTramitadas = FICHA::where('status_id', '!=', NULL)->count();
        
            return view('painel.painel-dashboard',compact(
                                                          
                                                          
                                                          'escolas',
                                                          
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