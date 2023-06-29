<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    
    protected $fillable = ['recibo_id', 'sessao'];

        public function recibo() {
        return $this->belongsTo(Recibo::class);
        }

}
