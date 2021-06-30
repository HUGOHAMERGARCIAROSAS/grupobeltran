<?php

namespace App\Http\Controllers;
use App\Cliente;
use App\Models\Order;
use App\Models\DocumentoP;
use App\Models\Vehiculo;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Exports\ClientesVigentesExport;
use App\Exports\ClientesNoVigentesExport;
use App\Exports\OrdenesFacturadasExport;
use App\Exports\OrdenesNoFacturadasExport;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::where('activo','1')->count();
        $pendientes = Order::where('estado','1')->where('activo','1')->count();
        $canceladas = Order::where('activo','1')->where('estado','0')->count();
        $vehiculos = Vehiculo::where('activo','1')->where('estado','1')->count();
        return view('home')->with(compact('clientes','pendientes','canceladas','vehiculos'));
    }

    public function exportExcelCV(){
        return Excel::download(new ClientesVigentesExport,'clientes-vigentes-list.xlsx');
    }
    public function exportExcelCNV(){
        return Excel::download(new ClientesNoVigentesExport,'clientes-no-vigentes-list.xlsx');
    }
    public function exportExcelOF(){
        return Excel::download(new OrdenesFacturadasExport,'ordenes-facturadas-list.xlsx');
    }
    public function exportExcelNoOF(){
        return Excel::download(new OrdenesNoFacturadasExport,'ordenes-no-facturadas-list.xlsx');
    }
}
