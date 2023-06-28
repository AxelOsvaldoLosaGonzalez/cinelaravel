<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades=Ciudad::all();
        return view("Ciudades.index",compact("ciudades"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Ciudades.create");
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
            "ciudad"=>"required",
        ],[
            "ciudad.required"=>"El capo Dia es obligatorio",

        ]);
        Ciudad::create([
            "nom_ciudad"=>$request->ciudad,
        ]);
        return redirect()->route("ciudades.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudad $ciudade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudade)
    {
        return view("Ciudades.edit",compact("ciudade"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudade)
    {
        $request->validate([
            "ciudad"=>"required",
        ],[
            "ciudad.required"=>"El capo Dia es obligatorio",

        ]);
        $ciudade->update([
            "nom_ciudad"=>$request->ciudad,
        ]);
        return redirect()->route("ciudades.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudade)
    {
        $ciudade->delete();
        return redirect()->back();
        //
    }
}
