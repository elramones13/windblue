<?php

namespace App\Http\Controllers;

use App\Models\Localizacion;
use Illuminate\Http\Request;

class GraficaController extends Controller
{
    public function index(){
        $localizaciones = Localizacion::all();
        return view('localizaciones.grafice',compact('localizaciones'));
    }
}
