<?php

namespace App\Http\Controllers;
use App\Models\Localizacion;
use Illuminate\Http\Request;

class LocalizacionController extends Controller
{
    public function index()
    {
        $localizaciones = Localizacion::all();
        return view('localizaciones.index', compact('localizaciones'));
    }

    public function create()
    {
        return view('localizaciones.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'longitud' => 'required',
            'latitud' => 'required',
            'pais' => 'required',
            'localidad' => 'required'
        ]);
        Localizacion::create($request->all());
        return redirect()->route('localizaciones.index')->with('info', 'Localizacion creada exitosamente');
    }
    public function show(Localizacion $Localizacion)
    {
        //
    }

    public function edit($id)
    {
        $localizaciones = Localizacion::find($id);
        return view('localizaciones.edit', compact('localizaciones'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'longitud' => 'required',
            'latitud' => 'required',
            'pais' => 'required',
            'localidad' => 'required'
        ]);

        $localizaciones = Localizacion::find($id);
        $localizaciones->update($request->all());

        return redirect()->route('localizaciones.index')->with('info', 'Localizacion editada exitosamente');
    }

    public function destroy($id)
    {
        $localizaciones = Localizacion::find($id)->delete();
        return redirect()->route('localizaciones.index');
    }
}
