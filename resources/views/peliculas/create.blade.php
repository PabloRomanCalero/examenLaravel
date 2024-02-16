@extends('plantilla')
@section('titulo', 'Crear pelicula')
@section('contenido')
    <form action="{{route('peliculas.store')}}" method="POST">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="year" class="form-label">Año</label>
        <input type="text" class="form-control" id="year">
    </div>
    <div class="mb-3">
        <label for="director" class="form-label">Director</label>
        <input type="text" class="form-control" id="director">
    </div>
    <div class="mb-3">
        <label for="protagonista" class="form-label">Protagonista</label>
        <input type="text" class="form-control" id="protagonista">
    </div>
    <div class="mb-3">
        <label for="synopsis" class="form-label">Sinapsis</label>
        <input type="textarea" class="form-control" id="synopsis">
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
    </form>
@endsection