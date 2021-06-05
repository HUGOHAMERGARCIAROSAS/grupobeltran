<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Models\Ruta;
use App\User;
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
        return view('pages.ordenTrabajo.index')->with(compact('clientes','conductores','rutas','unidades'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {

    }
    public function update(Request $request)
    {
        
    }
}
