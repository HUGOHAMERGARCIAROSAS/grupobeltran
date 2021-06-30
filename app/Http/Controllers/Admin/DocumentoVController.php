<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DocumentoV;
use Illuminate\Http\Request;
use App\Permission\Role;
use App\User;
use App\Models\Role_user;
use App\Models\Vehiculo;
use Illuminate\Support\Facades\Gate;
use Carbon\Carbon;

class DocumentoVController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','documentosV.index');
        $documentosV = DocumentoV::where('estado','1')->get();
        //$documentosV = DocumentoV::all();     
        $date = Carbon::now();
        $count=0;
        foreach($documentosV as $key=>$doc){
            // $resto = $date-$doc->fecha_vencimiento;
            if($date>$doc->fecha_vencimiento){
                $count++;
            }else{
                $count=0;
            }
        }
        // dd($count);
        $vehiculos=Vehiculo::all();
        return view('pages.documentov.index')->with(compact('documentosV','vehiculos','count','date'));
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
        $documentoV = new DocumentoV();
        $documentoV->vehiculo_id = $request->vehiculo_id;
        $documentoV->tipo_documento = $request->tipo_documento;
        $documentoV->documento = $request->documento;
        $documentoV->fecha_emision = $request->fecha_emision;
        $documentoV->fecha_vencimiento = $request->fecha_vencimiento;
        $documentoV->activo = 1;
        $documentoV->estado = 1;
        $documentoV->fechaTramite=$request->fechaTramite;
        // dd($request->file('archivos'));
        if ($request->file('archivos')) {
            // dd($request->file('archivos'));
            $file = $request->file('archivos');
            $name = 'documento_vehiculo_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/documentos'.'/'.'vehiculo'.'/';
            $file->move($path, $name);
            $documentoV->archivos = $name;
        }
        $documentoV->save();
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
        $documentoV = documentoV::findOrFail($id);
        $documentoV->vehiculo_id = $request->vehiculo_id;
        $documentoV->tipo_documento = $request->tipo_documento;
        $documentoV->documento = $request->documento;
        $documentoV->fecha_emision = $request->fecha_emision;
        $documentoV->fecha_vencimiento = $request->fecha_vencimiento;
        $documentoV->activo = 1;
        $documentoV->estado = 1;
        // dd($request->file('archivos'));
        if ($request->file('archivos')) {
            // dd($request->file('archivos'));
            $file = $request->file('archivos');
            $name = 'documento_personal_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/documentos'.'/'.'vehiculo'.'/';
            $file->move($path, $name);
            $documentoV->archivos = $name;
            }
        $documentoV->save();
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
        $documentoV = DocumentoV::findOrFail($id);
        $documentoV->estado  = 0;
        $documentoV->usuario_deleted  = $request->usuario_deleted;
        $documentoV->save();
        return back();
    }
}
