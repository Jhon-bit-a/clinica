<?php

use Illuminate\Support\Facades\Route; //route
use App\Http\Controllers\HomeController; //home
use App\Http\Controllers\ClienteController; //cliente
use App\Http\Controllers\CargoController; //cargo
use App\Http\Controllers\PacienteController; //paciente
use App\Http\Controllers\ServiciosController; //servicios
use App\Http\Controllers\HistorialController; //hisotial
use App\Http\Controllers\ResetaController; //Reseta
use App\Http\Controllers\PersonalController; //Personal
use App\Http\Controllers\DetalleController; //Detalle
use App\Http\Controllers\EnfermeriaController; //Enfermeria
use App\Http\Controllers\ConsultorioController; //Consultorio
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', HomeController::class);
Route::get('/', function () {
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', TiendaController::class)->
//name('dashboard');


//Route::resource('tiendas', TiendaController::class);
//Route::get('tiendas/{producto}', [TiendaController::class, 'crearPedido'])->name('tiendas.crearPedido');


//cliente
Route::resource('cliente', ClienteController::class);

//cargo
Route::resource('cargo', ClientesController::class);
//paciente
Route::resource('paciente', PacienteController::class);
//servicios
Route::resource('servicio', ServicioController::class);
//historial
Route::resource('historial', HistorialController::class);
//reseta
Route::resource('cliente', ClientesController::class);
//personal
Route::resource('personale', PersonalController::class);
//detalle
Route::resource('detalle', DetalleController::class);
//enfermeria
Route::resource('enfermeria', EnfermeriaController::class);
//consultorio
Route::resource('consultorio', ConsultorioController::class);























