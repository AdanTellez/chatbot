@extends('layout')

@section('contenido')

<h1>Crear solicitud de mensaje</h1>

<form method="POST" action="{{route('mensajes.store')}}">

		{!! csrf_field('') !!}
	<p><label for="titulo">Titulo
		<input type="text" name="titulo" value="{{ old('titulo')}}">
		{{ $errors->first('titulo') }}
	</label></p>
	<p><label for="mensaje">Mensaje
		<input type="text" name="mensaje" value="{{ old('mensaje')}}">
		{{ $errors->first('mensaje') }}
	</label></p>
	<p><label for="envio">Fecha de envio
		<input type="date" name="envio" value="{{ old('envio')}}">
		{{ $errors->first('envio') }}
	</label></p>
	<input type="submit" value="Crear">
</form>

@stop