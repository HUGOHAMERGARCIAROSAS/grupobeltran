<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $table = 'rutas';
    protected $fillable = [
        'punto_inicial', 'punto_final', 'distancia','estado',
        'usuario_insert','usuario_deleted','usuario_updated','activo',
    ];
}
