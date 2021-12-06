<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetaController extends Controller
{
    public function index(){
        return view('resetas.index');

    }
    public function create(){
        return view('resetas.create');

    }
    public function show($reseta){
        return view('resetas.show',['reseta'=>$reseta]);

    }
}
