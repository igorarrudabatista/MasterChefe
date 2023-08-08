<?php

namespace App\Http\Controllers;

use App\Models\Cidade;
use App\Models\Estado;
use App\Models\N_processo;
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

        $processoCount  =  N_processo::where('user_id', '=', auth()->id())->count();
        $processoCount_corrigir  =  N_processo::where('user_id', '=', auth()->id())->where('Status', '=', 'CORRIGIR')->count();
        $processoCount_finalizado  =  N_processo::where('user_id', '=', auth()->id())->where('Status', '=', 'FINALIZADO')->count();
        $processoCount_aguardando  =  N_processo::where('user_id', '=', auth()->id())->where('Status', '=', 'AGUARDANDO')->count();
        $processoCount_tramitada  =  N_processo::where('user_id', '=', auth()->id())->where('Status', '=', 'TRAMITADA')->count();
        $processoCount_nao_finalizada  =  N_processo::where('user_id', '=', auth()->id())->where('Status', '=', '')->count();

        $nProcessos  =  N_processo::with([
            'Doc_anexo1',
            'Doc_anexo2',
            'instituicao',
            'Doc_anexo2',
            'Projeto_conteudo',
            'Resp_projeto',
            'Orgaos'
        ])->where('user_id', '=', auth()->id())->orderby('id', 'DESC')->get();
        $cidade = Cidade::count();
        $estado = Estado::count();
        session()->put('processoCount', $processoCount);
        session()->put('processoCount_corrigir', $processoCount_corrigir);
        session()->put('processoCount_finalizado', $processoCount_finalizado);
        session()->put('processoCount_aguardando', $processoCount_aguardando);
        session()->put('processoCount_tramitada', $processoCount_tramitada);
        session()->put('processoCount_nao_finalizada', $processoCount_nao_finalizada);


        return view('painel.painel-dashboard', compact(
            'cidade',
            'estado',
            'processoCount',
            'nProcessos',
            'processoCount_corrigir',
            'processoCount_finalizado',
            'processoCount_aguardando',
            'processoCount_tramitada',
            'processoCount_nao_finalizada',

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
