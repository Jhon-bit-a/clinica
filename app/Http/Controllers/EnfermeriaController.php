<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnfermeriaController extends Controller
{
    public function index(){
        return view('enfermerias.index');

    }
    public function create(){
        return view('enfermerias.create');

    }
    public function show($enfermeria){
        return view('enfermerias.show',['enfermeria'=>$enfermeria]);

    }
}
