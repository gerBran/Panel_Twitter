<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="/css/estilo.css">
</head>
<body>

	<div id="contenedor-general">

		<header>
			<h1>BLOG</h1>
		</header>

		<div class="menu">
			<nav>
				<ul>
          @guest
  					<!--<li><a href="/register">Registrarme</a></li>-->
  					<li><a href="/login">Login</a></li>
          @else
            <li><a href="{{route('lista-tweets')}}">Ir al panel</a></li>
          @endguest
				</ul>
			</nav>
		</div>

    @yield('contenido')

		<footer>
			<div class="columna">
				<a href="germanbrandoni@gmail.com">germanbrandoni@gmail.com</a>
			</div>
		</footer>

	</div>

</body>
</html>
