<?php

namespace App\Http\Controllers;

use App\Models\Espada;
use App\Http\Requests\CreateEspadasRequest;


use Illuminate\Http\Request;

class Espadas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espadas = Espada::get();

        return view('espadas', compact('espadas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espada = Espada::findOrFail($id);
        return view('show', compact('espada'));
    }

    /**
     * Show the form for editing the specified resource.
     *I
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espada = Espada::findOrFail($id);

        return view('edit', compact('espada'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Espada::destroy($id);
        return redirect('espadas');

    }
}
