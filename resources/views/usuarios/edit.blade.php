@extends('layout')

@section('contenido')

<h1>Editar usuario</h1>

<form method="POST" action="{{ route('usuarios.update', $usuario->Usuario_id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field('') !!}
	<p><label for="nombre">Nombre
		<input type="text" name="nombre" value="{{ $usuario->Usuario_nombre}}">
		{{ $errors->first('nombre') }}
	</label></p>
	<p><label for="apPaterno">Apellido paterno
		<input type="text" name="apPaterno" value="{{ $usuario->Usuario_apPaterno}}">
		{{ $errors->first('apPaterno') }}
	</label></p>
	<p><label for="apMaterno">Apellido materno
		<input type="text" name="apMaterno" value="{{ $usuario->Usuario_apMaterno}}">
		{{ $errors->first('correo') }}
	</label></p>
	<p><label for="nacimiento">Fecha de nacimiento
		<input type="date" name="nacimiento" value="{{ $usuario->Usuario_fechaNacimiento}}">
		{{ $errors->first('nacimiento') }}
	</label></p>
	<p><label for="email">Correo
		<input type="email" name="email" value="{{ $usuario->Usuario_correo}}">
		{{ $errors->first('email') }}
	</label></p>
	<p><label for="contraseña">Contraseña
		<input type="text" name="contraseña" value="{{ $usuario->Usuario_contraseña}}">
		{{ $errors->first('contraseña') }}
	</label></p>
	<input type="submit" value="Crear">
</form>

@stop