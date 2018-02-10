@extends('admin.template.main')

@section('title', 'Lista de Usuarios')

@section('content')

        <div class="fluid">
            <a href="{{ route('users.create')}}" class="btn btn-primary">Registrar Nuevo Usuario</a>
            <!-- BUSCADOR DE ARTICULOS -->
                {!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                <div class="form-group">
                  {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar Usuario..',]) !!}
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
                    <th>Correo</th>
                    <th>Tipo de Usuario</th>
                    <th>Editar Usuario</th>
                    <th>Eliminar Usuario</th>
                </thead>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if($user->type == "Administrador")
                                   <span class="label label-primary">{{ $user->type }}</span>
                                @else
                                   <span class="label label-default">{{ $user->type }}</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-cog"></span></a>
                            </td>
                            <td>
                                <a href="{{route ('users.destroy', $user->id)}}" onclick="return confirm ('Esta Seguro que desea eliminar al usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $users->render() !!}
        </div>

@endsection
