@extends('admin.template.main')

@section('title', 'Editar Usuario')

@section('content')

{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Nombre Completo') !!}
          {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre y Apellido', 'required']) !!}
        </div>

        <div class="form-group">
              {!! Form::label('email', 'Correo Electronico') !!}
              <div class="input-group">
              <div class="input-group-addon">@</div>
              {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
            </div>
        </div>


        <div class="form-group">
          {!! Form::label('type', 'Tipo de Usuario') !!}
          {!! Form::select('type', ['Administrador' => 'Usuario Administrador', 'Corriente' => 'Usuario Corriente'], $user->type, ['class'
          => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
