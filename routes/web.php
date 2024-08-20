<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AudiovisualController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CitaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');

// Definir rutas para las vistas de audiovisual, musical, audio, nosotros y contacto
Route::view('/audiovisual', 'audiovisual')->name('audiovisual');
Route::view('/musical', 'musical')->name('musical');
Route::view('/audio', 'audio')->name('audio');
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');

// Ruta para el formulario de contacto
Route::post('/contact', [PageController::class, 'store'])->name('contact.store');

// Rutas para la página de agendar cita y el formulario de cita
Route::get('/agendar-cita', [CitaController::class, 'index'])->name('agendar_cita');
Route::get('/formulario-cita', [CitaController::class, 'showForm'])->name('formulario_cita');
Route::post('/agendar-cita', [CitaController::class, 'store'])->name('cita.store');
Route::get('/formulario-cita', [CitaController::class, 'showForm'])->name('formulario_cita');
Route::post('/guardar-cita', [CitaController::class, 'store'])->name('guardar_cita');
