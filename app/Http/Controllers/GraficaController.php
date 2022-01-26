<?php

namespace App\Http\Controllers;
use App\Models\Instructor;
use App\Models\Localizacion;
use App\Models\Inmersion;
use Illuminate\Http\Request;

class GraficaController extends Controller
{
    public function localizaciones(){
        $cantidad = Localizacion::count();
        $nombreLocalizaciones = Localizacion::orderBy("id")->pluck('nombre')->join("','");
        $cantidadInmersiones = Inmersion::selectRaw('localizacion_id,count(*) as cantidad')->groupBy('localizacion_id')->pluck('cantidad')->join(',');
        $colores = join(",", array_map('randomColor',range(0, $cantidad - 1)));
        return view('grafica.localizaciones', compact('cantidadInmersiones','nombreLocalizaciones','colores'));
    }
    public function instructores(){
        $cantidad = Instructor::count();
        $nombreInstructores = Instructor::orderBy("id")->pluck('nombre')->join("','");
        $cantidadInmersiones = Inmersion::selectRaw('instructor_id,count(*) as cantidad')->groupBy('instructor_id')->pluck('cantidad')->join(',');
        $colores = join(",", array_map('randomColor',range(0, $cantidad - 1)));
        return view('grafica.instructores', compact('cantidadInmersiones','nombreInstructores','colores'));
    }
}
