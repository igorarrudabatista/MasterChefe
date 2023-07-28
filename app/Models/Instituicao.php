<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;
    protected $table = 'instituicao';
    
    protected $fillable = ['n_processo_id',
     'Nome_Instituicao', 'Nome_Instituicao_sit','Nome_Instituicao_obs',
     'Endereco_Instituicao', 'Endereco_Instituicao_sit', 'Endereco_Instituicao_obs',
     'Telefone_Instituicao', 'Telefone_Instituicao_sit', 'Telefone_Instituicao_obs',
     'CNPJ_Instituicao','CNPJ_Instituicao_sit', 'CNPJ_Instituicao_obs',
     'Email_Instituicao', 'Email_Instituicao_sit', 'Email_Instituicao_obs',
     'Anexo1_Instituicao', 'Anexo1_Instituicao_sit', 'Anexo1_Instituicao_obs',
     'Anexo2_Instituicao', 'Anexo2_Instituicao_sit', 'Anexo2_Instituicao_obs'
        
    ];
    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }
}

