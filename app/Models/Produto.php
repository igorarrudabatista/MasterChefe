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
    
}
