@extends('admin.template.main')

@section('title', 'Editar Usuario => '.$categories->name)
@section('content')

    {!! Form::open(['route' => ['categories.update', $categories], 'method'=> 'PUT']) !!}

    <div class="from-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name', $categories->name, ['class' => 'form-control', 'placeholder' => 'Nombre de Categoria', 'required']) !!}
    </div>

    <br>
    <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection