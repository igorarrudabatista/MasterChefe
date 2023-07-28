<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_anexo1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'n_processo_id',
        'N_proposta','N_proposta_sit', 'N_proposta_obs',
        'Comp_Oficio','Comp_Oficio_sit', 'Comp_Oficio_obs',
        'Comp_Assinado', 'Comp_Assinado_sit', 'Comp_Assinado_obs',
    ];
    public $timestamps = true;

    protected $table = 'doc_anexo1';
    protected $primaryKey = 'id'; // Defina o nome da chave primária, caso não siga o padrão 'id'

    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
