<?php

namespace App\Models;

// app/Models/User.php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

/*     protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Crear automáticamente una Persona asociada
            $persona = new Persona([
                'nombreDeUsuario' => $user->name,
                'email'=> $user->email,
                'idusuario' => $user->id,
            ]);

            // Asociar la Persona creada al User
            $user->persona()->save($persona);
        });
    } */

    public function persona()
    {
        return $this->hasOne(Persona::class, 'idpersona');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
