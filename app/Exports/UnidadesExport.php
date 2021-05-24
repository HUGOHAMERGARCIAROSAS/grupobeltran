<?php

namespace App\Exports;

use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UnidadesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return [
            'Placa',
            'Marca',
            'Carga',
            'Escala',
            'Propio'
        ];
    }
    public function collection()
    {
        return Vehiculo::select('placa', 'marca','carga','escala','propio')
        ->get();
    }

}
