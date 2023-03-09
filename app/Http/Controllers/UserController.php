<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        /* Se returno la vista index */
        return view('usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        /* Se retorna la vista register */
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
        /* Se retorna la vista edit */
        return view('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        //Se validan los datos del usuario a actualizar
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'apellido' => ['required', 'string', 'max:255'],
            'edad' => ['required'],
            'admin' => ['required'],
        ]);

        try {
            //Se actualiza el usuario
            $usuario = User::find($id);
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->edad = $request->edad;
            $usuario->email = $request->email;
            $usuario->admin = $request->rol;

            $usuario->save();
        } catch (\Throwable $th) {
            /* Si hay un error al actualizar un usuario se arrojara un mensaje de error */
            Log::info('Error en update de contralador de usuario');
            Log::error($th);
            return redirect()->route('usuarios.index')->with('success', 'El usuario ha sido actualizado exitosamente');
        }

        return redirect()->route('usuarios.index')->with('success', 'El usuario ha sido actualizado exitosamente');
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
        /* Se redirecciona al index */
        return redirect()->route('usuarios.index');
    }
}
