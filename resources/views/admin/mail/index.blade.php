@extends('layouts.admin')
@section('title', 'E-mail Cadastrados')


@section('content')
<table class="table">
    <tr>
        <th>#</th>
        <th>E-Mail</th>
         <th>Ação</th>
    </tr>


@foreach($mails as $mail)

	 <tr>
        <td>

         {{ $mail->id }}
        </td>
    	 <td>
    	 {{ $mail->mail }}


          </td>


          <td>

           <a href=" {{$url = action('MyMailsController@edit', ['id' => $mail->id])}}" class="btn btn-info btn-sm glyphicon glyphicon-pencil"></a>

          </td>
        </tr>

@endforeach
</table>
@stop

