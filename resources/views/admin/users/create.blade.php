@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('content')

    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
        <div class="form-group">
          {!! Form::label('name', 'Nombre Completo') !!}
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre y Apellido', 'required']) !!}
        </div>

        <div class="form-group">
              {!! Form::label('email', 'Correo Electronico') !!}
              <div class="input-group">
              <div class="input-group-addon">@</div>
              {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
            </div>
        </div>

        <div class="form-group">
          {!! Form::label('password', 'Contraseña') !!}
          {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '************', 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('type', 'Tipo de Usuario') !!}
          {!! Form::select('type', ['Administrador' => 'Usuario Administrador', 'Corriente' => 'Usuario Corriente'], null, ['class'
          => 'form-control', 'placeholder' => 'Seleccione una opcion...', 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection
