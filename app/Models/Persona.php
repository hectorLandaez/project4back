<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'personas';
    protected $fillable = [
        'nombreDeUsuario',
        'primernombre',
        'segundonombre',
        'primerapellido',
        'segundoapellido',
        'email',
        'habilitado',
        'idusuario'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'idusuario');
    }
}



