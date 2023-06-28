<?php

namespace App\Http\Controllers;

use App\Models\Cine;
use Illuminate\Http\Request;

class CineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cines=Cine::all();
        return view("Cines.index",compact("cines"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Cines.create");
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
            "calle"=>"required|max:255|min:10",
            "numero"=>"required|integer",
            "telefono"=>"required|max:15|min:10",
            "id_ciudad"=>'required|max:15|min:10',
        ],[
            "calle.required"=>"El capo calle es obligatorio",
            "calle.max"=>"La longitud es máximo de 255 caracteres",
            "calle.min"=>"La longitud minima es de 10 caracteres",
            "numero.required"=>"El campo numero es obligatorio",
            "numero.integer"=>"El campo numero debe de ser numerico",
            "telefono.required"=>"El campo telefono es obligatorio",
            "telefono.max"=>"La longitud es máximo de 15 caracteres",
            "telefono.min"=>"La longitud minima es de 10 caracteres",
        ]);
        Cine::create([
           "calle"=>$request->calle,
           "numero"=>$request->numero,
           "telefono"=>$request->telefono,
           "id_ciudad"=>$request->ciudad,
        ]);
        return redirect()->route("cines.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function show(Cine $cine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function edit(Cine $cine)
    {
        return view("Cines.edit",compact("cine"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cine $cine)
    {
        $request->validate([
            "calle"=>"required|max:255|min:10",
            "numero"=>"required|integer",
            "telefono"=>"required|max:15|min:10"
        ],[
            "calle.required"=>"El capo calle es obligatorio",
            "calle.max"=>"La longitud es máximo de 255 caracteres",
            "calle.min"=>"La longitud minima es de 10 caracteres",
            "numero.required"=>"El campo numero es obligatorio",
            "numero.integer"=>"El campo numero debe de ser numerico",
            "telefono.max"=>"La longitud es máximo de 15 caracteres",
            "telefono.min"=>"La longitud minima es de 10 caracteres",
        ]);
        $cine->update([
            "calle"=>$request->calle,
            "numero"=>$request->numero,
            "telefono"=>$request->telefono,
            "id_ciudad"=>$request->ciudad,
        ]);
        return redirect()->route("cines.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cine  $cine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cine $cine)
    {
        $cine->delete();
        return redirect()->back();
        //
    }
}
