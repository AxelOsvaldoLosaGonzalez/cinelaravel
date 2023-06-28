@extends("layouts.app")
@section("content")
    <div class="container">
        <h2>Editar Película</h2>
        <form action="{{ route('peliculas.update', $pelicula) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label class="form-label">Escribe el Título de la película:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $pelicula->titulo }}" placeholder="Ingrese el Título de la película">
            </div>

            <div class="mb-3">
                <label class="form-label">Genero de la película:</label>
                <select class="form-control" name="genero" id="genero" placeholder="Selecciona el género de la película">
                    <option value="" disabled>Selecciona un género</option>
                    @foreach($generos as $genero)
                        <option value="{{ $genero->id }}" @if($genero->id == $pelicula->id_genero) selected @endif>{{ $genero->desc_gen }}</option>
                    @endforeach
                </select>
                @error('genero')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Elige una Clasificación:</label>
                <select class="form-control" name="clasificacion" id="clasificacion">
                    <option value="" disabled>Selecciona una clasificación</option>
                    @foreach($clasificaciones as $clasificacion)
                        <option value="{{ $clasificacion->id }}" @if($clasificacion->id == $pelicula->id_clasificacion) selected @endif>{{ $clasificacion->desc_clas }}</option>
                    @endforeach
                </select>
                @error('clasificacion')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Elige un Director:</label>
                <select class="form-control" name="director" id="director" placeholder="Selecciona un director">
                    <option value="" disabled>Selecciona el director de la película</option>
                    @foreach($directores as $director)
                        <option value="{{ $director->id }}" @if($director->id == $pelicula->id_director) selected @endif>
                            {{ $director->ap_d }} {{ $director->am_d }} {{ $director->nom_d }}
                        </option>
                    @endforeach
                </select>
                @error('director')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="portada" class="form-label">Cargar portada de la película:</label>
                <input class="form-control" name="portada" id="portada" type="file" placeholder="Selecciona una portada de la película">
                @error('portada')
                <span class="invalid-feedback" style="display: block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ url('peliculas') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

