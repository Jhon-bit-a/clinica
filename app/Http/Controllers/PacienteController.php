<?php

namespace App\Http\Controllers;
use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){
        $paciente = Paciente::all();
       // $paciente =Paciente::orderBy('id', 'desc') ->paginate();
        return view('paciente.index', compact('paciente'));
    }
    public function create(){
        return view('paciente.create');

    }

    public function store(Request $request){


$request ->validate([

 'nombres' => 'required',
 'apellidos' => 'required',
 'direccion' => 'required',
 'fecha_nacimiento' => 'required',
 'genero' => 'required',
 'estado' => 'required'
  ]);



        $paciente = new Paciente;

        $paciente->nombres  =$request ->  input ('nombres');
        $paciente->apellidos  =$request -> input ('apellidos');
        $paciente->direccion  =$request -> input ('direccion');
        $paciente->fecha_nacimiento  =$request -> input ('fecha_nacimiento');
        $paciente->genero  =$request -> input ('genero');
        $paciente->estado  =$request -> input ('estado');
        $paciente->save();
        //return view('paciente.index', compact('paciente'));
         return redirect() ->route('paciente.show', $paciente);
    }
    public function show(Paciente $paciente){


        return view('paciente.show', compact ('paciente'));

    }

    public function edit(Paciente $paciente){
        return view('paciente.edit', compact ('paciente'));

    }
    public function update(Request $request, Paciente $paciente){

       $request ->validate([

            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'fecha_nacimiento' => 'required',
            'genero' => 'required',
            'estado' => 'required'
             ]);


        $paciente->nombres  =$request ->input ('nombres');
        $paciente->apellidos  =$request ->input ('apellidos');
        $paciente->direccion  =$request ->input ('direccion');
        $paciente->fecha_nacimiento  =$request ->input ('fecha_nacimiento');
        $paciente->genero  =$request ->input ('genero');
        $paciente->estado  =$request ->input ('estado');

       // $paciente->update($fields);
       $paciente->save();
        $paciente = Paciente::all();

        return view('paciente.index', compact ('paciente'));
       // $paciente->save();

        //return redirect() ->route('paciente.show', $paciente);
    }

    public function destroy(Paciente $paciente) {
    $paciente->delete();

   // $paciente = Paciente::all();
  // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
    return redirect()->route('paciente.index')->with('status', 'Paciente eliminado');

}
}
