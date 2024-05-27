<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artistas extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nombre',
        'idUsuario',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Correo',
        'NumTel',
        'Especialidad',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    public function galerias()
    {
        return $this->hasMany(GaleriaArtista::class, 'idArtista');
    }
}
