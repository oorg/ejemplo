@extends('layouts.mi-tema')

@section('contenido')

<div class="container">
  <h1>
    Aqui estara el listado de materias
  </h1>
  
  <a href="{{action('MateriaController@create') }}">Nueva materia (action)</a>
  <br>
  <a href="{{route('materia.create') }}">Nueva materia (route)</a>
  <br>
  <a href="{{route('materia.create') }}" class="btn btn-success">Nueva materia (route)</a>
  
  @if($materias->count() == 0)
  <div class="alert alert-warning">
    No tines materias registradas
  </div>
  @else  
  <table class ="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Materia</th>
        <th>CNR</th>
        <th>Horario</th>
        <th>Ultima actualizacion</th>
      </tr>
    </thead>
    <body>
      @foreach($materias as $materia)
        <tr>
          <td>{{ $materia->id }}</td>
          <td>{{ $materia->materia }}</td>
          <td>{{ $materia->crn }}</td>
          <td>{{ $materia->hora_inicio }}</td>
          <td>{{ $materia->updated_at }}</td>
        </tr>      
      @endforeach
    </body>    
  </table>
  @endif
  
</div>

@endsection
