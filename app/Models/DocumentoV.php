<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocumentoV extends Model
{
    use SoftDeletes;
    protected $table = 'documento_vehiculo';
    protected $fillable = [
        'vehiculo_id', 'tipo_documento', 'documento','archivos',
        'fecha_emision','fecha_vencimiento','estado','activo','fechaTramite'
    ];

    protected $dates = ['fecha_emision','fecha_vencimiento'];
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }
}