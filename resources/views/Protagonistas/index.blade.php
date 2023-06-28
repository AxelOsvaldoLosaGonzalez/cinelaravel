@extends("layouts.app");
@section("content");

<div class="row justify-content-center">
    <div class="col-8 bg-white pt-3">
        <div class="row-6 p-3 ">
            <a href="{{url("protagonistas/create")}}" class="btn btn-primary bg-black">Agregar protagonista</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <td>Indice</td>
                <td>Nombre:</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td colspan="2">Acciones</td>
            </tr>
            </thead>
            <tbody>
            @foreach($protagonistas as $protagonistas)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$protagonistas->nom_p}}</td>
                    <td>{{$protagonistas->ap_p}}</td>
                    <td>{{$protagonistas->am}}</td>
                    <td>
                        <form action="{{route("protagonistas.destroy",$protagonistas)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button  class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route("protagonistas.edit",$protagonistas)}}" class="btn btn-dark">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

