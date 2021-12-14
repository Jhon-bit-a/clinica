<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(){
        $servicio = Servicio::all();
       // $paciente =Paciente::orderBy('id', 'desc') ->paginate();
        return view('servicio.index', compact('servicio'));
    }
    public function create(){
        return view('servicio.create');

    }

    public function store(Request $request){


$request ->validate([

 'nombreservicio' => 'required',
 'estado' => 'required'
  ]);



        $servicio = new Servicio;

        $servicio->nombreservicio  =$request ->  input ('nombreservicio');
        $servicio->estado  =$request -> input ('estado');
        $servicio->save();
        //return view('paciente.index', compact('paciente'));
         return redirect() ->route('servicio.show', $servicio);
    }
    public function show(Servicio $servicio){


        return view('servicio.show', compact ('servicio'));

    }

    public function edit(Servicio $servicio){
        return view('servicio.edit', compact ('servicio'));

    }
    public function update(Request $request, Servicio $servicio){

       $request ->validate([

            'nombreservicio' => 'required',
            'estado' => 'required'
             ]);


        $servicio->nombreservicio  =$request ->input ('nombreservicio');
        $servicio->estado  =$request ->input ('estado');

       // $paciente->update($fields);
       $servicio->save();
        $servicio = Servicio::all();

        return view('servicio.index', compact ('servicio'));
       // $paciente->save();

        //return redirect() ->route('paciente.show', $servicio);
    }

    public function destroy(Servicio $servicio) {
    $servicio->delete();

   // $paciente = Servicio::all();
  // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
    return redirect()->route('servicio.index')->with('status', 'Servicio eliminado');

}
}
