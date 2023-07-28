<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doc_anexo2 extends Model
{
    protected $fillable = [
        'n_processo_id',
        'Doc_Anexo2_Anexo1', 'Doc_Anexo2_Anexo1_sit', 'Doc_Anexo2_Anexo1_obs',
        'Doc_Anexo2_Anexo2', 'Doc_Anexo2_Anexo2_sit', 'Doc_Anexo2_Anexo2_obs',
        'Doc_Anexo2_Anexo3', 'Doc_Anexo2_Anexo3_sit', 'Doc_Anexo2_Anexo3_obs',
        'Doc_Anexo2_Anexo4', 'Doc_Anexo2_Anexo4_sit', 'Doc_Anexo2_Anexo4_obs',
        'Doc_Anexo2_Anexo5', 'Doc_Anexo2_Anexo5_sit', 'Doc_Anexo2_Anexo5_obs',
        'Doc_Anexo2_Anexo6', 'Doc_Anexo2_Anexo6_sit', 'Doc_Anexo2_Anexo6_obs',
        'Doc_Anexo2_Anexo7', 'Doc_Anexo2_Anexo7_sit', 'Doc_Anexo2_Anexo7_obs',
        'Doc_Anexo2_Anexo8', 'Doc_Anexo2_Anexo8_sit', 'Doc_Anexo2_Anexo8_obs',
        'Doc_Anexo2_Anexo9', 'Doc_Anexo2_Anexo9_sit', 'Doc_Anexo2_Anexo9_obs',
        'Doc_Anexo2_Anexo10', 'Doc_Anexo2_Anexo10_sit', 'Doc_Anexo2_Anexo10_obs',
        'Doc_Anexo2_Anexo11', 'Doc_Anexo2_Anexo11_sit', 'Doc_Anexo2_Anexo11_obs',

    ];

    protected $table = 'doc_anexo2';

    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
