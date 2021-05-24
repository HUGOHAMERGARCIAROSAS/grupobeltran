<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = [
        'razon_social','responsable','ruc','direccion','telefono',
        'created_at','updated_at','usuario_insert',
        'usuario_updated','usuario_deleted',
        'estado','activo','tipo_documento'
    ];
}
