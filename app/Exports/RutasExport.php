<?php

namespace App\Exports;

use App\Models\Ruta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RutasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return [
            'Punto Inicial',
            'Punto Final',
            'Distancia'
        ];
    }
    public function collection()
    {
        return Ruta::select("punto_inicial","punto_final","distancia")->get();
    }

}
