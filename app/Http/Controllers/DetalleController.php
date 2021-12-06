<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(){
        return view('detalles.index');

    }
    public function create(){
        return view('detalles.create');

    }
    public function show($detalle){
        return view('detalles.show',['detalle'=>$detalle]);

    }
}
