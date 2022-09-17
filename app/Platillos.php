<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillos extends Model
{

    protected $table = 'platillos';

    protected $fillable = ['id',
        'nombre_platillo',
        'especificacion',
        'porciones',
        'precio'
    ];
}
