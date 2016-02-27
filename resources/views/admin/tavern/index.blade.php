@extends('layouts.admin')
@section('title', 'Area da Taverna')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>URL</th>
        <th>Ação</th>
    </tr>


@foreach($taverns as $tavern)

	 <tr>
        <td>

         {{ $tavern->id }}
        </td>
    	 <td>
    	 {{ $tavern->title }}


          </td>

           <td>
              	 {{ $tavern->name }}


                    </td>




          <td>

           <a href=" {{$url = action('TavernController@edit', ['id' => $tavern->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
        </tr>

@endforeach
</table>
@stop

@section('options')
    <a href="/admin/tavern/create" class="label label-success">Novo Texto</a>

@stop