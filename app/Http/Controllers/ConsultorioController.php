<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function index(){
        return view('consultorios.index');

    }
    public function create(){
        return view('consultorios.create');

    }
    public function show($consultorio){
        return view('consultorios.show',['consultorio'=>$consultorio]);

    }
}
