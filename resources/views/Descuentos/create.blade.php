@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo descuento</h2>
        <form action="{{url("descuentos")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción:</label>
                <input type="text" class="form-control" name="desc_desc" id="descripcion" value="{{old("desc_desc")}}" placeholder="Ingrese la descripción">
                @error('desc_desc')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descuento" class="form-label">Porcentaje de Descuento:</label>
                <input type="number" class="form-control" name="porcentaje" id="descuento" value="{{old("porcentaje")}}" placeholder="Ingrese el porcentaje de descuento">
                @error('porcentaje')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("descuentos")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

