@extends('layouts.mi-tema')

@section('contenido')

<form action="{{ route('materia.store') }}" method="POST">
  {{ csrf_field() }}
  <label for="materia">Usuario:</label>
  <input type="text" name="user_id">
  <br>
  <label for="materia">Materia:</label>
  <input type="text" name="materia">
  <br>
  <label for="materia">NRC:</label>
  <input type="text" name="crn">
  <br>
  <label for="materia">Hora de inicio:</label>
  <input type="time" name="hora_inicio">
  <br>
  <br>
  
  <input type="submit" name="Guardar">
</form>

@endsection