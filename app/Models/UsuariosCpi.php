<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuarioCpi extends Model
{
    protected $table = 'UsuarioCpi';

    protected $fillable = [
        'nombre',
        'password',
        'apellidos',
        'entidad',
        'cargo',
        'tipologia',
        'dni',
        'telefono',
        'email',
        'experiencia_cpi',
        'anios_experiencia',
        'conoce_mdt',
        'acepta_tratamiento_datos',
    ];

    protected $hidden = [];
    
}
