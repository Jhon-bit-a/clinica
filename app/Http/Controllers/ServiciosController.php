<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(){
        return view('servicios.index');

    }
    public function create(){
        return view('servicios.create');

    }
    public function show($servicios){
        return view('servicios.show',['servicios'=>$servicios]);

    } 
}
