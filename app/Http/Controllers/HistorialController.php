<?php

namespace App\Http\Controllers;
use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    public function index(){
        $historial = Historial::all();

        return view('historial.index', compact('historial'));
    }
    public function create(){
        return view('historial.create');

    }

    public function store(Request $request){


$request ->validate([

 'fechahistorial' => 'required',
 'diagnostico' => 'required',
 'tratamiento' => 'required',
 'estado' => 'required'
  ]);



        $historial = new Historial;

        $historial->fechahistorial  =$request ->  input ('fechahistorial');
        $historial->diagnostico  =$request -> input ('diagnostico');
        $historial->tratamiento  =$request -> input ('tratamiento');
        $historial->estado  =$request -> input ('estado');
        $historial->save();

         return redirect() ->route('historial.show', $historial);
    }
    public function show(Historial $historial){


        return view('historial.show', compact ('historial'));


    }

    public function edit(Historial $historial){
        return view('historial.edit', compact ('historial'));

    }
    public function update(Request $request, Historial $historial){

       $request ->validate([

            'fechahistorial' => 'required',
            'diagnostico' => 'required',
            'tratamiento' => 'required',
            'estado' => 'required'
             ]);


        $historial->fechahistorial  =$request ->input ('fechahistorial');
        $historial->diagnostico  =$request ->input ('diagnostico');
        $historial->tratamiento  =$request ->input ('tratamiento');
        $historial->estado  =$request ->input ('estado');


       $historial->save();
        $historial = Historial::all();

        return view('historial.index', compact ('historial'));

    }

    public function destroy(Historial $historial) {
    $historial->delete();

    return redirect()->route('historial.index')->with('status', 'Historial eliminado');

}
}
