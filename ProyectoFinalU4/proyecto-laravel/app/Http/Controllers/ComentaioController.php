<?php

namespace App\Http\Controllers;

use App\Models\Comentaio;
use Illuminate\Http\Request;

class ComentaioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'telefono' => 'required|digits:10',
            'comentario' => 'required',
        ]);

        // Crea un nuevo comentario
        Comentaio::create([
            'email' => $request->email,
            'telefono' => $request->telefono,
            'comentario' => $request->comentario,
        ]);

        // Redirige a donde desees después de guardar el comentario
        return redirect()->back()->with('success', 'Comentario enviado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentaio $comentaio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentaio $comentaio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentaio $comentaio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentaio $comentaio)
    {
        //
    }
}
