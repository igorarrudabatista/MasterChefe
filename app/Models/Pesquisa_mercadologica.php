<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa_mercadologica extends Model
{
    protected $table = 'pesquisa_mercadologica';

    protected $fillable = ['n_processo_id', 'Descricao_bem', 'Qtd'];

    public function n_processo()
    {
        return $this->belongsTo(N_Processo::class, 'n_processo_id');
    }


    public function pesquisa_mercadologica_pivots ()
    {
        return $this->hasMany(Pesquisa_mercadologica_pivot::class, 'pesquisa_mercadologica_id');
    }
}

