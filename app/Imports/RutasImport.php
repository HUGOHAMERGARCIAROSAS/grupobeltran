<?php

namespace App\Imports;

use App\Models\Ruta;
use Maatwebsite\Excel\Concerns\ToModel;

class RutasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ruta([
            'punto_inicial'=>$row[0],
            'punto_final'=>$row[1],
            'distancia'=>$row[2],
            'estado'=>1,
            'activo'=>1,
        ]);
    }
}
