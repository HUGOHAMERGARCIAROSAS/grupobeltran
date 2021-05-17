<?php

namespace App\Imports;

use App\Models\Tarifa;
use Maatwebsite\Excel\Concerns\ToModel;

class TarifasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tarifa([
            'cliente_id'=>$row[0],
            'tipo_servicio'=>$row[1],
            'ruta'=>$row[2],
            'precio'=>$row[3],
            'tipo'=>$row[4],
            'estado'=>1,
            'activo'=>1,
        ]);
    }
}
