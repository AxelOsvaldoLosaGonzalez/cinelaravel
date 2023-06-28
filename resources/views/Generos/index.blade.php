<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@extends("layouts.app");
@section("content");

<div class="row justify-content-center">
    <div class="col-8 bg-white pt-3">
        <div class="row-6 p-3 ">
            <a href="{{url("generos/create")}}" class="btn btn-primary bg-black">Agregar generos</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td>Indice</td>
                <td>Descripcion</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($generos as $genero)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$genero->desc_gen}}</td>
                    <td>
                        <form action="{{route("generos.destroy",$genero)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button  class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route("generos.edit",$genero)}}" class="btn btn-dark">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
</body>
</html>

