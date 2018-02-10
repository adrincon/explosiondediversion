@extends('front.template.main')

@section('title', $article->title)

@section('content')

<style media="screen">
.separador{
  background-color: #222222;
  color: white;
  padding: 1px;
}
</style>


  <div class="row text-center">
    <div class="col-md-12">
      <div class="separador">
      <h2 class="text-center">{{ $article->title }}</h2>
    </div><br><br>

      @foreach($article->images as $image)
          <img class="img-thumbnail" src="{{ asset('images/articles/' . $image->name) }}" alt="" width="242" height="200">
      @endforeach
      <hr class="featurette-divider">

      <br>{!! $article->content !!}<br>
      <h3>Publicado por:</h3>
      {{ $article->user->name }}
      <hr>

      <div id="disqus_thread"></div>
    <script>

          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://explosion-de-diversion.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
      </script>

          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

    </div>
  </div>

@endsection
