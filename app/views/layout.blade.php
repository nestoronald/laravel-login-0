<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	{{HTML::style('css/bootstrap.min.css')}}
	{{HTML::style('css/jumbotron-narrow.css')}}
	<title>@yield('title') | Mi aplicación</title>
</head>
<body>
	<header class="container">
		<h1>Mi aplicación</h1>
		<hr />
	</header>
	<div class="container">
	@yield('content')
	</div>
</body>
</html>
