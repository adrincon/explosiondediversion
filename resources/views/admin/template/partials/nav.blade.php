<!-- BARRA DE NAVEGACION PANEL DE ADMINISTRACION -->
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-ex">
                <span class="sr-only">Desplegar / Ocultar Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Explósion de Diversión</a>
        </div>
        <!-- Inicia Menu -->
        <div class="collaps navbar-collapse" id="navegacion-ex">
            <ul class="nav navbar-nav">
                <li><a href="#">Inicio</a></li>
                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
                <li><a href="#">Servicios</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        Publicaciones <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Categorias</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Articulos</a></li>
                        </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">User</a></li>
            </ul>
        </div>
    </div>
</nav>
