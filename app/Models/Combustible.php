<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Combustible extends Model
{
    protected $table = 'combustibles';
    protected $fillable = [
        'lugar', 'galones', 'precio','nro_ticket',
        'ticket','orden_trabajo_id','activo'
    ];
    public function orders(){
        return $this->belongsTo(Order::class,'orden_trabajo_id');
    }
    public function rutas(){
        return $this->belongsTo(Ruta::class,'lugar');
    }
}
