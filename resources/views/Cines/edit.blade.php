@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Editar cines</h2>
        <form action="{{route("cines.update",$cine)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label  class="form-label">Calle:</label>
                <input type="text" class="form-control" name="calle" id="direccion" value="{{old("calle")?old("calle"):$cine->calle}}" placeholder="Ingrese la descripción">
                @error('calle')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Numero:</label>
                <input type="number" class="form-control" name="numero" id="num"value="{{old("numero")?old("numero"):$cine->numero}}" placeholder="Ingrese el porcentaje de descuento">
                @error('numero')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">telefono:</label>
                <input type="number" class="form-control" name="telefono" id="celular" value="{{old("telefono")?old("telefono"):$cine->telefono}}" placeholder="Ingrese el porcentaje de descuento">
                @error('telefono')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("cines")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
