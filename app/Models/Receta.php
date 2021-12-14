<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    use HasFactory;
    protected $fillable = [
        'cantidad',
        'nombre_receta',
        'detalle',
        'estado',
        'idhistorial'
    ];
    protected $primaryKey ='idreceta';
}
