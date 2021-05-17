<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'clientes';
    protected $fillable = [
        'razon_social', 'responsable', 'estado','documento','tipo_documento',
        'usuario_insert','usuario_deleted','usuario_updated','activo',
        'direccion_carga','direccion_entrega'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
