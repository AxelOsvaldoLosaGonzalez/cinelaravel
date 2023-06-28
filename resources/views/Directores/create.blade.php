@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo director</h2>
        <form action="{{url("directores")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nom_d" id="name" value="{{old("nom_d")}}" placeholder="Ingrese el nombre del director">
                @error('nom_d')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descuento" class="form-label">Apellido paterno:</label>
                <input type="text" class="form-control" name="ap_d" id="last-name" value="{{old("ap_d")}}" placeholder="Ingrese el Apellido paterno del director">
                @error('ap_d')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descuento" class="form-label">Apellido materno:</label>
                <input type="text" class="form-control" name="am_d" id="a-m" value="{{old("am_d")}}" placeholder="Ingrese el Apellido materno del director">
                @error('am_d')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("directores")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

