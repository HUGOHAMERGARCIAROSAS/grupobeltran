<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderControl extends Model
{
    protected $table = 'orden_control';
    protected $fillable = [
        'km_inicial', 'km_final', 'peso_inicial','peso_final',
        'order_id'
    ];
}
