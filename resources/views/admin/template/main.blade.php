<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Default') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('\Plugins\Bootstrap\css\estilos_admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('\logo\explosion.ico') }}">
</head>
<body>
<header>
    @include('admin.template.partials.nav')
</header>
<!-- JUMBOTRON -->
<section class="jumbotron">
    <div class="container">
        <div class="row">
        <a href="#"><h1><img align="left" src="{{ asset('\logo\exd.png') }}" alt="" height="150px">Explosión de Diversión</h1></a>

        <div class="hidden-xs">
            <p>Recreacion y eventos para Medellín y el Oriente Antioqueño</p>
        </div>

        </div>
    </div>
</section>

<div class="container">
    <div class="main row">
        <section class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">@yield('title')</h3>
                </div>
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </section>
    </div>
</div>

<footer>
    <nav class="navbar navbar-inverse navbar-static-bottom">
        <div class="container">
            <p class="navbar-text">Todos los derechos reservados &copy {{date('d/m/y')}}</p>
            <a href="#" class="navbar-brand navbar-right">Explósion de Diversión</a>
        </div>
    </nav>
</footer>



<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
