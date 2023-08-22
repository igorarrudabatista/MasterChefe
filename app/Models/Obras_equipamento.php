<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obras_equipamento extends Model
{
    protected $table = 'obras_equipamentos';
    
    protected $fillable = ['n_processo_id','Natureza_id','Cidade_id',
     'Especificacao', 'Unidade','Qtd', 'Valor_unit', 'Local_destino',
     'Propriedade'

        
    ];
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }

}
