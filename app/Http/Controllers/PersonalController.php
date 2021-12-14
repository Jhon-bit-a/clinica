<?php

namespace App\Http\Controllers;
use App\Models\Personale;
use App\Models\Cargo;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $personal = Personale::all();
        $cargo = Cargo::all();
        return view('personal.index', compact(['personal','cargo']));

    }
    public function create(){
        $personal = Personale::all();
        $cargo = Cargo::all();
        return view('personal.create', compact(['personal','cargo']));

    }

    public function store(Request $request){


        $request ->validate([

         'nombres' => 'required',
         'apellidos' => 'required',
         'direccion' => 'required',
         'fecha_nacimiento' => 'required',
         'genero' => 'required',
         'estado' => 'required',
         'idcargo' => 'required'
          ]);



                $personal = new Personale;

                $personal->nombres  =$request ->  input ('nombres');
                $personal->apellidos  =$request -> input ('apellidos');
                $personal->direccion  =$request -> input ('direccion');
                $personal->fecha_nacimiento  =$request -> input ('fecha_nacimiento');
                $personal->genero  =$request ->  input ('genero');
                $personal->estado  =$request -> input ('estado');
                $personal->idcargo  =$request['idcargo'];

                $personal->save();
                $personal = Personale::all();
                $cargo = Cargo::all();
                return view('personal.index', compact(['personal','cargo']));
        //return redirect() ->route('personal.show', $personal);
            }

    public function show(Personale $personal){
        $personal = Personale::all();
        return view('personal.show', compact ('personal'));

    }
    public function edit(Personale $personal){
        return view('personal.edit', compact ('personal'));
        $personal = Personale::all();

    }

    public function update(Request $request, Personale $personal){

        $request ->validate([

            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'estado' => 'required',
            'idcargo' => 'required'
              ]);

              $personal->nombres  =$request ->  input ('nombres');
              $personal->apellidos  =$request -> input ('apellidos');
              $personal->direccion  =$request -> input ('direccion');
              $personal->fecha_nacimiento  =$request -> input ('fecha_nacimiento');
              $personal->genero  =$request ->  input ('genero');
              $personal->estado  =$request -> input ('estado');
              $personal->idcargo  =$request -> input ('idcargo');


        // $paciente->update($fields);
        $personal->save();
        $cargo = Cargo::all();
         $personal = Personale::all();

         return view('personal.edit', compact (['personal','cargo']));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Personale $personal) {
        $personal->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('personal.index')->with('status', 'Cargo eliminado');

    }
}
