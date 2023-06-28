<?php

namespace App\Http\Controllers;

use App\Models\Protagonista;
use Illuminate\Http\Request;

class ProtagonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protagonistas=Protagonista::all();
        return view("Protagonistas.index",compact("protagonistas"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Protagonistas.create");
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
            "nom_p"=>"required",
            "ap_p"=>"required",
            "am"=>"required",
        ],[
            "nom_p.required"=>"El capo Nombre del director es obligatorio",
            "ap_p.required"=>"El capo Apellido Paterno es obligatorio",
            "am.required"=>"El capo Apellido Materno es obligatorio",
        ]);
        Protagonista::create([
            "nom_p"=>$request->nom_p,
            "ap_p"=>$request->ap_p,
            "am"=>$request->am,
        ]);
        return redirect()->route("protagonistas.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function show(Protagonista $protagonista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function edit(Protagonista $protagonista)
    {
        return view("Protagonistas.edit",compact("protagonista"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Protagonista $protagonista)
    {
        $request->validate([
            "nom_p"=>"required",
            "ap_p"=>"required",
            "am"=>"required",
        ],[
            "nom_p.required"=>"El capo Nombre del director es obligatorio",
            "ap_p.required"=>"El capo Apellido Paterno es obligatorio",
            "am.required"=>"El capo Apellido Materno es obligatorio",
        ]);

        $protagonista->update([
            "nom_p"=>$request->nom_p,
            "ap_p"=>$request->ap_p,
            "am"=>$request->am,
        ]);
        return redirect()->route("protagonistas.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Protagonista  $protagonista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Protagonista $protagonista)
    {
        $protagonista->delete();
        return redirect()->back();
        //
    }
}
