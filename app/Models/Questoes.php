<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Questoes extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */

protected $table = 'form_items';

    protected $fillable = [
       'label',    'type'
    ];
     public function users()
     {
         return $this->belongsToMany(User::class);
     }
     public function FICHA()
     {
         return $this->hasMany(FICHA::class);
     }
     

     public function recibo()
     {
         return $this->belongsTo(Recibo::class);
     }

}