<?php

namespace App\Exports;
use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrdenesFacturadasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array{
        return [
            '',
            'Responsable',
            'Vehículo',
            'Rutas',
            'Importe',
            'Producto',
            'Peso Inicial'
        ];
    }
    public function collection()
    {
        return Order::select('orders.id', 'clientes.razon_social','vehículo.placa','rutas.punto_inicial',
                    'orders.monto','orders.producto','orders.peso_inicial')
                ->join('clientes', 'orders.cliente_id', '=', 'clientes.id')
                ->join('vehículo', 'orders.vehiculo_id', '=', 'vehículo.id')
                ->join('rutas', 'orders.ruta_id', '=', 'rutas.id')
                ->where('orders.estado','0')->get();
    }
}
