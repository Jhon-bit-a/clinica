<?php

namespace App\Http\Controllers;

use App\Models\Enfermeria;
use App\Models\Receta;
use App\Models\Detalle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class TiendaController extends Controller
{

    public function __invoke()
    {
        return redirect()->route('tiendas.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = Receta::all();
        $enfermerias = Enfermeria::all();

        return view('tiendas._index', compact('recetas', 'enfermerias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'cantidad' => 'required'
        ]);

        $venta = new Detalle;
        $venta->nit = Auth::id();
        $venta->cantidad = $request->input('cantidad');
        $venta->precio_total = $request->input('precio') * $request->input('cantidad');
        $venta->producto_id = $request['producto_id'];
        $venta->user_id = Auth::id();

        $venta->save();

        $recetas = Receta::all();
        $enfermerias = Enfermeria::all();

        return view('tiendas.index', compact('recetas', 'enfermerias'))->
        with('success', 'Se ha procesado tu pedido');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
