<?php

namespace App\Http\Controllers;


use App\Models\Inmersion;
use App\Models\Localizacion;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InmersionController extends Controller
{
    public function index()
    {
        $inmersiones = Inmersion::all();
        return view('inmersiones.index', compact('inmersiones'));
    }
    public function imprimir(){
        $inmersiones = Inmersion::all();
        $pdf = \PDF::loadView('pdfs.inmersiones',compact('inmersiones'));
        return $pdf->download('inmersiones_logs.pdf');
    }

    public function create()
    {
        $localizaciones = Localizacion::all();
        $instructores = Instructor::all();
        $inmersiones = Inmersion::all();
        return view('inmersiones.create',compact('inmersiones','localizaciones','instructores'))->with('info', 'Inmersion creada exitosamente');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'localizacion_id' => 'required',
            'fecha' => 'required',
            't_total' => 'required',
            'temperatura' => 'required',
            'consumo' => 'required',
            'lastre' => 'required',
            'litros_bot' => 'required',
            'prof_max' => 'required',
            'instructor_id' => 'required',
            'num_buceadores' => 'required'
        ]);
        Inmersion::create($request->all());
        return redirect()->route('inmersiones.index');
    }
    public function show($id)
    {   
        $inmersiones = Inmersion::all();
        $localizaciones = Localizacion::find($id);
        return view('localizaciones.show', compact('localizaciones'));
    }

    public function edit($id)
    {
        $localizaciones = Localizacion::all();
        $instructores = Instructor::all();
        $inmersiones = Inmersion::find($id);
        return view('inmersiones.edit',compact('inmersiones','localizaciones','instructores'))->with('info', 'Inmersion editada exitosamente');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'localizacion_id' => 'required',
            'fecha' => 'required',
            't_total' => 'required',
            'temperatura' => 'required',
            'consumo' => 'required',
            'lastre' => 'required',
            'litros_bot' => 'required',
            'prof_max' => 'required',
            'instructor_id' => 'required',
            'num_buceadores' => 'required'
        ]);

        $inmersiones = Inmersion::find($id);
        $inmersiones->update($request->all());

        return redirect()->route('inmersiones.index')->with('info', 'Inmersion editada exitosamente');
    }

    public function destroy($id)
    {
        $inmersiones = Inmersion::find($id)->delete();
        return redirect()->route('inmersiones.index');
    }    
    
}
