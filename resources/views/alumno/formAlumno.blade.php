@extends('layouts.mi-tema')

@section('contenido')

<form action="{{ route('alumno.store') }}" method="POST">
  {{ csrf_field() }}
  <label for="usuario">Nombre:</label>
  <input type="text" name="nombre">
  <br>
  <label for="usuario">Codigo:</label>
  <input type="text" name="codigo">
  <br>
  <label for="usuario">Carrera:</label>
  <input type="text" name="carrera">
  <br>
  <br>
  
  <input type="submit" name="Guardar">
</form>

@endsection