<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;
    protected $table = 'inscricao';

    protected $guarded = [];

    protected $fillable = [ 'dre_id','escola_id','Nome', 'Telefone', 'Email', 'Outros_ingredientes', 'Preparo', 'image', 'checkbox'
     ];



    
    public function ingredientes() {
        return $this->belongsToMany(Ingredientes::class)->withPivot(['Quantidade']);
    }   
    
    public function inscricao() {
        return $this->belongsTo(Inscricao::class, 'inscricao_id');
        }    

      public function pivot() {
        return $this->belongsToMany(Pivot::class);

      }

}
