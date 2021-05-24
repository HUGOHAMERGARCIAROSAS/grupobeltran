<?php

namespace App\Http\Controllers;
use App\Cliente;

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
        return view('home')->with(compact('clientes'));
    }
}
