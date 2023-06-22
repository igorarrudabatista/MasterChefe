<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'inscricao_pivot';



    public function inscricao(){
        return $this->belongsTo(Inscricao::class);
    }
    public function ingredientes(){
        return $this->belongsTo(Ingredientes::class);
    }}
