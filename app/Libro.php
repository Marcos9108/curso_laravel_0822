<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libro';

    protected $fillable = ['id',
        'nombre',
        'editorial',
        'genero',
        'lanzamiento',
        'autor',
        
    ];

    
}
