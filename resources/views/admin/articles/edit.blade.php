@extends('admin.template.main')

@section('title', 'Editar Articulo - ' . $articles->title)

@section('content')
    {!! Form::open(['route' => ['articles.update', $articles], 'method' => 'PUT']) !!}

        <div class="form-group">
          {!! Form::label('title', 'Titulo') !!}
          {!! Form::text('title', $articles->title, ['class' => 'form-control', 'placeholder' => 'Titulo del articulo...', 'required'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('category_id', 'Categoria') !!}
          {!! Form::select('category_id', $categories, $articles->category->id, ['class' => 'form-control select-category', 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('content', 'Contenido') !!}
          {!! Form::textarea('content', $articles->content,['class' => 'form-control textarea-content']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit ('Editar articulo', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}
@endsection

@section('js')
  <script>
    $('.select-tag').chosen({
        placeholder_text_multiple: 'Seleccione un maximo de 3 tags',
        max_selected_options: 3,
        no_results_text: 'No se encontraron estos tags'
    });

    $('.select-category').chosen({
      placeholder_text_single: 'Seleccione una Categoria'
    });

    $('.textarea-content').trumbowyg();
  </script>
@endsection
