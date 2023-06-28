@extends("layouts.app")
@section ("content")
    <div class="container">
        <h2>Agregar Película</h2>
        <form action="{{url("peliculas")}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Escribe el Título de la película:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{old("titulo")}}" placeholder="Ingrese el Título de la película">
            </div>

            <div class="mb-3">
                <label class="form-label">Genero de la pelicula:</label>
                <select class="form-control" name="genero" id="genero" placeholder="Selecciona el genero de la pelicula">
                    <option value="" disabled selected>Selecciona un genero</option>
                    @foreach($generos as $generos)
                        <option value="{{$generos->id}}">{{$generos->desc_gen}}</option>
                    @endforeach
                </select>
                @error('genero')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Elige una Clasificación:</label>
                <select class="form-control" name="clasificacion" id="clasificacion" >
                    <option value="" disabled selected>Selecciona una clasificación</option>
                    @foreach($clasificaciones as $clasificaciones)
                        <option value="{{$clasificaciones->id}}">{{$clasificaciones->desc_clas}}</option>
                    @endforeach
                </select>
                @error('clasificacion')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Elige un Director:</label>
                <select class="form-control" name="director" id="director" placeholder="Selecciona un director">
                    <option value="" disabled selected>Selecciona el director de la pelicula</option>
                    @foreach($directores as $director)
                        <option value="{{$director->id}}">{{$director->ap_d}} {{$director->am_d}} {{$director->nom_d}}</option>
                    @endforeach

                    {{--{{$director->ap_d." ".$director->am_d." ".$director->nombre_d}}--}}
                </select>
                @error('director')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="portada" class="form-label">Cargar portada de la pelicula:</label>
                <input class="form-control" name="portada" id="portada" type="file" placeholder="Selecciona una portada de la pelicula">
                @error('portada')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{$message}}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{url("peliculas")}}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
