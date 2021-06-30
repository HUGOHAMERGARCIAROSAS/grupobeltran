<?php

namespace App\Exports;
use App\Cliente;
use Maatwebsite\Excel\Concerns\FromCollection;

class ClientesVigentesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array{
        return [
            'Razon social',
            'Responsable',
            'Documento',
            'Direccion Carga',
            'Direccion Entrega'
        ];
    }
    public function collection()
    {
        return Cliente::select("razon_social","responsable","documento",
        "direccion_carga","direccion_entrega")->where('activo','1')->get();
    }
}
