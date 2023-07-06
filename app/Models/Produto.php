<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
  //  public $table = 'produtos';
 //   protected $table ='inscricao_produto';


    protected $fillable = ['Nome','Categoria','image','cat_ingredientes_id'
        ];


  public function categoria() {                                      
    return $this->belongsTo(Cat_ingredientes::class,'cat_ingredientes_id');
  }    

  // public function recibo()
  // {
  //     return $this->belongsToMany(Recibo::class, 'cat_ingredientes_id')
  //                 ->withPivot('Quantidade', 'unidade')
  //                 ->withTimestamps();
  // }
  
  public function recibos()
{
    return $this->belongsToMany(Recibo::class, 'cat_ingredientes_id')
                ->withPivot('Quantidade', 'unidade')
                ->withTimestamps();
}

    
}
