@extends('admin.template.main')

@section('title', 'Agregar Articulo')

@section('content')
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => true]) !!}

        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo...', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('category_id', 'Categoria') !!}
          {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'required']) !!}
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
          {!! Form::submit ('Agregar articulo', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('js')
  <script>
    $('.textarea-content').trumbowyg();
  </script>
@endsection
