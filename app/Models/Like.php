<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['recibo_id', 'sessao'];

    protected $table = 'likes';

    
        // public function recibo() {
        // return $this->belongsTo(Recibo::class);
        // }

        public function recibo() {
            return $this->belongsTo(Recibo::class);
          }  
}
