@extends('admin.template.main')

@section('title', 'Agregar Categoria')
@section('content')
   
    {!! Form::open(['route' => 'categories.store', 'method'=> 'POST']) !!}
    <div class="from-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Categoria', 'required']) !!}
    </div>

    <BR>
    <div class="from-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
    
    {!! Form::close() !!}
@endsection