<?php

namespace App\Http\Controllers;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $cargo = Cargo::all();
        return view('cargos.index', compact('cargo'));

    }
    public function create(){
        return view('cargos.create');

    }
    public function show($cargo){
        return view('cargos.show',['cargo'=>$cargo]);

    }
}
