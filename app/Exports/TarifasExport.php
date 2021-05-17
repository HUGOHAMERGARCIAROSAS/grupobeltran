<?php

namespace App\Exports;

use App\Models\Tarifa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarifasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return [
            'Cliente',
            'Tipo de Servicio',
            'Ruta',
            'Precio',
            'Tipo'
        ];
    }
    public function collection()
    {

        return Tarifa::select('clientes.razon_social', 'tarifas.tipo_servicio','tarifas.ruta','tarifas.precio','tarifas.tipo')
        ->join('clientes', 'clientes.id', '=', 'tarifas.cliente_id')
        ->get();
    }

}
