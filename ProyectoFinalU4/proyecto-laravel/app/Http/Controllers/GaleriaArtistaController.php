<?php

namespace App\Http\Controllers;

use App\Models\GaleriaArtista;
use App\Models\Artistas;
use App\Models\Categorias;
use Illuminate\Http\Request;

class GaleriaArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galerias = GaleriaArtista::with(['artista', 'categoria'])->get();
        $artistas = Artistas::all();
        $categorias = Categorias::all();

        return view('galerias.index', compact('galerias', 'artistas', 'categorias'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artistas::all();
        $categorias = Categorias::all();
        return view('galerias.create', compact('artistas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titulo' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'idCategoria' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image',
            'idArtista' => 'required|exists:artistas,id',
        ]);

        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('galerias', 'public');
        }

        GaleriaArtista::create($data);
        return redirect()->route('galerias.index')->with('success', 'Galería creada con éxito.');

    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriaArtista $galeriaArtista)
    {
        $artistas = Artistas::all();
        $categorias = Categorias::all();
        return view('galerias.insert', compact('artistas', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeria = GaleriaArtista::findOrFail($id);
        $artistas = Artistas::all();
        $categorias = Categorias::all();
        return view('galerias.update', compact('galeria', 'artistas', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Titulo' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'idCategoria' => 'required|exists:categorias,id',
            'imagen' => 'nullable|image',
            'idArtista' => 'required|exists:artistas,id',
        ]);

        $galeria = GaleriaArtista::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            $data['imagen'] = $request->file('imagen')->store('galerias', 'public');
        }

        $galeria->update($data);
        return redirect()->route('galerias.index')->with('success', 'Galería actualizada con éxito.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeria = GaleriaArtista::findOrFail($id);
        $galeria->delete();
        return redirect()->route('galerias.index')->with('success', 'Galería eliminada con éxito.');

    }
}
