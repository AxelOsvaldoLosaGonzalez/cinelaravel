<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directores=Director::all();
        return view("Directores.index",compact("directores"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Directores.create");
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
            "nom_d"=>"required",
            "ap_d"=>"required",
            "am_d"=>"required",
        ],[
            "nom_d.required"=>"El campo nombre es obligatorio",
            "ap_d.required"=>"El campo Apellido Paterno es obligatorio",
            "am_d.required"=>"El capo Apellido Materno es obligatorio",
        ]);
        Director::create([
           "nom_d"=>$request->nom_d,
            "ap_d"=>$request->ap_d,
            "am_d"=>$request->am_d,
        ]);
        return redirect()->route("directores.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $directore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $directore)
    {
        return view("Directores.edit",compact("directore"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Director $directore)
    {
        $request->validate([
            "nom_d"=>"required",
            "ap_d"=>"required",
            "am_d"=>"required",
        ],[
            "nom_d.required"=>"El campo nombre es obligatorio",
            "ap_d.required"=>"El campo Apellido Paterno es obligatorio",
            "am_d.required"=>"El capo Apellido Materno es obligatorio",
        ]);
        $directore->update([
            "nom_d"=>$request->nom_d,
            "ap_d"=>$request->ap_d,
            "am_d"=>$request->am_d,
        ]);
        return redirect()->route("directores.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $directore)
    {
        $directore->delete();
        return redirect()->back();
        //
    }
}
