@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Editar clasificacion</h2>
        <form action="{{route("clasificaciones.update",$clasificacione)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción clasificación:</label>
                <input type="text" class="form-control" name="desc_clas" id="descripcion" value="{{old("desc_clas")?old("desc_clas"):$clasificacione->desc_clas}}" placeholder="Ingrese la descripción">
                @error('desc_clas')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("clasificaciones")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

