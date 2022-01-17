<?php

namespace App\Http\Controllers;

use App\Correo\DudasCorreo;
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
        $correo= new DudasCorreo($request->all());
        Mail::to('alejandroinfor13@gmail.com')->send($correo);
        return redirect()->route('dudas.index')->with('info','Duda enviada al equipo de Windblue Sports');
    }

}
