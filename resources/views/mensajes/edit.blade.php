@extends('layout')

@section('contenido')

<h1>Editar solicitud de mensaje</h1>

<form method="POST" action="{{ route('mensajes.update', $mensaje->Mensaje_id) }}">
	{!! method_field('PUT') !!}
	{!! csrf_field('') !!}
	<p><label for="titulo">Titulo
		<input type="text" name="titulo" value="{{ $mensaje->Mensaje_titulo}}">
		{{ $errors->first('titulo') }}
	</label></p>
	<p><label for="mensaje">Mensaje
		<input type="text" name="mensaje" value="{{ $mensaje->Mensaje_mensaje}}">
		{{ $errors->first('mensaje') }}
	</label></p>
	<p><label for="status">Status
		<input type="text" name="status" value="{{ $mensaje->Mensaje_estado}}">
		{{ $errors->first('status') }}
	</label></p>
	<p><label for="envio">Fecha de envio
		<input type="date" name="envio" value="{{ $mensaje->Mensaje_fechaEnvio}}">
		{{ $errors->first('envio') }}
	</label></p>
	<input type="submit" value="Crear">
</form>

@stop