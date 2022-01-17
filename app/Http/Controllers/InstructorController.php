<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Inmersion;
use Illuminate\Http\Request;
use App\Rules\ValidarDni;

class InstructorController extends Controller
{
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructores.index', compact('instructores'));
    }

    public function create()
    {
        return view('instructores.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'dni' => [new ValidarDni],
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'f_nacimiento' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'pais' => 'required',
            'cert_instructor' => 'required'
        ]);
        Instructor::create($request->all());
        return redirect()->route('instructores.index')->with('info', 'Instructor creado exitosamente');
    }
    public function show(Instructor $Instructor)
    {
        //
    }

    public function edit($id)
    {
        $instructores = Instructor::find($id);
        return view('instructores.edit', compact('instructores'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'dni' => [new ValidarDni],
            'nombre' => 'required',
            'apellido1' => 'required',
            'apellido2' => 'required',
            'f_nacimiento' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'pais' => 'required',
            'cert_instructor' => 'required'
        ]);

        $instructores = Instructor::find($id);
        $instructores->update($request->all());

        return redirect()->route('instructores.index')->with('info', 'Instructor editado exitosamente');
    }

    public function destroy($id)
    {
        $instructores = Instructor::find($id)->delete();
        return redirect()->route('instructores.index');
    }
}
