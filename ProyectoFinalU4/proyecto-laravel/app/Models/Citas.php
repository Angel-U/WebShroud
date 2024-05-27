<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;
    use HasFactory;

    protected $fillable = [
        'idCliente',
        'FechaHraCita',
        'Motivo',
        'Duracion',
        'Estado',
        'Notas',
        'idArtista'
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'idCliente')->where('role', 3);
    }

    public function artista()
    {
        return $this->belongsTo(User::class, 'idArtista')->where('role', 2);
    }

}

