<?php

namespace App\Imports;

use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\ToModel;

class UnidadesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vehiculo([
            'placa'=>$row[0],
            'marca'=>$row[1],
            'carga'=>$row[2],
            'escala'=>$row[3],
            'propio'=>$row[4],
            'estado'=>1,
            'activo'=>1,
        ]);
    }
}
