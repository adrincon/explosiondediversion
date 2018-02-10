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
            <a href="{{ route('front.index') }}" class="navbar-brand">Explósion de Diversión</a>
        </div>
        <!-- Inicia Menu -->
        <div class="collaps navbar-collapse" id="navegacion-ex">
          @if(Auth::user())
            <ul class="nav navbar-nav">
              @if(Auth::user()->administrador())
                <li><a href="{{ route('users.index') }}">Usuarios</a></li>
              @endif
                <li><a href="{{ route('services.index') }}">Servicios</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        Publicaciones <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('categories.index') }}">Categorias</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('articles.index') }}">Articulos</a></li>
                        </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
              <li><a href="{{ route('logout') }}">Salir</a></li>
          </ul>
        </li>
            </ul>
          @endif
        </div>
    </div>
</nav>
