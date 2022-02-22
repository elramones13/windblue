<?php

namespace App\Http\Controllers;

use App\Mail\CorreoGestion;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class DudasController extends Controller
{
    public function index(){
        return view('dudas.index');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' =>'required',
            'apellidos'=>'required',
            'email' =>'required',
            'duda'=>'required',
        ]);
        $formulario= new CorreoGestion($request->all());
        Mail::to('alejandroinfor13@gmail.com')->send($formulario);
        return redirect()->route('dashboard')->with('info','La duda fue enviada al equipo de Windblue Sports');
        return redirect()->route('dudas.index')->with('info','Duda enviada al equipo de Windblue Sports');
        return redirect()->route('dashboard')->with('info','La duda fue enviada al equipo de Windblue Sports');
        return redirect()->route('dudas.index')->with('info','Duda enviada al equipo de Windblue Sports');
    }
}