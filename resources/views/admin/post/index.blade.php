@extends('layouts.admin')
@section('title', 'Listagem de Postagens')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Nome da Postagem </th>
        <th>URL</th>
        <th>Categoria</th>
        <th>Visualizações</th>
         <th colspan="2">Ação</th>
    </tr>


@foreach($posts as $post)
@unless($post->categories->isEmpty())
	 <tr>
        <td>

         {{ $post->id }}
        </td>
    	 <td>
    	 {{ $post->title }}


          </td>

           <td>
              	 {{ $post->name }}


                    </td>


                  <td>
                    @foreach($post->categories as $tag)
                        <span class="badge">{{$tag->title}}</span>
                    @endforeach
                  </td>

                  <td>
                    <span class="badge">{{$post->views}}</span>

                  </td>

          <td>

           <a href=" {{$url = action('PostController@edit', ['id' => $post->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>

          <td>
            @if($post->status)
                 <a href=" {{$url = action('PostController@status', ['id' => $post->id, 'status' => '0', 'msg' => 'Inativo'])}}" title="Inativar Postagem" class="btn btn-success btn-sm glyphicon glyphicon-eye-open"></a>
            @else
                  <a href=" {{$url = action('PostController@status', ['id' => $post->id, 'status' => '1', 'msg' => 'Ativo'])}}" title="Ativar Postagem" class="btn btn-danger btn-sm glyphicon glyphicon-eye-close"></a>
             @endif

          </td>
        </tr>
        @endunless
@endforeach
</table>
@stop

@section('options')
    <a href="/admin/category" class="label label-success">Listar Categorias</a>
    <a href="/admin/post" class="label label-info">Listar Postagens</a>
    <a href="/admin/category/create" class="label label-success">Nova Categoria</a>
    <a href="/admin/work/create" class="label label-warning">Novo Trabalho</a>
    <a href="/admin/post/create" class="label label-success">Nova Postagem</a>
@stop