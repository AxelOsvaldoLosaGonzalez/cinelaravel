@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Agregar nueva ciudad</h2>
        <form action="{{url("ciudades")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="ciudad" class="form-label">Nombre de la ciudad:</label>
                <input type="text" class="form-control" name="ciudad" id="descripcion" value="{{old("ciudad")}}" placeholder="Ingrese el nombre de la ciudad">
                @error('ciudad')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("dias")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
