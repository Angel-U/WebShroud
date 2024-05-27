<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriaArtista;
use App\Models\Artistas;
use App\Models\Categorias;

class tarjetasController extends Controller
{

    public function index()
    {
        $Tarjeta = GaleriaArtista::with(['artista', 'categoria'])->take(3)->get();
        $artistas = Artistas::all();
        $categorias = Categorias::all();
        return view('welcomeTarjetas', compact('galeria', 'artistas', 'categorias'));
    }
}
