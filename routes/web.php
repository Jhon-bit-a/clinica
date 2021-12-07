<?php

use Illuminate\Support\Facades\Route; //route
use App\Http\Controllers\HomeController; //home
use App\Http\Controllers\CargoController; //cargo
use App\Http\Controllers\PacienteController; //paciente
use App\Http\Controllers\ServicioController; //servicios
use App\Http\Controllers\HistorialController; //hisotial
use App\Http\Controllers\RecetaController; //Receta
use App\Http\Controllers\PersonalController; //Personal
use App\Http\Controllers\DetalleController; //Detalle
use App\Http\Controllers\EnfermeriaController; //Enfermeria
use App\Http\Controllers\ConsultorioController; //Consultorio
use App\Http\Controllers\TiendaController; //Consultorio
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){return view('dashboard');})->
name('dashboard');


//Route::resource('tiendas', TiendaController::class);
//Route::get('tiendas/{producto}', [TiendaController::class, 'crearPedido'])->name('tiendas.crearPedido');




//cargo
Route::resource('cargo', CargoController::class);
//paciente
Route::resource('paciente', PacienteController::class);
//servicios
Route::resource('servicio', ServicioController::class);
//historial
Route::resource('historial', HistorialController::class);
//receta
Route::resource('receta', RecetaController::class);
//personal
Route::resource('personal', PersonalController::class);
//detalle
Route::resource('detalle', DetalleController::class);
//enfermeria
Route::resource('enfermeria', EnfermeriaController::class);
//consultorio
Route::resource('consultorio', ConsultorioController::class);























