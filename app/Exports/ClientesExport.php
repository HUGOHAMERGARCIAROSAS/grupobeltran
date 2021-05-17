<?php

namespace App\Exports;

use App\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ClientesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array{
        return [
            'Razon social',
            'Responsable',
            'Tipo documento',
            'Documento',
            'Direccion Carga',
            'Direccion Entrega'
        ];
    }
    public function collection()
    {
        return Cliente::select("razon_social","responsable","tipo_documento","documento",
        "direccion_carga","direccion_entrega")->get();
    }

}
