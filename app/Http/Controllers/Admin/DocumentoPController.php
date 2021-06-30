<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permission\Role;
use App\User;
use App\Models\Role_user;
use App\Models\DocumentoP;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class DocumentoPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','documentosP.index');
        $documentosP = DocumentoP::where('estado','1')->get();
        $date = Carbon::now();
        $count=0;
        foreach($documentosP as $key=>$doc){
            // $resto = $date-$doc->fecha_vencimiento;
            if($date>$doc->fecha_vencimiento){
                $count++;
            }else{
                $count=0;
            }
        }
        // dd($count);
        $users = $users = DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->where('roles.name','CHOFER')
        ->select('users.id','users.name')
        ->get();
        // dd($users);
        $roles=Role::orderBy('name')->get();
        return view('pages.documentop.index')->with(compact('users','roles','documentosP','count','date'));
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
        $documentoP = new DocumentoP();
        $documentoP->user_id = $request->user_id;
        $documentoP->tipo_documento = $request->tipo_documento;
        $documentoP->documento = $request->documento;
        $documentoP->fecha_emision = $request->fecha_emision;
        $documentoP->fecha_vencimiento = $request->fecha_vencimiento;
        $documentoP->activo = 1;
        $documentoP->estado = 1;
        // dd($request->file('archivos'));
        if ($request->file('archivos')) {
            // dd($request->file('archivos'));
            $file = $request->file('archivos');
            $name = 'documento_personal_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/documentos'.'/'.'personal'.'/';
            $file->move($path, $name);
            $documentoP->archivos = $name;
            }
        $documentoP->save();
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
        $documentoP = DocumentoP::findOrFail($id);
        $documentoP->user_id = $request->user_id;
        $documentoP->tipo_documento = $request->tipo_documento;
        $documentoP->documento = $request->documento;
        $documentoP->fecha_emision = $request->fecha_emision;
        $documentoP->fecha_vencimiento = $request->fecha_vencimiento;
        $documentoP->activo = 1;
        $documentoP->estado = 1;
        // dd($request->file('archivos'));
        if ($request->file('archivos')) {
            // dd($request->file('archivos'));
            $file = $request->file('archivos');
            $name = 'documento_personal_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/documentos'.'/'.'personal'.'/';
            $file->move($path, $name);
            $documentoP->archivos = $name;
            }
        $documentoP->save();
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
        $documentosP = DocumentoP::findOrFail($id);
        $documentosP->estado  = 0;
        $documentosP->usuario_deleted  = $request->usuario_deleted;
        $documentosP->save();
        return back();
    }
}
