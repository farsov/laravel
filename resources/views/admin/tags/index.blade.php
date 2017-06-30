@extends('admin.template.main')

@section('title', 'Agregar Tags')
@section('content')
    <a href="{{ route('tags.create')}}" class="btn btn-info">Nueva Categoria</a><hr>
    {!! Form::open(['route' => 'tags.index', 'method'=> 'GET', 'class' => 'navbar-form pull-right']) !!}
        <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>
    {!! Form::close() !!}
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tboby>
           @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->id }}</td>
                <td>{{ $tag->name }}</td>
                <td>
                    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                    <a href="{{ route('tags.destroy', $tag->id) }}" onclick=" return confirm('¿Seguro que quiere eliminidar este usuario?')"  class="btn btn-danger glyphicon glyphicon-trash"></a>
                </td>
            </tr>
            @endforeach
        </tboby>
    </table >
  {!! $tags->render() !!}
@endsection