@extends('layouts.admin')
@section('title', 'Sobre')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>URL</th>
        <th>Ação</th>
    </tr>


@foreach($abouts as $about)

	 <tr>
        <td>

         {{ $about->id }}
        </td>
    	 <td>
    	 {{ $about->title }}


          </td>

           <td>
              	 {{ $about->name }}


                    </td>




          <td>

           <a href=" {{$url = action('AboutController@edit', ['id' => $about->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
        </tr>

@endforeach
</table>
@stop

@section('options')
    <a href="/admin/about/create" class="label label-success">Novo About</a>

@stop