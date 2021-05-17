<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarifa;
use App\Cliente;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Imports\TarifasImport;
use App\Exports\TarifasExport;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PDF;
use Illuminate\Support\Facades\Gate;

class TarifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Gate::authorize('haveaccess','tarifas.index');
        $tarifas = Tarifa::get()->where('activo','1');
        $clientes = Cliente::get()->where('activo','1');

        return view('pages.tarifas.index')->with(compact('tarifas','clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','tarifas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarifa = new Tarifa();
        $tarifa->tipo_servicio  = $request->tipo_servicio;
        $tarifa->ruta  = $request->ruta;
        $tarifa->cliente_id  = $request->cliente_id;
        $tarifa->precio  = $request->precio;
        $tarifa->tipo  = $request->tipo;
        $tarifa->estado  = 1;
        $tarifa->usuario_insert  = $request->usuario_insert;
        $tarifa->activo  = 1;

        $tarifa->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('haveaccess','tarifas.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tarifa = Tarifa::findOrFail($id);
        $tarifa->tipo_servicio  = $request->tipo_servicio;
        $tarifa->ruta  = $request->ruta;
        $tarifa->precio  = $request->precio;
        $tarifa->tipo  = $request->tipo;
        $tarifa->estado  = 1;
        $tarifa->usuario_updated  = $request->usuario_updated;
        $tarifa->activo  = 1;

        $tarifa->save();
        return back();
    }

    public function update1(Request $request,$id)
    {
        Gate::authorize('haveaccess','tarifas.update1');
        $tarifa = Tarifa::findOrFail($id);
        $tarifa->activo  = 0;
        $tarifa->usuario_deleted  = $request->usuario_deleted;
        $tarifa->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new TarifasImport,$file);
        return back()->with('message','Importacion completada');
    }

    public function exportExcel(){
        return Excel::download(new TarifasExport,'tarifas-list.xlsx');
    }

    public function exportPdf(){
        $tarifas = Tarifa::where('activo','1')->get();
        $pdf = PDF::loadView('pages.tarifas.pdf_tarifas',compact('tarifas'));
        return $pdf->download('tarifas-lista.pdf');
    }
}
