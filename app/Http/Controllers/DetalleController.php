<?php

namespace App\Http\Controllers;
use App\Models\Detalle;
use App\Models\Historial;
use App\Models\Paciente;
use App\Models\Servicio;
use App\Models\Personale;
use Illuminate\Http\Request;

class DetalleController extends Controller
{
    public function index(){
        $detalle = Detalle::all();
        $personal = Personale::all();
        $historial = Historial::all();
        $paciente = Paciente::all();
        $servicio = Servicio::all();
        return view('detalle.index', compact(['detalle','personal','historial','paciente','servicio']));

    }
    public function create(){
        $detalle = Detalle::all();
        $personal = Personale::all();
        $historial = Historial::all();
        $paciente = Paciente::all();
        $servicio = Servicio::all();
        return view('detalle.create', compact(['detalle','personal','historial','paciente','servicio']));

    }

    public function store(Request $request){


        $request ->validate([

         'fecha' => 'required',
         'idpaciente' => 'required',
         'idservicio' => 'required',
         'idpersonal' => 'required',
         'idhistorial' => 'required'
          ]);



                $detalle = new Detalle;

                $detalle->fecha  =$request ->  input ('fecha');
                $detalle->idpaciente  =$request -> input ('idpaciente');
                $detalle->idservicio  =$request -> input ('idservicio');
                $detalle->idpersonal  =$request['idpersonal'];
                $detalle->idhistorial  =$request['idhistorial'];

                $detalle->save();

        $detalle = Detalle::all();
        $personal = Personale::all();
        $historial = Historial::all();
        $paciente = Paciente::all();
        $servicio = Servicio::all();
        return view('detalle.index', compact(['detalle','personal','historial','paciente','servicio']));        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Detalle $detalle){
        $detalle = Detalle::all();
        return view('detalle.show', compact ('detalle'));

    }
    public function edit(Detalle $detalle){
        return view('Detalle.edit', compact ('detalle'));


    }

    public function update(Request $request, Detalle $detalle){

        $request ->validate([

            'fecha' => 'required',
            'idpaciente' => 'required',
            'idservicio' => 'required',
            'idpersonal' => 'required',
            'idhistorial' => 'required'
              ]);

              $detalle->fecha  =$request ->  input ('fecha');
              $detalle->idpaciente  =$request -> input ('idpaciente');
              $detalle->idservicio  =$request -> input ('idservicio');
              $detalle->idpersonal  =$request -> input ('idpersonal');
              $detalle->idhistorial  =$request -> input ('idhistorial');


        // $paciente->update($fields);
        $detalle = Detalle::all();
        $personal = Personale::all();
        $historial = Historial::all();
        $paciente = Paciente::all();
        $servicio = Servicio::all();

         return view('detalle.edit', compact (['detalle','personal','historial','paciente','servicio']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Detalle $detalle) {
        $detalle->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('detalle.index')->with('status', 'Detalle eliminado');

    }
}

