<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Iniciar Sesion') | Panel de Administracion</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('\Plugins\Bootstrap\css\estilos_admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('\logo\explosion.ico') }}">
</head>
<body>
<header>
    @include('admin.template.partials.nav')
</header>


<div class="container">
    <div class="main row">
        <section class="col-md-12">
                <div class="panel-body">
                    @include('flash::message')
                    @include('admin.template.partials.errors')
                    @yield('content')
                </div>
        </section>
    </div>
</div>

<script src="{{ asset('plugins/bootstrap/js/jquery.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>
