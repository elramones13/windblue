<?php

namespace App\Http\Controllers;

use App\Models\Buceador;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rules\ValidarDni;

class BuceadorController extends Controller
{
    public function index()
    {
        $buceadores = Buceador::all();
        return view('buceadores.index', compact('buceadores'));
    }

    public function create()
    {
        return view('buceadores.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'dni' => [new ValidarDni],
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'f_nacimiento' => 'required',
            't_buceo' => 'required',
            'cert_buceo' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'pais' => 'required'
        ]);
        Buceador::create($request->all());
        return redirect()->route('buceadores.index')->with('info', 'Buceador creado exitosamente');
    }
    public function show(Buceador $buceador)
    {
        //
    }

    public function edit($id)
    {
        $buceadores = Buceador::find($id);
        return view('buceadores.edit', compact('buceadores'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dni' => [new ValidarDni],
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'f_nacimiento' => 'required',
            't_buceo' => 'required',
            'cert_buceo' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'pais' => 'required'
        ]);

        $buceadores = Buceador::find($id);
        $buceadores->update($request->all());

        return redirect()->route('buceadores.index')->with('info', 'Buceador editado exitosamente');
    }

    public function destroy($id)
    {
        $buceadores = Buceador::find($id)->delete();
        return redirect()->route('buceadores.index');
    }
}
