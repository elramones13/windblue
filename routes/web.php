<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuceadorController;
use App\Http\Controllers\InmersionController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LocalizacionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/buceadores',function (){
    return view('buceadores.index');
});

Route::get('/buceadores', [BuceadorController::class,'index'])->name('buceadores');
Route::resource('/instructores', InstructorController::class);
Route::resource('/inmersiones', InmersionController::class);
Route::resource('/localizaciones', LocalizacionController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

