<?php

namespace App\Imports;

use App\Models\Proveedor;
use Maatwebsite\Excel\Concerns\ToModel;

class ProveedoresImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Proveedor([
            'razon_social'=>$row[0],
            'responsable'=>$row[1],
            'telefono'=>$row[2],
            'direccion'=>$row[3],
            'ruc'=>$row[4],
            'tipo_documento'=>$row[5],
            'activo'=>'1',
            'estado'=>'1',

        ]);
    }
}

