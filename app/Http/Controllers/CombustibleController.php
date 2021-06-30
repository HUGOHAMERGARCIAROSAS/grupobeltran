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
use App\Models\Combustible;

class CombustibleController extends Controller
{
    public function index()
    {
        $combustibles = Combustible::where('activo','1')->get();
        $rutas = Ruta::get();
        $ordenes = Order::where('activo','1')->get();
        return view('pages.combustible.index')->with(compact('combustibles','rutas','ordenes'));
    }


    public function store(Request $request){
        $combustible = new Combustible();
        $combustible->lugar  = $request->lugar;
        $combustible->galones  = $request->galones;
        $combustible->precio  = $request->precio;
        $combustible->nro_ticket  = $request->nro_ticket;
        $combustible->orden_trabajo_id  = $request->orden_trabajo_id;
        $combustible->activo=1;
        if ($request->file('ticket')) {
            // dd($request->file('archivos'));
            $file = $request->file('ticket');
            $name = 'ticket_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/ticket'.'/'.'personal'.'/';
            $file->move($path, $name);
            $combustible->ticket = $name;
            }

        $combustible->save();
        return back();

    }

    public function update(Request $request,$id){
        $combustible = Combustible::findOrFail($id);
        $combustible->lugar  = $request->lugar;
        $combustible->galones  = $request->galones;
        $combustible->precio  = $request->precio;
        $combustible->nro_ticket  = $request->nro_ticket;
        $combustible->orden_trabajo_id  = $request->orden_trabajo_id;
        $combustible->activo=1;
        if ($request->file('ticket')) {
            // dd($request->file('archivos'));
            $file = $request->file('ticket');
            $name = 'ticket_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/ticket'.'/'.'personal'.'/';
            $file->move($path, $name);
            $combustible->ticket = $name;
            }

        $combustible->save();
        return back();

    }

    public function update1(Request $request,$id)
    {
        // Gate::authorize('haveaccess','users.update1');
        $user = Combustible::findOrFail($id);
        $user->activo  = 0;
        // $user->usuario_deleted  = $request->usuario_deleted;
        $user->save();
        return back();
    }
}
