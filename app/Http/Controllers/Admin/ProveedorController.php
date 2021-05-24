<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Proveedor;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Imports\ProveedoresImport;
use App\Exports\ProveedoresExport;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PDF;
use Illuminate\Support\Facades\Gate;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::get()->where('activo','1');
        return view('pages.proveedores.index')->with(compact('proveedores'));
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
        $proveedor = new Proveedor();
        $proveedor->razon_social  = $request->razon_social;
        $proveedor->responsable  = $request->responsable;
        $proveedor->direccion  = $request->direccion;
        $proveedor->telefono  = $request->telefono;
        $proveedor->estado  = 1;
        $proveedor->tipo_documento  = $request->tipo_documento;
        $proveedor->ruc  = $request->ruc;
        $proveedor->usuario_insert  = $request->usuario_insert;
        $proveedor->activo  = 1;

        $proveedor->save();
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
        //
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
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->razon_social  = $request->razon_social;
        $proveedor->responsable  = $request->responsable;
        $proveedor->direccion  = $request->direccion;
        $proveedor->telefono  = $request->telefono;
        $proveedor->tipo_documento  = $request->tipo_documento;
        $proveedor->ruc  = $request->ruc;
        $proveedor->usuario_updated  = $request->usuario_updated;

        $proveedor->save();
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
        //
    }

    public function update1(Request $request,$id)
    {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->activo  = 0;
        $proveedor->usuario_deleted  = $request->usuario_deleted;
        $proveedor->save();
        return back();
    }

    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new ProveedoresImport,$file);
        return back()->with('message','Importacion completada');
    }

    public function exportExcel(){
        return Excel::download(new ProveedoresExport,'proveedores-list.xlsx');
    }

    public function exportPdf(){
        $proveedores = Proveedor::get();
        $pdf = PDF::loadView('pages.proveedores.pdf_proveedores',compact('proveedores'));

        return $pdf->download('proveedores-lista.pdf');
    }
}
