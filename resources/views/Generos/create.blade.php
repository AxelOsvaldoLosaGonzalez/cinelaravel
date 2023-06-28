@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo genero</h2>
        <form action="{{url("generos")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" name="desc_gen" id="descripcion" value="{{old("desc_gen")}}" placeholder="Ingrese la descripción">
                @error('desc_gen')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("generos")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

