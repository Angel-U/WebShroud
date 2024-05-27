<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GaleriaArtista;
use App\Models\Artistas;
use App\Models\Categorias;

class welcomeController extends Controller
{
 
    public function index()
    {
        $Tarjetas = $this->tarjeta();
        $galerias = GaleriaArtista::with(['artista', 'categoria'])->take(3)->get();
        $artistas = Artistas::all();
        $categorias = Categorias::all();
        return view('welcome1', compact('galerias', 'artistas', 'categorias', 'Tarjetas'));
    }


    public function tarjeta()
    {
        $Tarjetas = GaleriaArtista::with(['artista', 'categoria'])->skip(3)->take(9)->get();
        return $Tarjetas;
    }
}
