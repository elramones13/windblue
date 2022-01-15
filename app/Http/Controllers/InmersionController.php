<?php

namespace App\Http\Controllers;

use App\Models\Inmersion;
use Illuminate\Http\Request;

class InmersionController extends Controller
{
    public function index()
    {
        $inmersiones = Inmersion::all();
        return view('inmersiones.index', compact('inmersiones'));
    }

    public function create()
    {
        return view('inmersiones.create')->with('info', 'Inmersion creada exitosamente');
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
        $inmersiones = Inmersion::find($id);
        return view('inmersiones.show', compact('inmersiones'));
    }

    public function edit($id)
    {
        $inmersiones = Inmersion::find($id);
        return view('inmersiones.edit', compact('inmersiones'));
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
