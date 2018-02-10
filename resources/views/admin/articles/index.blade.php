@extends('admin.template.main')

@section('title', 'Lista de Articulos')

@section('content')

        <div class="fluid">
            <a href="{{ route('articles.create')}}" class="btn btn-primary">Registrar Nuevo Articulo</a>
            <!-- BUSCADOR DE ARTICULOS -->
                {!! Form::open(['route' => 'articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                <div class="form-group">
                  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo..',]) !!}
                </div>
                {!! Form::close() !!}

            <!-- FIN DEL BUSCADOR -->
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>#</th>
                    <th>Titulo del Articulo</th>
                    <th>Categoria</th>
                    <th>Publicado Por:</th>
                    <th>Editar Articulo</th>
                    <th>Eliminar Articulo</th>
                </thead>

                <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $article->id }}</td>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->category->name }}</td>
                            <td>{{ $article->user->name }}</td>
                            <td>
                                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog"></span></a>
                            </td>
                            <td>
                                <a href="{{ route('articles.destroy', $article->id) }}" onclick="return confirm('Esta seguro que desea eliminar el Articulo?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $articles->render() !!}
        </div>

@endsection
