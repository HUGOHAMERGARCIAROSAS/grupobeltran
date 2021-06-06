<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    protected $table = 'cajas';
    protected $fillable = [
        'cliente_id', 'monto', 'forma_pago','nro_factura',
        'factura', 'monto_pagar', 'saldo','user_insert'
    ];
}
