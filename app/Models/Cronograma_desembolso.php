<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cronograma_desembolso extends Model
{
    protected $table = 'cronograma_desembolso';
    
    protected $fillable = ['n_processo_id','metas_id',
     'ano', 'mes','fonte', 'valor_desembolso',

        
    ];
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
