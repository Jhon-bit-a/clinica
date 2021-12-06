<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        return view('personales.index');

    }
    public function create(){
        return view('personales.create');

    }
    public function show($personal){
        return view('personales.show',['personal'=>$personal]);

    }
}
