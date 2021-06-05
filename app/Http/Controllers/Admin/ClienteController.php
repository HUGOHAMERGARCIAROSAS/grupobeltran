<?php

namespace App\Http\Controllers\Admin;

use App\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Excel;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Imports\ClientesImport;
use App\Exports\ClientesExport;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Gate;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','clientes.index');
        $clientes = Cliente::get()->where('activo','1');
        return view('pages.clientes.index')->with(compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->razon_social  = $request->razon_social;
        $cliente->responsable  = $request->responsable;
        $cliente->estado  = 1;
        $cliente->direccion_carga  = $request->direccion_carga;
        $cliente->direccion_entrega  = $request->direccion_entrega;
        $cliente->tipo_documento  = $request->tipo_documento;
        $cliente->documento  = $request->documento;
        $cliente->usuario_insert  = $request->usuario_insert;
        $cliente->activo  = 1;

        $cliente->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->razon_social  = $request->razon_social;
        $cliente->responsable  = $request->responsable;
        $cliente->estado  = 1;
        $cliente->direccion_carga  = $request->direccion_carga;
        $cliente->direccion_entrega  = $request->direccion_entrega;
        $cliente->tipo_documento  = $request->tipo_documento;
        $cliente->documento  = $request->documento;
        $cliente->usuario_updated  = $request->usuario_updated;
        $cliente->activo  = 1;

        $cliente->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request,$id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->activo  = 0;
        $cliente->usuario_deleted  = $request->usuario_deleted;
        $cliente->save();
        return back();
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new ClientesImport,$file);
        return back()->with('message','Importacion completada');
    }

    public function exportExcel(){
        return Excel::download(new ClientesExport,'clientes-list.xlsx');
    }

    public function exportPdf(){
        $clientes = Cliente::get();
        $pdf = PDF::loadView('pages.clientes.pdf_clientes',compact('clientes'));

        return $pdf->download('clientes-lista.pdf');
    }
}
