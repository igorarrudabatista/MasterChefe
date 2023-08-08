<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano_detalhado extends Model
{
    protected $table = 'plano_detalhado';
    
    protected $fillable = ['n_processo_id', 'metas_id',
     'Natureza_detalhado', 'Produto_Servico_detalhado','Unidade_medida_detalhado',
     'Quantidade_detalhado', 'Valor_unit_detalhado', 'plano_detalhado_sit',
     'plano_detalhado_obs', 

        
    ];
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
