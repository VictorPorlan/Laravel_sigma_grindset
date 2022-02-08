<?php

namespace App\Http\Controllers;

use App\Models\Espada;
use App\Http\Requests\CreateEspadasRequest;


use Illuminate\Http\Request;

class Espadas extends Controller
{
    public function index()
    {
        $espadas = Espada::get();

        return view('espadas', compact('espadas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(CreateEspadasRequest $request)
    {
        Espada::create([
            'nombre'=> request('nombre'),
            'color' => request('color'),
            'creacion' => request('creacion'),
            'descripcion' => request('descripcion'),
            'herrero' => request('herrero'),
            'longitud' => request('longitud'),
        ]);    
        return redirect('espadas');
    }

    public function show($id)
    {
        $espada = Espada::findOrFail($id);
        return view('show', compact('espada'));
    }

    public function edit($id)
    {
        $espada = Espada::findOrFail($id);

        return view('edit', compact('espada'));

    }

    public function update(CreateEspadasRequest $request, $id)
    {
        $espada = Espada::findOrFail($id);
        $espada->update([
            'nombre'=> request('nombre'),
            'color' => request('color'),
            'creacion' => request('creacion'),
            'descripcion' => request('descripcion'),
            'herrero' => request('herrero'),
            'longitud' => request('longitud'),
        ]);
        return redirect()->route('espadas.show', $espada->id);
    }

    public function destroy($id)
    {
        Espada::destroy($id);
        return redirect('espadas');

    }
}