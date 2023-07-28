<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_login'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login' => 'datetime', // Definir o campo 'last_login' como um atributo do tipo 'datetime'

    ];

    public function authenticatedAt()
    {
        $this->update(['last_login' => now()]);
    }

    // public function Product()
    // {
    //     return $this->belongsToMany(Product::class);
    // }

    public function Agenda() {
        return $this->belongsTo(Agenda::class);
        }   
    
    public function FICHA() {
        return $this->belongsTo(FICHA::class);
        }   

        public function forms()
        {
            return $this->hasMany(Form::class);
        }
}
