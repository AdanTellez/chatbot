@extends('layout')

@section('contenido')

<h1>Crear usuario</h1>

<form method="POST" action="{{route('usuarios.store')}}">
		{!! csrf_field('') !!}
	<p><label for="nombre">Nombre
		<input type="text" name="nombre" value="{{ old('nombre')}}">
		{{ $errors->first('nombre') }}
	</label></p>
	<p><label for="apPaterno">Apellido paterno
		<input type="text" name="apPaterno" value="{{ old('apPaterno')}}">
		{{ $errors->first('apPaterno') }}
	</label></p>
	<p><label for="apMaterno">Apellido materno
		<input type="text" name="apMaterno" value="{{ old('apMaterno')}}">
		{{ $errors->first('correo') }}
	</label></p>
	<p><label for="nacimiento">Fecha de nacimiento
		<input type="date" name="nacimiento" value="{{ old('nacimiento')}}">
		{{ $errors->first('nacimiento') }}
	</label></p>
	<p><label for="email">Correo
		<input type="email" name="email" value="{{ old('email')}}">
		{{ $errors->first('email') }}
	</label></p>
	<p><label for="contraseña">Contraseña
		<input type="text" name="contraseña" value="{{ old('contraseña')}}">
		{{ $errors->first('contraseña') }}
	</label></p>
	<input type="submit" value="Crear">
</form>

@stop