@extends('admin.template.main')

@section('title', 'Agregar Categoria')
@section('content')
    <a href="{{ route('categories.create')}}" class="btn btn-info">Nueva Categoria</a><hr>
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tboby>
           @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning glyphicon glyphicon-wrench"></a>
                    <a href="{{ route('categories.destroy', $category->id) }}" onclick=" return confirm('¿Seguro que quiere eliminidar este usuario?')"  class="btn btn-danger glyphicon glyphicon-trash"></a>
                </td>
            </tr>
            @endforeach
        </tboby>
    </table >
  {!! $categories->render() !!}
@endsection