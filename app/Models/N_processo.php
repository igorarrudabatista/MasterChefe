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
    public function Resp_Instituicao() {
        return $this->hasOne(Resp_instituicao::class,'n_processo_id');

      }
      public function Orgaos() {
        return $this->hasOne(Orgaos::class, 'id', 'Orgao_Concedente');
    }
  //   public function Metas() {
  //     return $this->belongsToMany(Metas::class, 'n_processo_id')->withPivot('Quantidade','unidade');
      
  // }   

       public function Metas() {
         return $this->hasMany(Metas::class, 'n_processo_id', 'id', 'Especificacao_metas');
       }
      public function Etapas() {
        return $this->hasOne(Etapas::class, 'n_processo_id', 'id');
    }
      public function Plano_consolidado() {
        return $this->hasOne(Plano_consolidado::class, 'n_processo_id', 'id');
    }
      public function Plano_detalhado() {
        return $this->hasOne(Plano_detalhado::class, 'n_processo_id', 'id');
    }
      public function Cronograma_desembolso() {
        return $this->hasOne(Cronograma_desembolso::class, 'n_processo_id', 'id');
    }

}
