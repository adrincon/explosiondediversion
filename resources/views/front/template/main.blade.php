<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('\Plugins\Bootstrap\css\estilos') }}">
	<link rel="shortcut icon" href="{{ asset('\logo\favicon.ico') }}">
	<link rel="stylesheet" href="{{ asset('plugins\chosen\chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css') }}">
	<title>@yield('title', 'Default') | Panel de Administracion</title>
</head>
<body>

	<header>
		@include('front.template.partials.header')
	</header>
		<!-- JUMBOTRON -->
		<section class="jumbotron">
		    <div class="container">
		        <div class="row text-center">
		        <a href="{{ route('front.index') }}"><img src="{{ asset('\logo\explosion1.jpg') }}" alt="" height="300px"></a>
		        </div>
				</div>
		</section>

	<section>
	<div class="container">
		@yield('content')
	</section>
	<footer>
			<nav class="navbar navbar-inverse navbar-static-bottom">
					<div class="container"><br>
							<img align="left" src="{{ asset('\logo\payaso.png') }}" alt="" height="30px">
							<h4 class="navbar-text ">Informacion: 319 - 257 - 7482 // Maria Rincón</h4>
							<a href="#" class="navbar-brand navbar-right">Explósion de Diversión</a>
					</div>
			</nav>
	</footer>

	</div>

	<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('plugins/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.js') }}"></script>
	<script>
	    $(document).ready(function(){
	        $('.myCarousel').carousel()
	    });
	</script>
</body>
</html>
