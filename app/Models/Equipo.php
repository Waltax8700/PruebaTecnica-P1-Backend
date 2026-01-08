<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';

    protected $fillable = [
        'id',
        'codigo',
        'tipo',
        'cliente',
        'estado',
        'fecha_entrega'
    ];
}
