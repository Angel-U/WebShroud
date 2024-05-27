<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categorias;


class categoriaSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria1 = new categorias();
        $categoria1->nombreCategoria = "BlackWork";
        $categoria1->save();

        $categoria2 = new categorias();
        $categoria2->nombreCategoria = "Realismo";
        $categoria2->save();

        $categoria3 = new categorias();
        $categoria3->nombreCategoria = "Neo Tradicional";
        $categoria3->save();

        $categoria4 = new categorias();
        $categoria4->nombreCategoria = "Tradicional Americano";
        $categoria4->save();

    }
}
