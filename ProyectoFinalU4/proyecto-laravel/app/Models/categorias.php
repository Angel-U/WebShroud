<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombreCategoria',
    ];

    public function galerias()
    {
        return $this->hasMany(GaleriaArtista::class, 'idCategoria');
    } 
}
