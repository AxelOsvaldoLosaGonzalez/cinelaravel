@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo protagonista</h2>
        <form action="{{url("protagonistas")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label  class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nom_p" id="nombre" value="{{old("nom_p")}}" placeholder="Ingrese la descripción">
                @error('nom_p')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" name="ap_p" id="apellido_p" value="{{old("ap_p")}}" placeholder="Ingrese el porcentaje de descuento">
                @error('ap_p')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Materno:</label>
                <input type="text" class="form-control" name="am" id="apellido_m" value="{{old("am")}}" placeholder="Ingrese el porcentaje de descuento">
                @error('am')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("protagonistas")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
