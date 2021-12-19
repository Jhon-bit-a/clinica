<?php

namespace App\Http\Controllers;
use App\Models\Receta;
use App\Models\Historial;
use Illuminate\Http\Request;

class RecetaController extends Controller
{public function index(){
    $recetum = Receta::all();
    $historial = Historial::all();
   // $receta =Receta::orderBy('id', 'desc') ->paginate();
    return view('receta.index', compact(['recetum','historial']));
}
public function create(){
    $recetum = Receta::all();
    $historial = Historial::all();
    return view('receta.create', compact(['recetum','historial']));

}

public function store(Request $request){


$request ->validate([

'cantidad' => 'required',
'nombre_receta' => 'required',
'detalle' => 'required',
'estado' => 'required',
'idhistorial'=> 'required'
]);



    $recetum = new Receta;

    $recetum->cantidad  =$request -> input ('cantidad');
    $recetum->nombre_receta  =$request -> input ('nombre_receta');
    $recetum->detalle  =$request -> input ('detalle');
    $recetum->estado  =$request -> input ('estado');
    $recetum->idhistorial  =$request['idhistorial'];

    $recetum->save();
    $recetum = Receta::all();
    $historial = Historial::all();
    //return view('receta.index', compact('recetum'));
    return view('receta.index', compact(['recetum','historial']));
}
public function show(Receta $recetum){

  //  $receta = Receta::all();
    return view('receta.show', compact ('recetum'));

}

public function edit(Receta $recetum){
    $historial = Historial::all();

    return view('receta.edit', compact(['recetum','historial']));

}
public function update(Request $request, Receta $recetum){

   $request ->validate([

        'cantidad' => 'required',
        'nombre_receta' => 'required',
        'detalle' => 'required',
        'estado' => 'required',
        'idhistorial' => 'required'

         ]);

    $recetum->cantidad  =$request ->input ('cantidad');
    $recetum->nombre_receta  =$request ->input ('nombre_receta');
    $recetum->detalle  =$request ->input ('detalle');

    $recetum->estado  =$request ('estado');
    $recetum->idhistorial  =$request('idhistorial');

   // $receta->update($fields);
   $recetum->save();
   $recetum = Receta::all();
    $historial = Historial::all();
    return view('receta.index', compact (['recetum','historial']));
   // $receta->save();

    //return redirect() ->route('receta.show', $receta);
}

public function destroy(Receta $recetum) {
$recetum->delete();

// $receta = Receta::all();
// return redirect()->route('receta.index', compact('receta'))->with('status', 'receta eliminado');
return redirect()->route('receta.index')->with('status', 'Receta eliminado');

}
}
