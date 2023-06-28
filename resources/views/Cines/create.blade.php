@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Crear nuevo Cine</h2>
        <form action="{{url("cines")}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Calle:</label>
                <input type="text" class="form-control" name="calle" id="direccion" value="{{old("calle")}}" placeholder="Ingrese la descripción">
                @error('calle')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Numero:</label>
                <input type="number" class="form-control" name="numero" id="num" value="{{old("numero")}}" placeholder="Ingrese el porcentaje de descuento">
                @error('numero')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label  class="form-label">telefono:</label>
                <input type="number" class="form-control" name="telefono" id="celular" value="{{old("telefono")}}" placeholder="Ingrese el porcentaje de descuento">
                @error('telefono')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Ciudad en la que se encuentra:</label>
                <select class="form-control" name="ciudad" id="ciudad" placeholder="Selecciona la ciudad">
                    <option value="" disabled selected>Selecciona un genero</option>
                    @foreach($ciudades as $ciudades)
                        <option value="{{$ciudades->id_ciudad}}">{{$ciudades->nom_ciudad}}</option>
                    @endforeach
                </select>
                @error('ciudad')
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
