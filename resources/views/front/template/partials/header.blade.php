<header>

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
              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                          Servicios <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu">

                        <?php $servicesList = \App\Service::orderBy('id', 'DESC')->get(); ?>
                          @foreach ($servicesList as $servicesItem)
                          <li><a href="{{ route('front.view.service', $servicesItem->slug) }}">{{ $servicesItem->title }}</a></li>
                          @endforeach
                          </ul>
                  </li>
                  <li><a href="https://www.facebook.com/Explosi%C3%B3n-De-Diversi%C3%B3n-244968992376652/">Facebook</a></li>
                  <li><a href="https://www.instagram.com/explosiondediversion/">Instagram</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('users.index') }}">Ingresar</a></li>
              </ul>
          </div>
      </div>
  </nav>

</header>
