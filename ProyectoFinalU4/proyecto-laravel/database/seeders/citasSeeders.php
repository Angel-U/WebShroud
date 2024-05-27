<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Citas;


class citasSeeders extends Seeder
{
//siu
    public function run(): void
    {
        $cita1 = new Citas();
        $cita1->idCliente = "1";
        $cita1->FechaHraCita = "2024-06-21 17:15:00";
        $cita1->Motivo = "Tatuaje";
        $cita1->Duracion = "4 horas";
        $cita1->Estado = "Pendiente";
        $cita1->Notas = "No se requiere nada adicional";
        $cita1->idArtista = "1";
        $cita1->save();


        $cita2 = new Citas();
        $cita2->idCliente = "2";
        $cita2->FechaHraCita = "2024-06-18 13:20:00";
        $cita2->Motivo = "Tatuaje";
        $cita2->Duracion = "6 horas";
        $cita2->Estado = "Pendiente";
        $cita2->Notas = "No se requiere nada adicional";
        $cita2->idArtista = "1";
        $cita2->save();


        $cita3 = new Citas();
        $cita3->idCliente = "1";
        $cita3->FechaHraCita = "2024-07-09 18:00:00";
        $cita3->Motivo = "Tatuaje";
        $cita3->Duracion = "3 horas";
        $cita3->Estado = "Realizado";
        $cita3->Notas = "No se requiere nada adicional";
        $cita3->idArtista = "2";
        $cita3->save();


        $cita4 = new Citas();
        $cita4->idCliente = "2";
        $cita4->FechaHraCita = "2024-07-09 18:00:00";
        $cita4->Motivo = "Tatuaje";
        $cita4->Duracion = "3 horas";
        $cita4->Estado = "Realizado";
        $cita4->Notas = "No se requiere nada adicional";
        $cita4->idArtista = "1";
        $cita4->save();


        $cita5 = new Citas();
        $cita5->idCliente = "1";
        $cita5->FechaHraCita = "2024-07-09 18:00:00";
        $cita5->Motivo = "Tatuaje";
        $cita5->Duracion = "3 horas";
        $cita5->Estado = "Realizado";
        $cita5->Notas = "No se requiere nada adicional";
        $cita5->idArtista = "2";
        $cita5->save();
    }
}
