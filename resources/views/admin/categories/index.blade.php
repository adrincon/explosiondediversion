@extends('admin.template.main')

@section('title', 'Lista de Categorias')

@section('content')

        <div class="fluid">
            <a href="{{ route('categories.create')}}" class="btn btn-primary">Registrar Nueva Categoria</a>
            <!-- BUSCADOR DE ARTICULOS -->
                {!! Form::open(['route' => 'categories.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                <div class="form-group">
                  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Categoria..',]) !!}
                </div>
                {!! Form::close() !!}

            <!-- FIN DEL BUSCADOR -->
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Editar Categoria</th>
                    <th>Eliminar Categoria</th>
                </thead>

                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog"></span></a>
                            </td>
                            <td>
                                <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm ('Esta Seguro que desea eliminar al usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $categories->render() !!}
        </div>

@endsection
