<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
    use HasFactory;use HasFactory;
    protected $table = 'paginas';

    protected $fillable = [
        'URL',
        'Name',
        'Descripcion'
    ];

}
