<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermeria extends Model
{
    use HasFactory;
    protected $fillable = [
        'presion',
        'talla',
        'peso',
        'idpersonal',
        'idhistorial'
    ];
    protected $primaryKey = 'idenfermeria';
}
