<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentaio extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'telefono',
        'comentario',
    ];

}
