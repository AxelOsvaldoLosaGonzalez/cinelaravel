<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dias=Dia::all();
        return view("Dias.index",compact("dias"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Dias.create");
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
            "descripcion"=>"required|max:255",
        ],[
            "descripcion.required"=>"El capo Dia es obligatorio",
            "descripcion.max"=>"La longitud es máximo de 255 caracteres",

        ]);
        Dia::create([
           "descripcion"=>$request->descripcion,
        ]);
        return redirect()->route("dias.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dia  $dia
     * @return \Illuminate\Http\Response
     */
    public function show(Dia $dia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dia  $dia
     * @return \Illuminate\Http\Response
     */
    public function edit(Dia $dia)
    {
        return view("Dias.edit",compact("dia"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dia  $dia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dia $dia)
    {
        $request->validate([
            "descripcion"=>"required|max:255",
        ],[
            "descripcion.required"=>"El capo Dia es obligatorio",
            "descripcion.max"=>"La longitud es máximo de 255 caracteres",

        ]);
        $dia->update([
            "descripcion"=>$request->descripcion,
        ]);
        return redirect()->route("dias.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dia  $dia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dia $dia)
    {
        $dia->delete();
        return redirect()->back();
        //
    }
}
