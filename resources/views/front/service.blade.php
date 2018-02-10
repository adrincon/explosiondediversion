@extends('front.template.main')

@section('title', $service->title)

@section('content')
<style media="screen">
.separador{
  background-color: #222222;
  color: white;
  padding: 1px;
}
</style>

  <div class="row">
    <div class="col-md-12 text-center">
      <div class="separador">
        <h2 class="text-center">{{ $service->title }}</h2><br>
      </div>
      <hr class="featurette-divider">

        @foreach($service->serviceimages as $serviceimage)
        <img class="img-thumbnail" src="{{ asset('images/services/' . $serviceimage->name) }}" alt="" width="242" height="200"><br>
        @endforeach

      <br>{!! $service->content !!} <br><br>
      <hr class="featurette-divider">
    </div>


@endsection
