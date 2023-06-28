@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo dia</h2>
        <form action="{{url("dias")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{old("descripcion")}}" placeholder="Ingrese la descripción">
                @error('descripcion')
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
