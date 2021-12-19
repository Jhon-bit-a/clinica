<?php

namespace App\Http\Controllers;
use App\Models\Enfermeria;
use App\Models\Personale;
use App\Models\Historial;
use Illuminate\Http\Request;

class EnfermeriaController extends Controller
{
    public function index(){
        $enfermerium = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.index', compact(['enfermerium','personal','historial']));

    }
    public function create(){
        $enfermerium = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.create', compact(['enfermerium','personal','historial']));

    }

    public function store(Request $request){


        $request ->validate([

         'presion' => 'required',
         'talla' => 'required',
         'peso' => 'required',
         'idpersonal' => 'required',
         'idhistorial' => 'required'
          ]);



                $enfermerium = new Enfermeria;

                $enfermerium->presion  =$request ->  input ('presion');
                $enfermerium->talla  =$request -> input ('talla');
                $enfermerium->peso  =$request -> input ('peso');
                $enfermerium->idpersonal  =$request['idpersonal'];
                $enfermerium->idhistorial  =$request['idhistorial'];

                $enfermerium->save();

        $enfermerium = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.index', compact(['enfermerium','personal','historial']));        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Enfermeria $enfermerium){

        return view('enfermeria.show', compact ('enfermerium'));

    }
    public function edit(Enfermeria $enfermerium){

        //$enfermerium = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.edit', compact (['enfermerium','personal','historial']));


    }

    public function update(Request $request, Enfermeria $enfermerium){

        $request ->validate([

            'presion' => 'required',
            'talla' => 'required',
            'peso' => 'required',
            'idpersonal' => 'required',
            'idhistorial' => 'required'
              ]);

              $enfermerium->presion  =$request ->  input ('presion');
              $enfermerium->talla  =$request -> input ('talla');
              $enfermerium->peso  =$request -> input ('peso');
              $enfermerium->idpersonal  =$request -> input ('idpersonal');
              $enfermerium->idhistorial  =$request -> input ('idhistorial');
              $enfermerium->save();

        // $paciente->update($fields);
        $enfermerium = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();

         return view('enfermeria.index', compact (['enfermerium','personal','historial']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Enfermeria $enfermerium) {
        $enfermerium->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('enfermeria.index')->with('status', 'Enfermeria eliminado');

    }
}

