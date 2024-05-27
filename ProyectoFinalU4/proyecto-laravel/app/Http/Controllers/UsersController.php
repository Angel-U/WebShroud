<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 1) {
            $users = User::all(); // Obtiene todos los usuarios si el rol es 1
            return view('clientes.index', compact('users'));
        } else {
            $user = Auth::user(); // Obtiene solo el usuario autenticado
            return view('clientes.index', compact('user'));
        }
    }

    public function create()
    {
        return view('clientes.insert');

    }


    public function show()
    {
        return view('clientes.insert');

    }

    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return redirect()->route('clientes.index')->with('success', 'Usuario creado exitosamente');

    }

    public function destroy($id)
    {
        // Buscar al usuario por su ID
        $user = User::find($id);

        // Verificar si el usuario existe
        if (!$user) {
            return redirect('clientes')->with('error', 'Usuario no encontrado.');
        }

        // Verificar si el usuario que se intenta eliminar es el usuario autenticado
        $isAuthenticatedUser = Auth::id() == $user->id;

        // Intentar eliminar al usuario
        try {
            $user->delete();

            if ($isAuthenticatedUser) {
                Auth::logout(); // Cerrar sesión del usuario autenticado
                return redirect('login')->with('success', 'Se ha eliminado tu cuenta correctamente.');
            } else {
                return redirect('clientes')->with('success', 'Usuario eliminado correctamente.');
            }
        } catch (\Exception $e) {
            return redirect('clientes')->with('error', 'Hubo un problema al eliminar al usuario.');
        }
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('clientes.update', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'fechaNacim' => 'required|date',
            'role' => 'required|integer',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8', // La contraseña es opcional y debe ser confirmada
        ]);

        // Buscar al usuario por su ID
        $user = User::findOrFail($id);

        // Actualizar los datos del usuario
        $user->name = $validatedData['name'];
        $user->apellido = $validatedData['apellido'];
        $user->telefono = $validatedData['telefono'];
        $user->fechaNacim = $validatedData['fechaNacim'];
        $user->role = $validatedData['role'];
        $user->email = $validatedData['email'];

        // Si se proporciona una nueva contraseña, encriptarla y actualizarla
        if ($request->filled('password')) {
            $user->password = bcrypt($validatedData['password']);
        }

        // Guardar los cambios
        $user->save();

        // Redirigir a la lista de clientes con un mensaje de éxito
        return redirect()->route('clientes.index')->with('success', 'Usuario actualizado exitosamente');
    }


}
