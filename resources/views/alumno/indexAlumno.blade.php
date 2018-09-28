@extends('layouts.mi-tema')

@section('contenido')

<div class="container">
  <h1>
    Aqui estara el listado de Alumnos
  </h1> 
  
  <br>
  <a href="{{route('alumno.create') }}" class="btn btn-success">Registar Alumno</a>
  <br>
  <br>
  
  @if($alumnos->count() == 0)
  <div class="alert alert-warning">
    No tienes Alumnos registrados
  </div>
  @else  
  <table class ="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Codigo</th>
        <th>Carrera</th>
        <th>Ultima actualizacion</th>
      </tr>
    </thead>
    <body>
      @foreach($alumnos as $alumno)
        <tr>
          <td>{{ $alumno->id }}</td>
          <td>{{ $alumno->nombre }}</td>
          <td>{{ $alumno->codigo }}</td>
          <td>{{ $alumno->carrera }}</td>
          <td>{{ $alumno->updated_at }}</td>
        </tr>      
      @endforeach
    </body>    
  </table>
  @endif
  
</div>


@endsection
