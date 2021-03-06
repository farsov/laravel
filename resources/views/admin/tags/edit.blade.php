@extends('admin.template.main')

@section('title', 'Editar Tag => '.$tags->name)
@section('content')

    {!! Form::open(['route' => ['tags.update', $tags], 'method'=> 'PUT']) !!}

    <div class="from-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name', $tags->name, ['class' => 'form-control', 'placeholder' => 'Nombre de Categoria', 'required']) !!}
    </div>

    <br>
    <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@endsection