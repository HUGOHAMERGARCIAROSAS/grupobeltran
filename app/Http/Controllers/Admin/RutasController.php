<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ruta;
use App\Cliente;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Imports\RutasImport;
use App\Exports\RutasExport;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PDF;
use Illuminate\Support\Facades\Gate;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','rutas.index');
        $rutas = Ruta::get()->where('activo','1');
        return view('pages.rutas.index')->with(compact('rutas'));
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
        $ruta = new Ruta();
        $ruta->punto_inicial  = $request->punto_inicial;
        $ruta->punto_final  = $request->punto_final;
        $ruta->distancia  = $request->distancia;
        $ruta->estado  = 1;
        $ruta->usuario_insert  = $request->usuario_insert;
        $ruta->activo  = 1;

        $ruta->save();
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
        $ruta = Ruta::findOrFail($id);
        $ruta->punto_inicial  = $request->punto_inicial;
        $ruta->punto_final  = $request->punto_final;
        $ruta->distancia  = $request->distancia;
        $ruta->estado  = 1;
        $ruta->usuario_updated  = $request->usuario_updated;
        $ruta->activo  = 1;

        $ruta->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request,$id)
    {
        $ruta = Ruta::findOrFail($id);
        $ruta->activo  = 0;
        $ruta->usuario_deleted  = $request->usuario_deleted;
        $ruta->save();
        return back();
    }


    public function importExcel(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new RutasImport,$file);
        return back()->with('message','Importacion completada');
    }

    public function exportExcel(){
        return Excel::download(new RutasExport,'rutas-list.xlsx');
    }

    public function exportPdf(){
        $rutas = Ruta::where('activo','1')->get();
        $pdf = PDF::loadView('pages.rutas.pdf_rutas',compact('rutas'));
        return $pdf->download('rutas-lista.pdf');
    }
}
