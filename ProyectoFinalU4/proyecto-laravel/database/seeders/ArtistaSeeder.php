<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artistas;


class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artista1 = new Artistas();

        $artista1->Nombre = "Alex";
        $artista1->ApellidoPaterno = "Marin";
        $artista1->idUsuario = "2";
        $artista1->ApellidoMaterno = "Perez";
        $artista1->Correo = "alex@gmail.com";
        $artista1->NumTel = "4494946466";
        $artista1->Especialidad = "Blackwork";
        $artista1->save();

        $artista2 = new Artistas();
        $artista2->Nombre = "mar";
        $artista2->ApellidoPaterno = "Martinez";
        $artista2->idUsuario = "5";
        $artista2->ApellidoMaterno = "Lopez";
        $artista2->Correo = "mar@gmail.com";
        $artista2->NumTel = "4484898598";
        $artista2->Especialidad = "Neo Tradicional";
        $artista2->save();
    }
}


