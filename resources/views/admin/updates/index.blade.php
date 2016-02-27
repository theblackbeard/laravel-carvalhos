@extends('layouts.admin')
@section('title', 'Updates')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Status</th>
        <th>Ação</th>
    </tr>


@foreach($updates as $update)

	 <tr>
        <td>

         {{ $update->id }}
        </td>
    	 <td>
    	 {{ $update->title }}


          </td>

           <td>
              	 {{ $update->status }}


                    </td>




          <td>

           <a href=" {{$url = action('UpdateController@edit', ['id' => $update->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
        </tr>

@endforeach
</table>
@stop

@section('options')
    <a href="/admin/updates/create" class="label label-success">Novo Update</a>

@stop