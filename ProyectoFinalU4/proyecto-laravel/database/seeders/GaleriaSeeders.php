<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GaleriaArtista;


class GaleriaSeeders extends Seeder
{

    public function run(): void
    {
        $galeria1 = new GaleriaArtista();
        $galeria1->Titulo = "Tatuaje blanco y negro";
        $galeria1->Descripcion = "Tatuaje con puntillismo de arrastre para mejorar textura";
        $galeria1->idCategoria = "1";
        $galeria1->imagen = "";
        $galeria1->idArtista = "1";
        $galeria1->save();

        $galeria2 = new GaleriaArtista();
        $galeria2->Titulo = "Retrato Realista en Blanco y Negro";
        $galeria2->Descripcion = "Tatuaje detallado de un retrato realista en blanco y negro.";
        $galeria2->idCategoria = "2";
        $galeria2->imagen = "";
        $galeria2->idArtista = "1";
        $galeria2->save();

        $galeria3 = new GaleriaArtista();
        $galeria3->Titulo = "Tatuaje Neo Tradicional de Rosas";
        $galeria3->Descripcion = "Tatuaje con un diseño neo tradicional de rosas y elementos ornamentales.";
        $galeria3->idCategoria = "3";
        $galeria3->imagen = "";
        $galeria3->idArtista = "1";
        $galeria3->save();

        $galeria4 = new GaleriaArtista();
        $galeria4->Titulo = "Águila Tradicional Americana";
        $galeria4->Descripcion = "Tatuaje estilo tradicional americano de un águila con una bandera.";
        $galeria4->idCategoria = "4";
        $galeria4->imagen = "";
        $galeria4->idArtista = "1";
        $galeria4->save();

        $galeria5 = new GaleriaArtista();
        $galeria5->Titulo = "Tatuaje Realista de Retrato de Animal";
        $galeria5->Descripcion = "Tatuaje detallado de un retrato realista de un animal.";
        $galeria5->idCategoria = "2";
        $galeria5->imagen = "";
        $galeria5->idArtista = "1";
        $galeria5->save();

    }
}
