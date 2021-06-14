<?php

namespace App\Models;
use App\Cliente;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'fecha_inicio', 'fecha_fin', 'empresa_id','cliente_id',
        'conductor_id','ruta_id','vehiculo_id','producto','peso_inicial',
        'monto','total','total_soles','terceros_check','empresa_tercera_id',
        'precio_tercero','monto_tercero','created_at','updated_at',
        'usuario_insert','usuario_deleted','usuario_updated','activo',
        'estado','moneda'
    ];

    protected $dates = ['fecha_inicio','fecha_fin'];

    public function clientes(){
        return $this->belongsTo(Cliente::class,'cliente_id');
    }
    public function usuarios(){
        return $this->belongsTo(User::class,'conductor_id');
    }
    public function vehiculos(){
        return $this->belongsTo(Vehiculo::class,'vehiculo_id');
    }
    public function rutas(){
        return $this->belongsTo(Ruta::class,'ruta_id');
    }
    public function sedes(){
        return $this->belongsTo(Sede::class,'sede_id');
    }
}
