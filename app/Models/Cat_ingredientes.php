<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat_ingredientes extends Model
{
    use HasFactory;
    protected $table = 'cat_ingredientes';
    protected $fillable = ['Nome', 'Obs'];

    public function produto() {                                      
        return $this->hasMany(Produto::class);
      }    



    }
