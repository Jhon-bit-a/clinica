<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index(){
        return view('historiales.index');

    }
    public function create(){
        return view('historiales.create');

    }
    public function show($historial){
        return view('historiales.show',['historial'=>$historial]);

    }
}
