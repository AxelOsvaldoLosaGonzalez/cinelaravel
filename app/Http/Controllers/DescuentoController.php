<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $descuentos=Descuento::all();
        return view("Descuentos.index",compact("descuentos"));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Descuentos.create");
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
           "desc_desc"=>"required|max:255|min:10",
            "porcentaje"=>"required|integer",
        ],[
            "desc_desc.required"=>"El capo descripcion es obligatorio",
            "desc_desc.max"=>"La longitud es máximo de 255 caracteres",
            "desc_desc.min"=>"La longitud minima es de 10 caracteres",
            "porcentaje.required"=>"El campo porcentaje es obligatorio",
            "porcentaje.integer"=>"El campo porcentaje debe de ser numerico",
        ]);
        //dd($request->all());
        Descuento::create([
            "desc_desc"=>$request->desc_desc,
            "porcentaje"=>$request->porcentaje,
        ]);
        return redirect()->route("descuentos.index");

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function show(Descuento $descuento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function edit(Descuento $descuento)
    {
        return view("Descuentos.edit",compact("descuento"));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Descuento $descuento)
    {
        $request->validate([
            "desc_desc"=>"required|max:255|min:10",
            "porcentaje"=>"required|integer",
        ],[
            "desc_desc.required"=>"El capo descripcion es obligatorio",
            "desc_desc.max"=>"La longitud es máximo de 255 caracteres",
            "desc_desc.min"=>"La longitud minima es de 10 caracteres",
            "porcentaje.required"=>"El campo porcentaje es obligatorio",
            "porcentaje.integer"=>"El campo porcentaje debe de ser numerico",
        ]);

        $descuento->update([
            "desc_desc"=>$request->desc_desc,
            "porcentaje"=>$request->porcentaje
        ]);

        return redirect()->route("descuentos.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Descuento $descuento)
    {
        $descuento->delete();
        return redirect()->back();
        //
    }
}
