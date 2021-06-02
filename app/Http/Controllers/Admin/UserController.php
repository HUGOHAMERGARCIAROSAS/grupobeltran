<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permission\Role;
use App\User;
use App\Models\Role_user;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','users.index');
        $users = User::with('roles')->where('tipo','1')->get();
        $roles=Role::orderBy('name')->get();
        return view('pages.users.index')->with(compact('users','roles'));
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
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dni = $request->dni;
        $user->FechaCaducidad=$request->fechaCaducidad;
        $user->fecha_ingreso = $request->fecha_ingreso;
        $user->telefono = $request->telefono;
        $user->password = bcrypt($request->password);
        $user->pass = $request->password;
        $user->tipo = 1;
        $user->usuario_insert = $request->usuario_insert;
        $user->save();

        $role_user = new Role_user();
        $role_user->user_id = $user->id;
        $role_user->role_id = $request->role_id;
        $role_user->save();

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
        return back();
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
        $user = User::findOrFail($id);
        $request->validate([
            'name'          => 'required|max:50|unique:users,name,'.$user->id,
            'email'         => 'required|max:50|unique:users,email,'.$user->id            
        ]);

        //dd($request->all());

        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));
        
        return redirect()->route('users.index'); 
    }

    public function update1(Request $request,$id)
    {
        // Gate::authorize('haveaccess','users.update1');
        $user = User::findOrFail($id);
        $user->tipo  = 0;
        $user->usuario_deleted  = $request->usuario_deleted;
        $user->save();
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
}
