<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return Contacto::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
            'notas' => 'nullable|string',
            'entidad_id' => 'required|integer',
            'fecha_nacimiento' => 'nullable|date',
            'creado_por' => 'nullable|integer',
        ]);

        return Contacto::create($validated);
    }

    public function show(Contacto $contacto)
    {
        return $contacto;
    }

    public function update(Request $request, Contacto $contacto)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'direccion' => 'nullable|string',
            'notas' => 'nullable|string',
            'entidad_id' => 'required|integer',
            'fecha_nacimiento' => 'nullable|date',
            'creado_por' => 'nullable|integer',
        ]);

        $contacto->update($validated);
        return $contacto;
    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        return response()->json(['message' => 'Contacto eliminado']);
    }
}
