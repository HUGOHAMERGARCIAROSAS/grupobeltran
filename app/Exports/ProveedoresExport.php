<?php

namespace App\Exports;

use App\Models\Proveedor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProveedoresExport implements FromCollection, WithHeadings
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
            'Teléfono',
            'Dirección'
        ];
    }

    public function collection()
    {
        return Proveedor::select("razon_social","responsable","tipo_documento","ruc",
        "telefono","direccion")->get();
    }

}
