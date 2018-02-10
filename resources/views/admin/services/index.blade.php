@extends('admin.template.main')

@section('title', 'Lista de Servicios')

@section('content')

        <div class="fluid">
            <a href="{{ route('services.create')}}" class="btn btn-primary">Registrar Nuevo Servicio</a>
            <!-- BUSCADOR DE ARTICULOS -->
                {!! Form::open(['route' => 'services.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                <div class="form-group">
                  {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar Servicio..',]) !!}
                </div>
                {!! Form::close() !!}

            <!-- FIN DEL BUSCADOR -->
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>#</th>
                    <th>Titulo del Servicio</th>
                    <th>Publicado Por:</th>
                    <th>Editar Servicio</th>
                    <th>Eliminar Servicio</th>
                </thead>

                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->user->name }}</td>
                            <td>
                                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog"></span></a>
                            </td>
                            <td>
                                <a href="{{ route('services.destroy', $service->id) }}" onclick="return confirm('Esta seguro que desea eliminar el Servicio?')"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $services->render() !!}
        </div>

@endsection
