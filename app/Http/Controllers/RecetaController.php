<?php

namespace App\Http\Controllers;
use App\Models\Receta;
use App\Models\Historial;
use Illuminate\Http\Request;

class RecetaController extends Controller
{public function index(){
    $receta = Receta::all();
    $historial = Historial::all();
   // $receta =Receta::orderBy('id', 'desc') ->paginate();
    return view('receta.index', compact(['receta','historial']));
}
public function create(){

    $receta = Receta::all();
    $historial = Historial::all();
    return view('receta.create', compact(['receta','historial']));

}

public function store(Request $request){


$request ->validate([

'cantidad' => 'required',
'nombre_receta' => 'required',
'detalle' => 'required',
'estado' => 'required',
'idhistorial'=> 'required'
]);



    $receta = new Receta;

    $receta->cantidad  =$request -> input ('cantidad');
    $receta->nombre_receta  =$request -> input ('nombre_receta');
    $receta->detalle  =$request -> input ('detalle');
    $receta->estado  =$request -> input ('estado');
    $receta->idhistorial  =$request['idhistorial'];

    $receta->save();
    $receta = Receta::all();
    $historial = Historial::all();
    //return view('receta.index', compact('receta'));
    return view('receta.index', compact(['receta','historial']));
}
public function show(Receta $receta){

    $receta = Receta::all();
    return view('receta.show', compact ('receta'));

}

public function edit(Receta $receta){
    return view('receta.edit', compact ('receta'));

}
public function update(Request $request, Receta $receta){

   $request ->validate([

        'cantidad' => 'required',
        'nombre_receta' => 'required',
        'detalle' => 'required',
        'estado' => 'required',
        'idhistorial' => 'required'

         ]);

    $receta->cantidad  =$request ->input ('cantidad');
    $receta->nombre_receta  =$request ->input ('nombre_receta');
    $receta->detalle  =$request ->input ('detalle');

    $receta->estado  =$request ->input ('estado');
    $receta->idhistorial  =$request['idhistorial'];

   // $receta->update($fields);
   $receta->save();
    $receta = Receta::all();
    $historial = Historial::all();
    return view('receta.edit', compact (['receta','historial']));
   // $receta->save();

    //return redirect() ->route('receta.show', $receta);
}

public function destroy(Receta $receta) {
$receta->delete();

// $receta = Receta::all();
// return redirect()->route('receta.index', compact('receta'))->with('status', 'receta eliminado');
return redirect()->route('receta.index')->with('status', 'Receta eliminado');

}
}
