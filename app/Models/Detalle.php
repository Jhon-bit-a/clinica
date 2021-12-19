<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'idpaciente',
        'idservicio',
        'idpersonal',
        'idcargo'
    ];
    protected $primaryKey = 'iddetalle';
}
