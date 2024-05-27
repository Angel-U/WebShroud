<?php

namespace App\Http\Controllers;

use App\Models\Artistas;
use App\Models\Citas;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CitasController extends Controller
{


    public function index()
    {
        if ((auth()->user()->role == 1) || (auth()->user()->role == 2)) {
            $citas = Citas::all();
        } else {
            $citas = Citas::where('idCliente', auth()->id())->get();
        }
        return view('citas.index', compact('citas'));
    }

    /**
     * Siuuuuuuuuuuuuu the form for creating a new resource.
     */
    public function create()
    {
        $clientesRol = User::where('role', 3)->get(); // Obtener clientes con rol 3
        $artistasRol = User::where('role', 2)->get(); // Obtener artistas con rol 2
        return view('citas.insert', compact('clientesRol', 'artistasRol'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'idCliente' => 'required|exists:users,id',
            'FechaHraCita' => 'required|date',
            'Motivo' => 'required|string',
            'Duracion' => 'required|string',
            'Estado' => 'required|string',
            'Notas' => 'nullable|string',
            'idArtista' => 'required|exists:users,id',
        ]);

        // Verificar que los roles sean correctos
        $cliente = User::find($validatedData['idCliente']);

        if ($cliente->role != 3) {
            return back()->withErrors('Roles no coinciden con los tipos esperados.');
        }

        Citas::create($validatedData);

        return redirect()->route('citas.index')->with('success', 'Cita creada exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Citas $citas)
    {
        $clientesRol = User::where('role', 3)->get(); // Obtener clientes con rol 3
        $artistasRol = User::where('role', 2)->get(); // Obtener artistas con rol 2
        return view('citas.insert', compact('clientesRol', 'artistasRol'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cita = Citas::findOrFail($id);
        $clientesRol = User::where('role', 3)->get();
        $artistasRol = User::where('role', 2)->get();
        return view('citas.update', compact('cita', 'clientesRol', 'artistasRol'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'idCliente' => 'required|exists:users,id',
            'FechaHraCita' => 'required|date',
            'Motivo' => 'required|string',
            'Duracion' => 'required|string',
            'Estado' => 'required|string',
            'Notas' => 'nullable|string',
            'idArtista' => 'required|exists:users,id',
        ]);

        $cita = Citas::findOrFail($id);
        $cita->update($validatedData);

        return redirect()->route('citas.index')->with('success', 'Cita actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cita = Citas::findOrFail($id);
        $cita->delete();

        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente');
    }
}
