<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BuceadorController;
use App\Http\Controllers\InmersionController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DudasController;
use App\Http\Controllers\Instructor;
use App\Http\Controllers\LocalizacionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/buceadores', BuceadorController::class);
Route::resource('/instructores', InstructorController::class);
Route::resource('/inmersiones', InmersionController::class);
Route::resource('/localizaciones', LocalizacionController::class);

Route::get('/instructorespdf/{instructor_id}',[InstructorController::class, 'logs'])->name('pdfs.instructores');
Route::get('/instructores/{instructor_id}/mostrar',[InstructorController::class, 'show'])->name('instructores.show');
Route::get('/instructores/{instructor_id}/recuento',[InstructorController::class, 'recuento'])->name('instructores.recuento');


Route::get('/localizaciones/{localizacion_id}/buceos',[LocalizacionController::class, 'buceos'])->name('localizaciones.buceos');
Route::get('/localizaciones/{localizacion_id}/mapas',[LocalizacionController::class, 'mapas'])->name('localizaciones.maps');
Route::get('/localizaciones/{localizacion_id}/mostrar',[InmersionController::class, 'show'])->name('localizaciones.show');

Route::get('/inmersionespdf',[InmersionController::class, 'imprimir']);

Route::get('dudas',[DudasController::class, 'index'])->name('dudas.index');
Route::post('dudas',[DudasController::class, 'store'])->name('dudas.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
