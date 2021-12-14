<?php

namespace App\Http\Controllers;
use App\Models\Enfermeria;
use App\Models\Personale;
use App\Models\Historial;
use Illuminate\Http\Request;

class EnfermeriaController extends Controller
{
    public function index(){
        $enfermeria = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.index', compact(['enfermeria','personal','historial']));

    }
    public function create(){
        $enfermeria = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.create', compact(['enfermeria','personal','historial']));

    }

    public function store(Request $request){


        $request ->validate([

         'presion' => 'required',
         'talla' => 'required',
         'peso' => 'required',
         'idpersonal' => 'required',
         'idhistorial' => 'required'
          ]);



                $enfermeria = new Enfermeria;

                $enfermeria->presion  =$request ->  input ('presion');
                $enfermeria->talla  =$request -> input ('talla');
                $enfermeria->peso  =$request -> input ('peso');
                $enfermeria->idpersonal  =$request['idpersonal'];
                $enfermeria->idhistorial  =$request['idhistorial'];

                $enfermeria->save();

        $enfermeria = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();
        return view('enfermeria.index', compact(['enfermeria','personal','historial']));        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Enfermeria $enfermeria){
        $enfermeria = Enfermeria::all();
        return view('enfermeria.show', compact ('enfermeria'));

    }
    public function edit(Enfermeria $enfermeria){
        return view('Enfermeria.edit', compact ('enfermeria'));


    }

    public function update(Request $request, Enfermeria $enfermeria){

        $request ->validate([

            'presion' => 'required',
            'talla' => 'required',
            'peso' => 'required',
            'idpersonal' => 'required',
            'idhistorial' => 'required'
              ]);

              $enfermeria->presion  =$request ->  input ('presion');
              $enfermeria->talla  =$request -> input ('talla');
              $enfermeria->peso  =$request -> input ('peso');
              $enfermeria->idpersonal  =$request -> input ('idpersonal');
              $enfermeria->idhistorial  =$request -> input ('idhistorial');


        // $paciente->update($fields);
        $enfermeria = Enfermeria::all();
        $personal = Personale::all();
        $historial = Historial::all();

         return view('enfermeria.edit', compact (['enfermeria','personal','historial']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Enfermeria $enfermeria) {
        $enfermeria->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('enfermeria.index')->with('status', 'Enfermeria eliminado');

    }
}

