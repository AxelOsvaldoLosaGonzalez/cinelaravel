<?php

namespace App\Http\Controllers;

use App\Models\Asignaprotagonista;
use Illuminate\Http\Request;

class AsignaprotagonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hola
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //el request es ek nombre de los elementos que estan validados en
    {
        //dd($request->all());
        Asignaprotagonista::where("id_pelicula",$request->id_pelicula)->delete();
        if(isset($request->protagonistas)){
            foreach ($request->protagonistas as $protagonista){
                Asignaprotagonista::create([
                    "id_pelicula"=>$request->id_pelicula,
                    "id_protagonista"=>$protagonista,
                ]);
            }
        }
        return redirect()->back();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asignaprotagonista  $asignaprotagonista
     * @return \Illuminate\Http\Response
     */
    public function show(Asignaprotagonista $asignaprotagonista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asignaprotagonista  $asignaprotagonista
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignaprotagonista $asignaprotagonista)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asignaprotagonista  $asignaprotagonista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignaprotagonista $asignaprotagonista)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asignaprotagonista  $asignaprotagonista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignaprotagonista $asignaprotagonista)
    {
        //
    }
}
