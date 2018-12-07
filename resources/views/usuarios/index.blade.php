@extends('layout')

@section('contenido')

<h1>Usuarios</h1>
<a href="{{ route('usuarios.create')}}">Nuevo usuario</a>
<table width="80%" border="1">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido paterno</th>
			<th>Apellido materno</th>
			<th>Correo</th>
			<th>Contraseña</th>
			<th>Tipo</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($usuarios as $usuario)
			<tr>
				<td>{{$usuario->Usuario_nombre}}</td>
				<td>{{$usuario->Usuario_apPaterno}}</td>
				<td>{{$usuario->Usuario_apMaterno}}</td>
				<td>{{$usuario->Usuario_correo}}</td>
				<td>{{$usuario->Usuario_contraseña}}</td>
				<td>{{$usuario->Usuario_tipo}}</td>
				<td>
					<a href="{{ route('usuarios.edit', $usuario->Usuario_id )}}">Editar</a>
					<form style="display: inline;" method="POST" action="{{route('usuarios.destroy', $usuario->Usuario_id)}}">
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