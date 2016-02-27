@extends('layouts.admin')
@section('title', 'Listagem de Trabalhos')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Nome do Trabalho</th>
        <th>URL</th>

        <th>Categoria</th>

        <th colspan="2">Ação</th>
    </tr>


@foreach($works as $work)
@unless($work->categories->isEmpty())
	 <tr>
        <td>

         {{ $work->id }}
        </td>
    	 <td>
    	 {{ $work->title }}


          </td>

           <td>
              	 {{ $work->name }}


                    </td>


                  <td>
                    @foreach($work->categories as $tag)
                        <span class="badge">{{$tag->title}}</span>
                    @endforeach
                  </td>


          <td>

           <a href=" {{$url = action('WorkController@edit', ['id' => $work->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
          <td>
             @if($work->status)
                  <a href=" {{$url = action('WorkController@statusw', ['id' => $work->id, 'status' => '0', 'msg' => 'Inativo'])}}" title="Inativar Trabalho" class="btn btn-success btn-sm glyphicon glyphicon-eye-open"></a>
             @else
                   <a href=" {{$url = action('WorkController@statusw', ['id' => $work->id, 'status' => '1', 'msg' => 'Ativo'])}}" title="Ativar Trabalho" class="btn btn-danger btn-sm glyphicon glyphicon-eye-close"></a>
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