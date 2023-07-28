<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resp_projeto extends Model
{
    protected $fillable = [
        'n_processo_id',
        'Nome_Resp_projeto', 'Nome_Resp_projeto_sit', 'Nome_Resp_projeto_obs',
        'Cargo_Resp_projeto', 'Cargo_Resp_projeto_sit', 'Cargo_Resp_projeto_obs',
        'Endereco_Resp_projeto', 'Endereco_Resp_projeto_sit', 'Endereco_Resp_projeto_obs',
        'Telefone_Resp_projeto', 'Telefone_Resp_projeto_sit', 'Telefone_Resp_projeto_obs',
        'Email_Resp_projeto','Email_Resp_projeto_sit', 'Email_Resp_projeto_obs',
        'Anexo1_Resp_projeto', 'Anexo1_Resp_projeto_sit','Anexo1_Resp_projeto_obs',
        'Anexo2_Resp_projeto', 'Anexo2_Resp_projeto_sit', 'Anexo2_Resp_projeto_obs'
    ];

    protected $table = 'resp_projeto';

    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}
