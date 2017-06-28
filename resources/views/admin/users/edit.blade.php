@extends('admin.template.main')

@section('title', 'Editar Usuario => '.$users->name)
@section('content')

    {!! Form::open(['route' => ['users.update', $users], 'method'=> 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('name','nombre') !!}
            {!! Form::text('name', $users->name, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email','Correo Electronico') !!}
            {!! Form::email('email', $users->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'required']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('type','Tipo Usuario') !!}
            {!! Form::select('type', ['' => 'Seleccione un nivel', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@endsection