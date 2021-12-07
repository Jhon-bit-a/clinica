<?php

namespace App\Http\Controllers;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        $cargo = Cargo::all();
        return view('cargo.index', compact('cargo'));

    }
    public function create(){
        return view('cargo.create');

    }

    public function store(Request $request){


        $request ->validate([

         'nombre' => 'required',
         'usuario' => 'required',
         'clave' => 'required',
         'estado' => 'required'
          ]);



                $cargo = new Cargo;

                $cargo->nombre  =$request ->  input ('nombre');
                $cargo->usuario  =$request -> input ('usuario');
                $cargo->clave  =$request -> input ('clave');
                $cargo->estado  =$request -> input ('estado');
                $cargo->save();
                //return view('cargo.index', compact('cargo'));
                 return redirect() ->route('cargo.show', $cargo);
            }

    public function show(Cargo $cargo){
        return view('cargo.show', compact ('cargo'));

    }
    public function edit(Cargo $cargo){
        return view('cargo.edit', compact ('cargo'));

    }

    public function update(Request $request, Cargo $cargo){

        $request ->validate([

             'nombre' => 'required',
             'usuario' => 'required',
             'clave' => 'required',
             'estado' => 'required'
              ]);


         $cargo->nombre  =$request ->input ('nombre');
         $cargo->usuario  =$request ->input ('usuario');
         $cargo->clave  =$request ->input ('clave');
         $cargo->estado  =$request ->input ('estado');

        // $paciente->update($fields);
        $cargo->save();
         $cargo = Cargo::all();

         return view('cargo.index', compact ('cargo'));
        // $paciente->save();

         //return redirect() ->route('paciente.show', $paciente);
     }
     public function destroy(Cargo $cargo) {
        $cargo->delete();

       // $paciente = Paciente::all();
      // return redirect()->route('paciente.index', compact('paciente'))->with('status', 'Paciente eliminado');
        return redirect()->route('cargo.index')->with('status', 'Cargo eliminado');

    }
}
