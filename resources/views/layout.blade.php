<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style>
		.active{
			text-decoration: none;
			color: green;
		}
		.error{

			color: red;
			font-size: 12px;
		}
	</style>
	<title>mi sitio</title>
</head>
<body>
	<header>
		<?php function activeMenu($url){
			return request()->is($url) ? 'active' : '';
		} ?>
		<nav>

			<a class="{{ activeMenu('inicio')}}" href="{{ route('home') }}">inicio</a>
			<a class="{{ activeMenu('usuarios')}}" href="{{ route('usuarios.index') }}">usuarios</a>
			<a class="{{ activeMenu('mensajes')}}" href="{{ route('mensajes.index') }}">mensajes</a>

			@if(auth()->guest())
				<a class="{{ activeMenu('login')}}" href="/login">login</a>
			@endif
		</nav>
	</header>
	@yield('contenido')
</body>
</html>
<h