<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa_mercadologica_pivot extends Model
{
    protected $table = 'pesquisa_mercadologica_pivot';
    protected $fillable = ['Qtd', 'Empresa', 'Valor', 'Anexo'];



    public function pesquisa_mercadologica()
    {
        return $this->belongsTo(Pesquisa_mercadologica::class, 'pesquisa_mercadologica_id');

    }
}