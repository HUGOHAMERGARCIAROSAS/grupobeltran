<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Models\Ruta;
use App\Models\Order;
use App\User;
use App\Models\OrderControl;
use App\Models\Caja;
use App\Models\Vehiculo;

class CajaController extends Controller
{
    public function index()
    {
        $orders = Order::where('activo','1')->get();
        return view('pages.caja.index')->with(compact('orders'));
    }

    public function store(Request $request){
        $caja = new Caja();
        $caja->cliente_id  = $request->cliente_id;
        $caja->monto  = $request->monto;
        $caja->forma_pago  = $request->forma_pago;
        $caja->nro_factura  = $request->nro_factura;
        $caja->monto_pagar  = $request->monto_pagar;
        $caja->saldo  = $request->saldo;
        $caja->user_insert  = $request->user_insert;
        if ($request->file('factura')) {
            // dd($request->file('archivos'));
            $file = $request->file('factura');
            $name = 'factura_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/factura'.'/'.'personal'.'/';
            $file->move($path, $name);
            $caja->factura = $name;
            }

        $caja->save();
        return back();

    }
}
