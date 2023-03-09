<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        /* Se obtienen los usuarios para ser paginados de a 5*/
        $usuarios = User::paginate(5);
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        /* Se busca el usuario a editar */
        $usuario = User::findOrFail($id);
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->edad = $request->edad;
        $usuario->email = $request->email;
        $usuario->admin = $request->rol;

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        /* Se busca el usuario a eliminar */
        $usuario = User::findOrFail($id);
        /*Se eliminar el usuario  */
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
