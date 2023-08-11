<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etapas extends Model
{
    protected $table = 'etapas';
    
    protected $fillable = ['n_processo_id', 'metas_id',
     'Especificacao_etapa', 'Quantidade_etapa','Unidade_medida_etapa',
     'Inicio_etapa', 'Termino_etapa', 'Correcao_etapas_sit',
     'Obs_etapas', 
        
    ];
    public function metas()
    {
        return $this->belongsTo(Metas::class, 'metas_id');
    }
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}


