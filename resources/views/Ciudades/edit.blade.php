@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo dia</h2>
        <form action="{{route("ciudades.update",$ciudade)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="descripcion" class="form-label">Nombre de la ciudad:</label>
                <input type="text" class="form-control" name="ciudad" id="descripcion" value="{{old("ciudade")?old("ciudade"):$ciudade->nom_ciudad}}" placeholder="Ingrese el nombre de la ciudad">
                @error('ciudad')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("ciudades")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
