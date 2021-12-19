<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personale extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombres',
        'apellidos',
        'direccion',
        'fecha_nacimiento',
        'genero',
        'estado',
        'idcargo'
    ];
    protected $primaryKey = 'idpersonal';
}
