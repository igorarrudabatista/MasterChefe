<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class N_processo extends Model
{
    protected $fillable = [
        'user_id',
        'Orgao_Concedente',
    ];
    protected $table = 'n_processo';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function instituicao() {
      return $this->hasOne(Instituicao::class, 'n_processo_id');

      }
    public function Doc_anexo1() {
        return $this->hasOne(Doc_anexo1::class, 'n_processo_id');

      }
    public function Doc_anexo2() {
        return $this->hasOne(Doc_anexo2::class, 'n_processo_id');

      }
    public function Projeto_conteudo() {
        return $this->hasOne(Projeto_conteudo::class,'n_processo_id');

      }
    public function Resp_projeto() {
        return $this->hasOne(Resp_projeto::class,'n_processo_id');

      }

}
