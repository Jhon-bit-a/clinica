<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        return view('pacientes.index');

    }
    public function create(){
        return view('pacientes.create');

    }
    public function show($paciente){
        return view('pacientes.show',['paciente'=>$paciente]);

    }  
}
