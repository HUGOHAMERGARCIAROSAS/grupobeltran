<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Models\Ruta;
use App\Models\Order;
use App\User;
use App\Models\OrderControl;
use App\Models\Vehiculo;

class OrdenTrabajoController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get()->where('activo','1');
        $conductores=User::select('users.name','users.id')
        ->join('role_user','users.id','=','role_user.user_id')
        ->where('role_user.role_id',5)
        ->where('tipo','1')
        ->get();
        $rutas = Ruta::get()->where('activo','1');
        $unidades = Vehiculo::get()->where('activo','1');
        $orders = Order::where('activo','1')->get();
        return view('pages.ordenTrabajo.index')->with(compact('clientes','conductores','rutas','unidades','orders'));
    }
    public function create()
    {
        //
    }

    public function buscar(Request $request)
    {

        $fecha_inicio = $request->fecha_ini;
        $fecha_fin = $request->fecha_fin;
        
        $orders = Order::whereBetween('created_at', [$request->fecha_ini, $request->fecha_fin])->get();
        // dd($reporte);
        return view('pages.ordenTrabajo.consulta')->with(compact('orders','fecha_inicio','fecha_fin'));

    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->fecha_inicio  = $request->fecha_inicio;
        $order->fecha_fin  = $request->fecha_fin;
        $order->empresa_id  = 1;
        $order->cliente_id  = $request->cliente_id;
        $order->conductor_id  = $request->conductor_id;
        $order->ruta_id  = $request->ruta_id;
        $order->vehiculo_id  = $request->vehiculo_id;
        $order->producto  = $request->producto;
        $order->peso_inicial  = $request->peso_inicial;
        $order->monto  = $request->monto;
        $order->total  = $request->total;
        $order->moneda  = $request->moneda;
        $order->total_soles  = $request->total_soles;
        $order->terceros_check  = $request->terceros_check;
        $order->empresa_tercera_id  = $request->empresa_tercera_id;
        $order->precio_tercero  = $request->precio_tercero;
        $order->monto_tercero  = $request->monto_tercero;
        $order->usuario_created  = $request->usuario_created;
        $order->activo  = 1;
        $order->estado  = 1;

        $order->save();
        return back();
    }
    public function update(Request $request,$id)
    {
        $order = Order::findOrFail($id);
        $order->fecha_inicio  = $request->fecha_inicio;
        $order->fecha_fin  = $request->fecha_fin;
        $order->empresa_id  = 1;
        $order->cliente_id  = $request->cliente_id;
        $order->conductor_id  = $request->conductor_id;
        $order->ruta_id  = $request->ruta_id;
        $order->vehiculo_id  = $request->vehiculo_id;
        $order->producto  = $request->producto;
        $order->peso_inicial  = $request->peso_inicial;
        $order->monto  = $request->monto;
        $order->total_soles  = $request->total_soles;
        $order->terceros_check  = $request->terceros_check;
        $order->empresa_tercera_id  = $request->empresa_tercera_id;
        $order->precio_tercero  = $request->precio_tercero;
        $order->monto_tercero  = $request->monto_tercero;
        $order->usuario_created  = $request->usuario_created;
        $order->moneda  = $request->moneda;
        $order->activo  = 1;
        $order->estado  = 1;

        $order->save();
        return back();
    }


    public function createOrderControl(Request $request){
            $order = new OrderControl();
            $order->km_inicial  = $request->km_inicial;
            $order->km_final  = $request->km_final;
            $order->order_id  = $request->order_id;
            $order->peso_inicial  = $request->peso_inicial;
            $order->peso_final  = $request->peso_final;
            $order->save();
            return back();
    }


    public function updateEstado(Request $request, $id){
        $order = Order::findOrFail($id);
        $order->estado=0;
        $order->save();
        return back();
    }
}
