<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaArtista extends Model
{
    use HasFactory;
    protected $table = 'galeria_artistas';

    protected $fillable = [
        'Titulo',
        'Descripcion',
        'idCategoria',
        'imagen',
        'idArtista'
    ];

    public function artista()
    {
        return $this->belongsTo(Artistas::class, 'idArtista');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'idCategoria');
    }
}

