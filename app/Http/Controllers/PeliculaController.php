<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use App\Models\Director;
use App\Models\Genero;
use App\Models\Pelicula;
use App\Models\Protagonista;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $protagonistas = Protagonista::all();
        $peliculas = Pelicula::all();
        return view("peliculas.index", compact("peliculas", "protagonistas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $generos = Genero::all();
        $clasificaciones = Clasificacion::all();
        $directores = Director::all();

        return view("peliculas.create", compact("generos", "clasificaciones", "directores"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //realizar validaciones

        $name = $request->file('portada')->getClientOriginalName();
        $path = basename($request->file('portada')->store('public/files'));

        Pelicula::create([
            "titulo" => $request->titulo,
            "id_director" => $request->director,
            "id_genero" => $request->genero,
            "id_clas" => $request->clasificacion,
            "portada" => $path
        ]);
        return redirect()->route("peliculas.index");
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelicula $pelicula)
    {
        $directores = Director::all();
        $clasificaciones = Clasificacion::all();
        $generos = Genero::all();

        return view("Peliculas.edit", compact("pelicula", "directores", "clasificaciones", "generos"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelicula $pelicula)
    {
        $pelicula->titulo = $request->input('titulo');
        $pelicula->id_genero = $request->input('genero'); // nombre del campo del formulario
        $pelicula->id_clas = $request->input('clasificacion'); // nombre del campo del formulario
        $pelicula->id_director = $request->input('director'); // nombre del campo del formulario
        // Aquí puedes agregar la lógica adicional para otros campos de la película

        $pelicula->save();

        return redirect()->route('peliculas.index')->with('success', 'Película actualizada exitosamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();

        return redirect()->route('peliculas.index')->with('success', 'Película eliminada exitosamente');
    }
}