<?php

namespace App\Http\Controllers;
use App\Models\Enfermeria;
use App\Models\Consultorio;   //personale
use App\Models\Historial;

use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function index(){
        $enfermeria = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.index', compact(['enfermeria','consultorio','historial']));

    }
    public function create(){
        $enfermeria = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.create', compact(['enfermeria','consultorio','historial']));

    }

    public function store(Request $request){


        $request ->validate([

         'n_consultorio' => 'required',
         'estado' => 'required',
         'idenfermeria' => 'required',
         'idhistorial' => 'required'
          ]);



                $consultorio = new Consultorio;

                $consultorio->n_consultorio  =$request ->  input ('n_consultorio');
                $consultorio->estado  =$request -> input ('estado');
                $consultorio->idenfermeria  =$request['idenfermeria'];
                $consultorio->idhistorial  =$request['idhistorial'];

                $consultorio->save();

        $enfermeria = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.index', compact(['enfermeria','consultorio','historial']));        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Historial $historial){
        $historial = Historial::all();
        return view('consultorio.show', compact ('enfermeria'));

    }
    public function edit(Historial $historial){
        return view('historial.edit', compact ('historial'));
        $historial = Historial::all();

    }

    public function update(Request $request, Consultorio $consultorio){

        $request ->validate([

            'n_consultorio' => 'required',
            'estado' => 'required',
            'peso' => 'required',
            'idenfermeria' => 'required',
            'idhistorial' => 'required'
              ]);

              $consultorio->n_consultorio  =$request ->  input ('n_consultorio');
              $consultorio->estado  =$request -> input ('estado');
              $consultorio->idenfermeria  =$request -> input ('idenfermeria');
              $consultorio->idhistorial  =$request -> input ('idhistorial');


        // $paciente->update($fields);
        $enfermeria = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();

         return view('consultorio.edit', compact (['enfermeria','consultorio','historial']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Enfermeria $enfermeria) {
        $enfermeria->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('consultorio.index')->with('status', 'Enfermeria eliminado');

    }
}

