<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GaleriaArtista;
use Illuminate\Support\Facades\Storage;


class GaleriaSeeders extends Seeder
{

    public function run(): void
    {
        $galeria1 = new GaleriaArtista();
        $galeria1->Titulo = "Tatuaje en el pecho";
        $galeria1->Descripcion = "Tatuaje con puntillismo de arrastre para mejorar textura";
        $galeria1->idCategoria = "1";
        $nombreArchivo = '3WgrErsGrGpDsvTmm2p270DhVNIyhAnOna3XeSMM.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria1->imagen = $rutaImagen;
        $galeria1->idArtista = "1";
        $galeria1->save();

        $galeria2 = new GaleriaArtista();
        $galeria2->Titulo = "Tatuaje de Eminem";
        $galeria2->Descripcion = "Tatuaje que combina la cara de eminem y un m&m.";
        $galeria2->idCategoria = "2";
        $nombreArchivo = '6xMoU1xtHlSKueDkZw0dukZKWnr7lEGWa1RGkOsB.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria2->imagen = $rutaImagen;
        $galeria2->idArtista = "2";
        $galeria2->save();

        $galeria3 = new GaleriaArtista();
        $galeria3->Titulo = "Tatuaje Neo Tradicional de Rosas";
        $galeria3->Descripcion = "Tatuaje con un diseño neo tradicional de rosas y elementos ornamentales.";
        $galeria3->idCategoria = "3";
        $nombreArchivo = '3WdGfx5OV3F48iREb2TPdiFST3XANrhGz9pAkH6Z.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria3->imagen = $rutaImagen;
        $galeria3->idArtista = "2";
        $galeria3->save();

        $galeria4 = new GaleriaArtista();
        $galeria4->Titulo = "Águila Tradicional Americana";
        $galeria4->Descripcion = "Tatuaje estilo tradicional americano de un águila con una bandera.";
        $galeria4->idCategoria = "4";
        $nombreArchivo = '3WdGfx5OV3F48iREb2TPdiFST3XANrhGz9pAkH6Z.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria4->imagen = $rutaImagen;
        $galeria4->idArtista = "1";
        $galeria4->save();

        $galeria5 = new GaleriaArtista();
        $galeria5->Titulo = "Tatuaje tribal en el rostro";
        $galeria5->Descripcion = "Tatuaje detallado de un tribal samoano en la cara.";
        $galeria5->idCategoria = "2";
        $nombreArchivo = 'FOzOorotqZDDH0YqfpjcQ9kxBmuQDRZbYXLDaT6g.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria5->imagen = $rutaImagen;
        $galeria5->idArtista = "2";
        $galeria5->save();


        $galeria5 = new GaleriaArtista();
        $galeria5->Titulo = "Tatuaje de Amlo";
        $galeria5->Descripcion = "Tatuaje detallado de un retrato realista.";
        $galeria5->idCategoria = "1";
        $nombreArchivo = '8YRYuZTuz7MkpWFkAqk05KYG9a8WRoXIkhmtP2Wg.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria5->imagen = $rutaImagen;
        $galeria5->idArtista = "2";
        $galeria5->save();


        $galeria6 = new GaleriaArtista();
        $galeria6->Titulo = "Tatuaje en el brazo";
        $galeria6->Descripcion = "Manga completa y detallada en el brazo.";
        $galeria6->idCategoria = "4";
        $nombreArchivo = 'iFY8eBbecT6bN1DNWH2oC2hkO1dbNjsyy6A25jBr.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria6->imagen = $rutaImagen;
        $galeria6->idArtista = "1";
        $galeria6->save();


        $galeria7 = new GaleriaArtista();
        $galeria7->Titulo = "Tatuaje en el brazo";
        $galeria7->Descripcion = "Tatuaje en antebrazo de cyberpunk.";
        $galeria7->idCategoria = "4";
        $nombreArchivo = 'DHYgmxYXoB4KjJyorinFOLmKCZarELJVqUKc5Wga.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria7->imagen = $rutaImagen;
        $galeria7->idArtista = "2";
        $galeria7->save();

        $galeria8 = new GaleriaArtista();
        $galeria8->Titulo = "Retrato Realista de 2Pac";
        $galeria8->Descripcion = "Tatuaje detallado de un retrato realista en blanco y negro.";
        $galeria8->idCategoria = "2";
        $nombreArchivo = '9i56Tlue2u1cWsurihCSxYzH1S128MVxJD4jVMvS.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria8->imagen = $rutaImagen;
        $galeria8->idArtista = "1";
        $galeria8->save();

        $galeria9 = new GaleriaArtista();
        $galeria9->Titulo = "Tatuaje en el cuello";
        $galeria9->Descripcion = "Bonito tatuaje en el cuello.";
        $galeria9->idCategoria = "3";
        $nombreArchivo = 'cmPDdX0NG5KFMsNXudDeacaAwPS1yCAR6LRZqo1E.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria9->imagen = $rutaImagen;
        $galeria9->idArtista = "2";
        $galeria9->save();

        $galeria10 = new GaleriaArtista();
        $galeria10->Titulo = "Tatuaje en la cara";
        $galeria10->Descripcion = "Bonito tatuaje de demonio en la cara para no conseguir trabajo.";
        $galeria10->idCategoria = "3";
        $nombreArchivo = 'gctM5fw6T4Bu8upJ9xHIdtgQxJPMbM1OWeTMXnGj.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria10->imagen = $rutaImagen;
        $galeria10->idArtista = "1";
        $galeria10->save();


        $galeria11 = new GaleriaArtista();
        $galeria11->Titulo = "Tatuaje en la antebrazo";
        $galeria11->Descripcion = "Pequeño tatuaje de un lobo.";
        $galeria11->idCategoria = "4";
        $nombreArchivo = '3WdGfx5OV3F48iREb2TPdiFST3XANrhGz9pAkH6Z.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria11->imagen = $rutaImagen;
        $galeria11->idArtista = "2";
        $galeria11->save();

        $galeria12 = new GaleriaArtista();
        $galeria12->Titulo = "Tatuaje en la antebrazo";
        $galeria12->Descripcion = "Tatuaje discreto en el brazo.";
        $galeria12->idCategoria = "1";
        $nombreArchivo = 'k2Y1BCtSqX5XClWghDI9YP5F1ibVGVVF3TJHtKQO.jpg';
        $rutaImagen = ('galerias/' . $nombreArchivo);
        $galeria12->imagen = $rutaImagen;
        $galeria12->idArtista = "1";
        $galeria12->save();
    }
}
