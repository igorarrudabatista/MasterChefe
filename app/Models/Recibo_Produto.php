<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo_Produto extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'produto_recibo';



    public function recibo(){
        return $this->belongsTo(Recibo::class);
    }
    public function produto(){
        return $this->belongsTo(Produto::class);
    }
}
