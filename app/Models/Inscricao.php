<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;

    protected $table = 'inscricao';

    protected $fillable = [ 'dre_id','escola_id','Nome', 'Telefone', 'Email', 'Outros_ingredientes', 'Preparo', 'image', 'checkbox'
];

    public function produto() {
        
        return $this->belongsToMany(Produto::class)->withPivot(['Quantidade']);
    }   
    
    public function inscricao_pivot() {
        return $this->belongsToMany(Inscricao_pivot::class);

      }

    public function dre() {
       return $this->belongsTo(Dre::class);
        }      

    public function escola() {
        return $this->belongsTo(Escola::class);
            }      


}
