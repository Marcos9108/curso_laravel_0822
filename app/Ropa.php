<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    protected $table = 'ropa';

    protected $fillable = ['pedido',
        'ropa',
        'talla',
        'genero',
        'marca',
        'cantidad',
        'color'
    ];
}
