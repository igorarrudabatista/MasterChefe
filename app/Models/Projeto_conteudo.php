<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto_conteudo extends Model
{
    protected $fillable = [
        'n_processo_id',
        'Titulo_Projeto_Conteudo','Titulo_Projeto_Conteudo_sit','Titulo_Projeto_Conteudo_obs',
        'Objeto_Projeto_Conteudo','Objeto_Projeto_Conteudo_sit','Objeto_Projeto_Conteudo_obs',
        'Obj_Geral_Projeto_Conteudo','Obj_Geral_Projeto_Conteudo_sit','Obj_Geral_Projeto_Conteudo_obs',
        'Obj_especifico_Projeto_Conteudo','Obj_especifico_Projeto_Conteudo_sit','Obj_especifico_Projeto_Conteudo_obs',
        'Justificativa_Projeto_Conteudo','Justificativa_Projeto_Conteudo_sit','Justificativa_Projeto_Conteudo_obs',
        'Contextualizacao_Projeto_Conteudo','Contextualizacao_Projeto_Conteudo_sit','Contextualizacao_Projeto_Conteudo_obs',
        'Diagnostico_Projeto_Conteudo','Diagnostico_Projeto_Conteudo_sit','Diagnostico_Projeto_Conteudo_obs',
        'Importancia_Projeto_Conteudo','Importancia_Projeto_Conteudo_sit','Importancia_Projeto_Conteudo_obs',
        'Caracterizacao_Projeto_Conteudo','Caracterizacao_Projeto_Conteudo_sit','Caracterizacao_Projeto_Conteudo_obs',
        'Publico_Alvo_Interno_Projeto_Conteudo','Publico_Alvo_Interno_Projeto_Conteudo_sit','Publico_Alvo_Interno_Projeto_Conteudo_obs',
        'Publico_Alvo_Externo_Projeto_Conteudo','Publico_Alvo_Externo_Projeto_Conteudo_sit','Publico_Alvo_Externo_Projeto_Conteudo_obs',
        'Problemas_Projeto_Conteudo','Problemas_Projeto_Conteudo_sit','Problemas_Projeto_Conteudo_obs',
        'Resultados_Projeto_Conteudo','Resultados_Projeto_Conteudo_sit','Resultados_Projeto_Conteudo_obs',
        'Inicio_Projeto_Conteudo','Inicio_Projeto_Conteudo_sit','Inicio_Projeto_Conteudo_obs',
        'Fim_Projeto_Conteudo','Fim_Projeto_Conteudo_sit','Fim_Projeto_Conteudo_obs',
       
        'N_Emenda_Projeto_Conteudo','N_Emenda_Projeto_Conteudo_sit','N_Emenda_Projeto_Conteudo_obs',
        'Nome_Autor_Emenda_Projeto_Conteudo','Nome_Autor_Emenda_Projeto_Conteudo_sit','Nome_Autor_Emenda_Projeto_Conteudo_obs',
        'Valor_Repasse_Projeto_Conteudo','Valor_Repasse_Projeto_Conteudo_sit','Valor_Repasse_Projeto_Conteudo_obs',
        'Valor_Contrapartida_Projeto_Conteudo','Valor_Contrapartida_Projeto_Conteudo_sit','Valor_Contrapartida_Projeto_Conteudo_obs',


    ];

    protected $table = 'projeto_conteudo';

    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
