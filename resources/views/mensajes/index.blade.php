@extends('layout')

@section('contenido')

<h1>Solicitudes de mensajes</h1>
<a href="{{ route('mensajes.create')}}">Nueva solicitud</a>
<table width="50%" border="1">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Status</th>
			<th>Fecha</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($mensajes as $mensaje)
			<tr>
				<td width="50%">{{$mensaje->Mensaje_titulo}}</td>
				<td>{{$mensaje->Mensaje_estatus}}</td>
				<td>{{$mensaje->Mensaje_fecha}}</td>
				<td width="20%">
					<a href="{{ route('mensajes.edit', $mensaje->Mensaje_id )}}">Editar</a>
					<form style="display: inline;" method="POST" action="{{route('mensajes.destroy', $mensaje->Mensaje_id)}}">
						{!! method_field('DELETE') !!}
						{!! csrf_field('') !!}
						<button type="submit">Eliminar</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@stop