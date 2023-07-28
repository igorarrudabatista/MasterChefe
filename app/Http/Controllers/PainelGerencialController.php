<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\Produto;
use App\Models\Instituicao;
use App\Models\Dre;
use App\Models\User;
use App\Models\Like;


use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class PainelGerencialController extends Controller
{



    public function dashboard()
    {
        $cidade = Cidade::count();
        $estado = Estado::count();

        return view('painel.painel-dashboard', compact(

        
            'cidade',
            'estado',
    
        ));
    }

    public function index()
    {

        return view('painel.index');
    }

    public function consulta_aluno()
    {

        return view('painel.consulta_aluno');
    }

    public function consulta_ficha()
    {
        // $userCount  =          $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ::where('status_id', '=', auth()->id())
        // ->count();
        return view('painel.consulta_ficha', compact('userCount'));
    }

    //// Cadastro
    public function cadastro_menu()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.index');
    }

    public function cadastro_aluno()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_aluno', compact('userCount'));
    }
    public function cadastro_categoria()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_categoria', compact('userCount'));
    }
    public function cadastro_conselho()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_conselho', compact('userCount'));
    }

    public function cadastro_escola()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_escola', compact('userCount'));
    }

    public function cadastro_ministerio()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_ministerio', compact('userCount'));
    }

    public function cadastro_polo()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_polo', compact('userCount'));
    }

    public function cadastro_prazo()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_prazo', compact('userCount'));
    }

    public function cadastro_serie()
    {
        // $userCount  =  ALUNO::where('AlunoNome', '=', auth()->id())
        // ->count();
        return view('painel.cadastro.cadastro_serie', compact('userCount'));
    }
}
