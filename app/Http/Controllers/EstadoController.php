<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Http\Requests\StoreEstadoRequest;
use App\Http\Requests\UpdateEstadoRequest;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
         $estados = Estado::all();
        //return $pacientes;
        return view('estados.index',compact("estados")); 

/* 
        try {
            // Recuperar todos los registros de la tabla "Estado"
            $estados = Estado::all();
            
            // Pasar los datos a la vista "estados.index"
            return view('estados.index', compact("estados"));
        } catch (\Exception $e) {
            // En caso de error, puedes manejarlo apropiadamente, por ejemplo, redirigiendo o mostrando un mensaje de error.
            return redirect()->route('error')->with('error', 'Se produjo un error al cargar los estados.');
        } */

        //return view('estados.index');

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEstadoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEstadoRequest $request, Estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
