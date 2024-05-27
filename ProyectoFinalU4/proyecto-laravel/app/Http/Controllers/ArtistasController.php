<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Artistas;
use App\Models\User;

use Illuminate\Http\Request;

class ArtistasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistas = Artistas::with('usuario')->get(); // Obtener artistas con relación de usuario
        return view('artistas.index', compact('artistas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = User::where('role', 2)->get(); // Obtener clientes con rol 2
        return view('artistas.insert', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255',
            'idUsuario' => 'required|exists:users,id',
            'ApellidoPaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Correo' => 'required|email|max:255|unique:artistas',
            'NumTel' => 'required|string|max:20',
            'Especialidad' => 'required|string|max:255',
        ]);

        Artistas::create($validatedData);
        return redirect()->route('artistas.index')->with('success', 'Artista creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $clientes = User::where('role', 2)->get(); // Obtener clientes con rol 2
        return view('artistas.insert', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artista = Artistas::findOrFail($id);
        $clientes = User::where('role', 2)->get();
        return view('artistas.update', compact('artista', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Nombre' => 'required|string|max:255',
            'idUsuario' => 'required|exists:users,id',
            'ApellidoPaterno' => 'required|string|max:255',
            'ApellidoMaterno' => 'required|string|max:255',
            'Correo' => 'required|email|max:255|unique:artistas,Correo,' . $id,
            'NumTel' => 'required|string|max:20',
            'Especialidad' => 'required|string|max:255',
        ]);

        $artista = Artistas::findOrFail($id);
        $artista->update($validatedData);

        return redirect()->route('artistas.index')->with('success', 'Artista actualizado exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $artista = Artistas::findOrFail($id);
        $artista->delete();

        return redirect()->route('artistas.index')->with('success', 'Artista eliminado exitosamente');

    }
}
