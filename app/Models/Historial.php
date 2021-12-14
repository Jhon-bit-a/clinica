<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{
    use HasFactory;
    protected $fillable = [
        'fechahistorial',
        'diagnostico',
        'tratamiento',
        'estado'
    ];
    protected $primaryKey ='idhistorial';
}

