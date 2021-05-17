<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentoP extends Model
{
    protected $table = 'documento_personal';
    protected $fillable = [
        'user_id', 'tipo_documento', 'documento','archivos',
        'fecha_emision','fecha_vencimiento'
    ];

    protected $dates = ['fecha_emision','fecha_vencimiento'];
    public function users(){
        return $this->belongsTo('App\User','user_id');
    }
}
