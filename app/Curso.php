<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'curso';

    protected $fillable = ['id',
        'nombre',
        'instructor',
        'duracion',
        'fecha_inicio',
        'fecha_fin'
    ];
}
