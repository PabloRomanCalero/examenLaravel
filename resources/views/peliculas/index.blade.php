@extends('plantilla')
@section('titulo', 'Inicio')
@section('contenido')
    <h1>Listado de peliculas</h1>
    <br><br>
    <table class="table table-dark table-striped">
        <thead>
            <th>Titulo</th>
            <th>Modificar</th>
            <th>Borrar</th>
        </thead>
        <tbody>
            @foreach($peliculas as $pelicula)
                <tr>
                    <td>{{$pelicula->title}}</td>
                    <td><a href="" class="btn btn-warning">Modificar</a></td>
                    <td><a href="" class="btn btn-danger">Borrar</a></td>
                </tr>
            @endforeach
                
        </tbody>
        
    </table>
    <a href="{{route('peliculas.create')}}" class="btn btn-primary">Añadir pelicula</a>
@endsection