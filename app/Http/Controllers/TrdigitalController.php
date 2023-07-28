<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Maatwebsite\Excel\Facades\Excel;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

use App\Models\N_processo;
use App\Models\Orgaos;

use App\Models\Resp_instituicao;
use App\Models\Instituicao;
use App\Models\Resp_projeto;
use App\Models\Projeto_conteudo;
use App\Exports\ReciboExport;
use App\Models\Doc_anexo1;
use App\Models\Doc_anexo2;

class TrdigitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:trdigital-list|trdigital-create|trdigital-edit|trdigital-delete|trdigital-invoice', ['only' => ['index', 'show']]);
        $this->middleware('permission:trdigital-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:trdigital-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:trdigital-delete', ['only' => ['destroy']]);
        $this->middleware('permission:trdigital-invoice', ['only' => ['invoice']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nProcessos = N_processo::with([
            'Doc_anexo1',
            'Doc_anexo2',
            'instituicao',
            'Doc_anexo2',
            'Projeto_conteudo',
            'Resp_projeto',
        ])->get();

        return view('trdigital.index', compact('nProcessos'));
    }

    public function create()
    {
        $orgaos = Orgaos::all();
        return view('trdigital.create',compact('orgaos'));
    }
















    
    public function store(Request $request)
    {
        $nProcesso = N_Processo::create([
            'user_id' => $request->user_id,
            'Orgao_Concedente' => $request->Orgao_Concedente,
            'N_proposta' => $request->N_proposta,
        ]);
    
    // - 1
        $anexo1Data = [
            'n_processo_id' => $nProcesso->id,
            'N_proposta' => $request->N_proposta,
        ];

        if ($request->hasFile('Comp_Oficio')) {
            $anexo1Data['Comp_Oficio'] = $request->file('Comp_Oficio')->store('pdfs/doc_anexo1', 'public');
        }
        if ($request->hasFile('Comp_Assinado')) {
            $anexo1Data['Comp_Assinado'] = $request->file('Comp_Assinado')->store('pdfs/doc_anexo1', 'public');
        }
        Doc_anexo1::create($anexo1Data);


// fim do 1

   // 2
          $resp_instituicao = [
              'n_processo_id' => $nProcesso->id,
              'Nome_Resp_Instituicao' => $request->Nome_Resp_Instituicao,
              'Cargo_Resp_Instituicao' => $request->Cargo_Resp_Instituicao,
              'End_Resp_Instituicao' => $request->End_Resp_Instituicao,
              'Telefone_Resp_Instituicao' => $request->Telefone_Resp_Instituicao,
              'Email_Resp_Instituicao' => $request->Email_Resp_Instituicao,
           ];

          if ($request->hasFile('Anexo1_Resp_Instituicao')) {
             $resp_instituicao['Anexo1_Resp_Instituicao'] = $request->file('Anexo1_Resp_Instituicao')->store('pdfs/resp_instituicao', 'public');
         }
          if ($request->hasFile('Anexo2_Resp_Instituicao')) {
             $resp_instituicao['Anexo2_Resp_Instituicao'] = $request->file('Anexo2_Resp_Instituicao')->store('pdfs/resp_instituicao', 'public');
         }

         Resp_instituicao::create($resp_instituicao);

//         // fim do 2

        
// // Inicio do 3        
         $instituicao = [
             'n_processo_id' => $nProcesso->id,
             'Nome_Instituicao' => $request->Nome_Instituicao,
             'CNPJ_Instituicao' => $request->CNPJ_Instituicao,
             'Endereco_Instituicao' => $request->Endereco_Instituicao,
             'Telefone_Instituicao' => $request->Telefone_Instituicao,
             'Email_Instituicao' => $request->Email_Instituicao,
          
         ];
         if ($request->hasFile('Anexo1_Instituicao')) {
             $instituicao['Anexo1_Instituicao'] = $request->file('Anexo1_Instituicao')->store('pdfs/instituicao', 'public');
         }
         if ($request->hasFile('Anexo2_Instituicao')) {
             $instituicao['Anexo2_Instituicao'] = $request->file('Anexo2_Instituicao')->store('pdfs/instituicao', 'public');
         }
         Instituicao::create($instituicao);
//  // fim do 3
 
//  // inicio do 4
        
         $resp_projeto =[
             'n_processo_id' => $nProcesso->id,
             'Nome_Resp_projeto' => $request->Nome_Resp_projeto,
             'Cargo_Resp_projeto' => $request->Cargo_Resp_projeto,
             'Endereco_Resp_projeto' => $request->Endereco_Resp_projeto,
             'Telefone_Resp_projeto' => $request->Telefone_Resp_projeto,
             'Email_Resp_projeto' => $request->Email_Resp_projeto,
            
         ];
         if ($request->hasFile('Anexo1_Resp_projeto')) {
             $resp_projeto['Anexo1_Resp_projeto'] = $request->file('Anexo1_Resp_projeto')->store('pdfs/resp_projeto', 'public');
         }
         if ($request->hasFile('Anexo2_Resp_projeto')) {
             $resp_projeto['Anexo2_Resp_projeto'] = $request->file('Anexo2_Resp_projeto')->store('pdfs/resp_projeto', 'public');
         }

         Resp_projeto::create($resp_projeto);
// fim do 4

// inicio do 5
        $doc_anexo2 = [
            'n_processo_id' => $nProcesso->id,
    
        ];

        if ($request->hasFile('Doc_Anexo2_Anexo1')) {
            $doc_anexo2['Doc_Anexo2_Anexo1'] = $request->file('Doc_Anexo2_Anexo1')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo2')) {
            $doc_anexo2['Doc_Anexo2_Anexo2'] = $request->file('Doc_Anexo2_Anexo2')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo3')) {
            $doc_anexo2['Doc_Anexo2_Anexo3'] = $request->file('Doc_Anexo2_Anexo3')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo4')) {
            $doc_anexo2['Doc_Anexo2_Anexo4'] = $request->file('Doc_Anexo2_Anexo4')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo5')) {
            $doc_anexo2['Doc_Anexo2_Anexo5'] = $request->file('Doc_Anexo2_Anexo5')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo6')) {
            $doc_anexo2['Doc_Anexo2_Anexo6'] = $request->file('Doc_Anexo2_Anexo6')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo7')) {
            $doc_anexo2['Doc_Anexo2_Anexo7'] = $request->file('Doc_Anexo2_Anexo7')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo8')) {
            $doc_anexo2['Doc_Anexo2_Anexo8'] = $request->file('Doc_Anexo2_Anexo8')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo9')) {
            $doc_anexo2['Doc_Anexo2_Anexo9'] = $request->file('Doc_Anexo2_Anexo9')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo10')) {
            $doc_anexo2['Doc_Anexo2_Anexo10'] = $request->file('Doc_Anexo2_Anexo10')->store('pdfs/doc_anexo2', 'public');
        }
        if ($request->hasFile('Doc_Anexo2_Anexo11')) {
            $doc_anexo2['Doc_Anexo2_Anexo11'] = $request->file('Doc_Anexo2_Anexo11')->store('pdfs/doc_anexo2', 'public');
        }

        Doc_anexo2::create($doc_anexo2);

         $projeto_conteudo = [
             'n_processo_id' => $nProcesso->id,
             'Titulo_Projeto_Conteudo' => $request->Titulo_Projeto_Conteudo,
             'Objeto_Projeto_Conteudo' => $request->Objeto_Projeto_Conteudo,
             'Obj_Geral_Projeto_Conteudo' => $request->Obj_Geral_Projeto_Conteudo,
             'Obj_especifico_Projeto_Conteudo' => $request->Obj_especifico_Projeto_Conteudo,
             'Justificativa_Projeto_Conteudo' => $request->Justificativa_Projeto_Conteudo,
             'Contextualizacao_Projeto_Conteudo' => $request->Contextualizacao_Projeto_Conteudo,
             'Diagnostico_Projeto_Conteudo' => $request->Diagnostico_Projeto_Conteudo,
             'Importancia_Projeto_Conteudo' => $request->Importancia_Projeto_Conteudo,
             'Caracterizacao_Projeto_Conteudo' => $request->Caracterizacao_Projeto_Conteudo,
             'Publico_Alvo_Interno_Projeto_Conteudo' => $request->Publico_Alvo_Interno_Projeto_Conteudo,
             'Publico_Alvo_Externo_Projeto_Conteudo' => $request->Publico_Alvo_Externo_Projeto_Conteudo,
             'Problemas_Projeto_Conteudo' => $request->Problemas_Projeto_Conteudo,
             'Resultados_Projeto_Conteudo' => $request->Resultados_Projeto_Conteudo,
             'Inicio_Projeto_Conteudo' => $request->Inicio_Projeto_Conteudo,
             'Fim_Projeto_Conteudo' => $request->Fim_Projeto_Conteudo,
             'N_Emenda_Projeto_Conteudo' => $request->N_Emenda_Projeto_Conteudo,
             'Nome_Autor_Emenda_Projeto_Conteudo' => $request->Nome_Autor_Emenda_Projeto_Conteudo,
             'Valor_Repasse_Projeto_Conteudo' => $request->Valor_Repasse_Projeto_Conteudo,
             'Valor_Contrapartida_Projeto_Conteudo' => $request->Valor_Contrapartida_Projeto_Conteudo,

         ];

         Projeto_conteudo::create($projeto_conteudo);

        // Doc_anexo1::create($anexo1Data);
        // //dd($anexo1Data);
        // Resp_instituicao::create($resp_instituicao);
        // Instituicao::create($instituicao);
        // Resp_projeto::create($resp_projeto);
        // Doc_anexo2::create($doc_anexo2);
        // Projeto_conteudo::create($projeto_conteudo);

        return redirect()->route('trdigital.index');
    }







    public function show($id)
    {
        $n_processo = N_processo::findOrFail($id);
        return view('trdigital.show', compact('n_processo','anexo1'));
    }

    public function edit(N_processo $nProcessos, $id)
    {
        
        $nProcessos = N_processo::find($id);
        $nProcessos = N_processo::with([
            'Doc_anexo1',
            'Doc_anexo2',
            'instituicao',
            'Doc_anexo2',
            'Projeto_conteudo',
            'Resp_projeto',
            ])->get();
        return view('trdigital.edit', compact('nProcessos'));
    }

    public function update(Request $request, $id)
    {
        $n_processo = N_processo::findOrFail($id);
        $n_processo->update($request->all());
        return redirect()->route('trdigital.show', $n_processo->id);
    }

    public function destroy($id)
    {
        $n_processo = N_processo::findOrFail($id);
        $n_processo->delete();
        return redirect()->route('trdigital.index');
    }
}
