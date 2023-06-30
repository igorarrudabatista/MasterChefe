<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{

    use HasFactory;

    // protected $fillable = [
    //    'DataEntrega', 'DataRetirada', 'Descrição', 'MensagemCliente',
    //     'Observacoes', 'Taxa', 'Desconto'
    // ];

    protected $fillable = [ 'dre_id','escola_id','Nome', 'Telefone', 'Email', 'Outros_ingredientes', 'Preparo', 'image', 'checkbox', 
    'Nome_Prato', 'Nota1', 'Nota2', 'Nota3', 'Nota4', 'Nota5', 'Nota6', 'disp_site', 'voto'
  ];
    protected $table = 'recibo';
    
   // public $timestamps = false;

    public function produto() {
        return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
    }   
    
    // public function empresa_cliente() {
    //   return $this->belongsTo(Empresa_Cliente::class, 'empresa_cliente_id');
    //   }      

      public function produto_recibo() {
        return $this->belongsToMany(Recibo_Produto::class);

      }
      public function Dre() {
        return $this->belongsTo(Dre::class, 'dre_id');
      }    
      public function escola() {
        return $this->belongsTo(Escola::class, 'escola_id');
      }    

      public function likes() {
        return $this->hasMany(Like::class, 'recibo_id', 'sessao');
      }    

}
