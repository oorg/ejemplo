@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Informacion de la materia
</h1>
<br>


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
        <tr>
          <td>{{ $materia->id }}</td>
          <td>{{ $materia->materia }}</td>
          <td>{{ $materia->crn }}</td>
          <td>{{ $materia->hora_inicio }}</td>
          <td>{{ $materia->updated_at }}</td>
        </tr>      
    </body>    
  </table>


<form action="{{ route('materia.destroy', $materia->id) }} " method="POST">
  {{ csrf_field() }}
  
  <input type="hidden" name="_method" value="DELETE">
  
  <button type="submit" class="btn btn-danger">
    Borrar Materia
  </button>
</form>


@endsection