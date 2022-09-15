<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'pelicula';

    protected $fillable = ['id',
        'titulo',
        'director',
        'año',
        'duracion',
        'genero',
        'existencia'
    ];
}
