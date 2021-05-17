<?php

namespace App\Imports;

use App\Cliente;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cliente([
            'razon_social'=>$row[0],
            'responsable'=>$row[1],
            'tipo_documento'=>$row[2],
            'documento'=>$row[3],
            'direccion_carga'=>$row[4],
            'direccion_entrega'=>$row[5],
            'activo'=>1
        ]);
    }
}
