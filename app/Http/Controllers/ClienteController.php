<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = cliente::all();
        $clientes =Cliente::orderBy('id', 'desc') ->paginate();
        return view('clientes.index', compact('cliente'));
    }
    public function create(){
        return view('clientes.create');

    }

    public function store(Request $request){


$request ->validate([

 'nombres' => 'required',
 'apellidos' => 'required',
  'cedula' => 'required'
  ]);



        $cliente = new Cliente();

        $cliente->nombres  =$request -> nombres;
        $cliente->apellidos  =$request -> apellidos;
        $cliente->cedula  =$request -> cedula;
        $cliente->save();
        return view('clientes.index', compact('cliente'));
        //return redirect() ->route('cliente.show', $cliente);
    }
    public function show(Cliente $cliente){


        return view('clientes.show', compact ('cliente'));

    }

    public function edit(Cliente $cliente){
        return view('clientes.edit', compact ('cliente'));

    }
    public function update(Request $request, Cliente $cliente){

        $fields =  $request ->validate([

            'nombres' => 'required',
            'apellidos' => 'required',
             'cedula' => 'required'
             ]);


        $cliente->nombres  =$request -> nombres;
        $cliente->apellidos  =$request -> apellidos;
        $cliente->cedula  =$request -> cedula;

        $cliente->update($fields);
        $cliente = cliente::all();

        return view('clientes.index', compact ('cliente'));
       // $cliente->save();

        //return redirect() ->route('cliente.show', $cliente);
    }

    public function destroy(Cliente $cliente) {
    $cliente->delete();

    $cliente = Cliente::all();
    return redirect()->route('clientes.index', compact('clientes'))->with('status', 'Cliente eliminado');

}}
