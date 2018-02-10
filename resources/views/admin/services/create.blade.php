@extends('admin.template.main')

@section('title', 'Agregar Servicio')

@section('content')
    {!! Form::open(['route' => 'services.store', 'method' => 'POST', 'files' => true]) !!}

        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del Servicio...', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('content', 'Contenido') !!}
          {!! Form::textarea('content', null,['class' => 'form-control textarea-content']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('image', 'Imagen') !!}
          {!! Form::file('image') !!}
        </div>

        <div class="form-group">
          {!! Form::submit ('Agregar Servicio', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('js')
  <script>
    $('.textarea-content').froala_editor();
  </script>

@endsection
