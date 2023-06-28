<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificaciones = Clasificacion::all();
        return view("Clasificaciones.index", compact("clasificaciones"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Clasificaciones.create");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "desc_clas" => "required|max:255|min:5",
        ], [
            "desc_clas.required" => "El capo calle es obligatorio",
            "desc_clas.max" => "La longitud es máximo de 255 caracteres",
            "desc_clas.min" => "La longitud minima es de 5 caracteres",
        ]);
        //dd($request->all());
        Clasificacion::create([
            "desc_clas" => $request->desc_clas,
        ]);
        return redirect()->route("clasificaciones.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Clasificacion $clasificacione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Clasificacion $clasificacione)
    {
        return view("clasificaciones.edit", compact("clasificacione"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificacion $clasificacione)
    {
        $request->validate([
            "desc_clas" => "required|max:255|min:10",
        ], [
            "desc_clas.required" => "El capo calle es obligatorio",
            "desc_clas.max" => "La longitud es máximo de 255 caracteres",
            "desc_clas.min" => "La longitud minima es de 5 caracteres",
        ]);
        $clasificacione->update([
            "desc_clas" => $request->desc_clas,
        ]);
        return redirect()->route("clasificaciones.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clasificacion  $clasificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clasificacion $clasificacione)
    {
        $clasificacione->delete();
        return redirect()->back();
        //
    }
}