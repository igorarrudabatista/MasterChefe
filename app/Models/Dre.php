<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dre extends Model

{
    use HasFactory;
    protected $table = 'dre';
    protected $fillable = [
        'Nome', 'Telefone','Email','Endereco','Numero','Bairro','Cep','cidade_id',
        'estado_id',
     ];

          public function recibo()
      {
          return $this->belongsTo(Recibo::class);
      }


      
    }
