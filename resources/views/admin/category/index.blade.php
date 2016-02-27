@extends('layouts.admin')
@section('title', 'Listagem de Categoria')


@section('content')

<table class="table">
    <tr>
        <th>#</th>
        <th>Nome da Categoria</th>
        <th>URL</th>
        <th>Ação</th>
    </tr>
@foreach($categories as $category)
    <tr>
    <td>

     {{ $category->id }}
    </td>
	 <td>
	  {{ $category->title }}


      </td>
       <td>
      	  {{ $category->name }}


            </td>
      <td>

       <a href=" {{$url = action('CategoryController@edit', ['id' => $category->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

      </td>
    </tr>


@endforeach
</table>
@stop

@section('options')
    <a href="/admin/work" class="label label-success">Listar Trabalhos</a>
    <a href="/admin/post" class="label label-info">Listar Postagens</a>
    <a href="/admin/category/create" class="label label-success">Nova Categoria</a>
    <a href="/admin/work/create" class="label label-warning">Novo Trabalho</a>
    <a href="/admin/post/create" class="label label-success">Nova Postagem</a>
@stop