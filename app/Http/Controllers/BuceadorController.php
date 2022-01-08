<?php

namespace App\Http\Controllers;

use App\Models\Buceador;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBuceadorRequest;
use App\Http\Requests\UpdateBuceadorRequest;

class BuceadorController extends Controller
{
    public function index()
    {
        return view('buceadores.index');
    }
    public function create()
    {
        return view('buceadores.create');
    }
    public function store(StoreBuceadorRequest $request)
    {
        $validated = $request->validate([
            'dni' => 'required',
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
        return redirect()->route('buceadores.index');
    }
    public function show(Buceador $buceador)
    {
        //
    }

    public function edit(Buceador $buceador)
    {
        //
    }

    public function update(UpdateBuceadorRequest $request, Buceador $buceador)
    {
        //
    }

    public function destroy(Buceador $buceador)
    {
        //
    }
}
