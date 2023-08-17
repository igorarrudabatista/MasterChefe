<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    // use HasFactory;
    protected $table = 'metas';
    
    protected $fillable = ['n_processo_id', 'Especificacao_metas',
     'Quantidade_metas', 'Unidade_medida_metas','Inicio_metas',
     'Termino_metas', 'Correcao_metas_sit', 'Obs_metas',

        
    ];
    public function etapas()
    {
        return $this->hasMany(Etapas::class, 'metas_id','id');
    }
    
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
    public function Plano_consolidado()
    {
        return $this->hasMany(PlanoConsolidado::class);
    }
}
