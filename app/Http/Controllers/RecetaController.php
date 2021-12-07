<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index(){
        return view('recetas.index');

    }
    public function create(){
        return view('recetas.create');

    }
    public function show($reseta){
        return view('recetas.show',['receta'=>$reseta]);

    }
}
