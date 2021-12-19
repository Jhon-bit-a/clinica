<?php

namespace App\Http\Controllers;
use App\Models\Enfermeria;
use App\Models\Consultorio;   //personale
use App\Models\Historial;

use Illuminate\Http\Request;

class ConsultorioController extends Controller
{
    public function index(){
        $enfermerium = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.index', compact(['enfermerium','consultorio','historial']));

    }
    public function create(){
        $enfermerium = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.create', compact(['enfermerium','consultorio','historial']));

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
                $consultorio->idenfermeria  =$request -> input('idenfermeria');
                $consultorio->idhistorial  =$request -> input('idhistorial');

                $consultorio->save();

        $enfermerium = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();
        return view('consultorio.index', compact(['enfermerium','consultorio','historial']));        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Consultorio $consultorio){
        $enfermerium = Enfermeria::all();
        $historial = Historial::all();

        return view('consultorio.edit', compact (['consultorio','enfermerium','historial']));

    }
    public function edit(Consultorio $consultorio){
        $enfermerium = Enfermeria::all();
        $historial = Historial::all();

        return view('consultorio.edit', compact (['consultorio','enfermerium','historial']));

    }

    public function update(Request $request, Consultorio $consultorio){

        $request ->validate([

            'n_consultorio' => 'required',
            'estado' => 'required',
            'idenfermeria' => 'required',
            'idhistorial' => 'required'
              ]);

              $consultorio->n_consultorio  =$request ->  input ('n_consultorio');
              $consultorio->estado  =$request -> input ('estado');
              $consultorio->idenfermeria  =$request  -> input('idenfermeria');
              $consultorio->idhistorial  =$request   -> input('idhistorial');
              $consultorio->save();

        // $paciente->update($fields);
        $enfermerium = Enfermeria::all();
        $consultorio = Consultorio::all();
        $historial = Historial::all();

         return view('consultorio.index', compact (['enfermerium','consultorio','historial']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Consultorio $consultorio) {
        $consultorio->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('consultorio.index')->with('status', 'consultorio eliminado');

    }
}

