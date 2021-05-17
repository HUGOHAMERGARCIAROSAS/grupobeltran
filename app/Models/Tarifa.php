<?php

namespace App\Models;
use App\Cliente;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $table = 'tarifas';
    protected $fillable = [
        'tipo_servicio', 'ruta',
         'precio','estado','tipo',
        'usuario_insert','usuario_deleted',
        'usuario_updated','activo','cliente_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class,'cliente_id');
    }
}
