@extends('layouts.mi-tema')

@section('contenido')

<h1>
  Informacion de la materia {{$id}}
</h1>
<br>

<from action="/materia/store" method="POST">
  <label for="materia">show Materia:</label>
  <input type="text" name="materia">
  
  <input type="submit" name="Guardar">
</from>

@endsection