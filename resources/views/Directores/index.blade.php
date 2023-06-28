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
            <a href="{{url("directores/create")}}" class="btn btn-primary bg-black">Agregar directores</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td>Indice</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($directores as $directores)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$directores->nom_d}}</td>
                    <td>{{$directores->ap_d}}</td>
                    <td>{{$directores->am_d}}</td>
                    <td>
                        <form action="{{route("directores.destroy",$directores)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button  class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route("directores.edit",$directores)}}" class="btn btn-dark">Editar</a>
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

