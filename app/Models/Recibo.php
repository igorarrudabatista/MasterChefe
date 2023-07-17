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

    protected $fillable = [ 'dre_id', 'escola_id', 'cidade_id', 'Nome', 'Telefone', 'cpf', 'Email', 'Outros_ingredientes', 'Preparo', 'image', 'desclassificar', 
    'Nome_Prato', 'nota_seduc1', 'nota_seduc2', 'nota_seduc3', 'nota_seduc4', 'nota_seduc5', 'nota_seduc6','alimentos_proibidos', 'nota_dre1', 'nota_dre2', 'nota_dre3',
    'nota_dre4', 'nota_dre5', 'nota_drenutricao1', 'nota_drenutricao2', 'nota_drenutricao3', 'nota_drenutricao4', 'nota_drenutricao5'
      ];
      
    protected $table = 'recibo';
    
   // public $timestamps = false;

    public function produto() {
        return $this->belongsToMany(Produto::class, 'produto_recibo')->withPivot('Quantidade','unidade');
        
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
      public function cidade() {                                      
        return $this->belongsTo(Cidade::class, 'cidade_id');
      }    

      public function likes() {
        return $this->hasMany(Like::class);
      }    

      public function hasLiked($sessionId)
      {
          return $this->likes()->where('sessao', $sessionId)->exists();
      }
          
}
