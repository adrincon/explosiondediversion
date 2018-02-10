@extends('front.template.main')

@section('content')

<style media="screen">

.carousel-inner img {
    width: 100%;
    max-height: 460px;
}

.carousel-inner{
 height: 400px;
}

.carousel, .carousel-inner > .item > img {
  height: 400px;
}

.separador{
  background-color: #222222;
  color: white;
  padding: 1px;
}

/* -- POST -- */
.main {
    margin-top: 20px;
    margin-bottom: 20px;
}

.post {
    padding-bottom: 20px;
    margin-bottom: 20px;
    border-bottom: 1px solid #999;
}

.post .post-title a {
    color: #333;
}

.post .thumb {
    margin-right: 10px;
    width:40%;
}

.post .thumb img{
    width: 100%;
}

.post .contenedor-botones {
    width: 100%;
}

.carousel-caption{
  background-color: black;
  opacity: 0.5;
}

</style>

<div id="contenedor">
    <div id="myCarousel" class="carousel slide">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <!-- Carousel items -->
      <div class="carousel-inner">

        <div class="active item">
          <img  src="images/explosion1.jpg" alt="banner1"/>
          <div class="carousel-caption">
            <h3>Recreacion Dirigida</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <div class="item">
          <img  src="images/explosion2.jpg" alt="banner2"/>
          <div class="carousel-caption">
            <h3>Recreacion Dirigida</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>

        <div class="item">
          <img  src="images/explosion3.jpg" alt="banner3"/>
          <div class="carousel-caption">
            <h3>Recreacion Dirigida</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<br><br>

<div class="separador">
  <h2 class="text-center">NUESTROS PLANES</h2>
</div>
<hr class="featurette-divider">

<!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <div class="row">

                @foreach($services as $service)

                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        @foreach($service->serviceimages as $serviceimage)
                        <a href="{{ route('front.view.service', $service->slug) }}">
                        <img class="img-thumbnail" src="{{ asset('images/services/' . $serviceimage->name) }}" alt="" width="200" height="200">
                        </a>
                        @endforeach
                        <div class="caption">
                          <h3 class="text-center text-warning">{{ $service->title }}</h3>
                          <p class="text-center"><a href="{{ route('front.view.service', $service->slug) }}" class="btn btn-primary" role="button">Ver Paquete</a></p>
                        </div>
                      </div>
                    </div>

                @endforeach
        </div>
      </div>
      <div class="text-center">
        {!! $services->render() !!}
      </div>

        <!-- START THE FEATURETTES -->
  <div class="separador">
    <h2 class="text-center">PUBLICACIONES</h2>
  </div>
  <hr class="featurette-divider">
  <div class="container">
      <seccion class="main row">

  @foreach($articles as $article)

    <article class="post clearfix">
        <a href="{{ route('front.view.article', $article->slug) }}" class="thumb pull-left">
          @foreach($article->images as $image)
                <img class="img-thumbnail" src="{{ asset('images/articles/' . $image->name) }}" alt="" width="10" height="10">
          @endforeach
        </a>
        <h2 class="post-title text-warning">
            <a href="{{ route('front.view.article', $article->slug) }}">{{ $article->title }}</a>
        </h2>
        <p>Publicado <span class="post-fecha">{{ $article->created_at->diffForHumans() }}</span> por <span class="post-autor"><a href="#">Andres Rincon</a></span></p>
        <p class="post-contenido text-justify">
            {!! mb_strimwidth(strip_tags($article->content), 0, 200, "...") !!}
        </p>
        <div class="contenedor-botones">
          <i class="fa fa-folder-open-o"></i> <a href="#">{{ $article->category->name }}</a>
          <div class="pull-right">
            <a href="{{ route('front.view.article', $article->slug) }}" class="btn btn-primary">Leer Mas</a>
          </div>
        </div>
    </article>

    @endforeach
    <div class="text-center">
      {!! $articles->render() !!}
    </div>

</seccion>

</div>
  <br><br>

@endsection
