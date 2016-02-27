@extends('layouts.admin')
@section('title', 'Listagem de Usuarios')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>E-mail</th>
        <th>Ação</th>
    </tr>


@foreach($users as $user)

	 <tr>
        <td>

         {{ $user->id }}
        </td>
    	 <td>
    	 {{ $user->name }}


          </td>

           <td>
              	 {{ $user->email }}


                    </td>




          <td>

           <a href=" {{$url = action('UserController@edit', ['id' => $user->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
        </tr>

@endforeach
</table>
@stop

@section('options')
    <a href="/admin/tavern/create" class="label label-success">Novo Texto</a>

@stop