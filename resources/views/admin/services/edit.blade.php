@extends('admin.template.main')

@section('title', 'Editar Servicio - ' . $services->title)

@section('content')
    {!! Form::open(['route' => ['services.update', $services], 'method' => 'PUT']) !!}

        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', $services->title, ['class' => 'form-control', 'placeholder' => 'Titulo del Servicio...', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('content', 'Contenido') !!}
          {!! Form::textarea('content', $services->content,['class' => 'form-control textarea-content']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit ('Editar Servicio', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('js')
  <script>
    $('.textarea-content').froala_editor();
  </script>
@endsection
