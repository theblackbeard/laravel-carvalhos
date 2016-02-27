@extends('layouts.admin')
@section('title', 'Atualizar Sobre')

@section('content')
@include ('errors/list')
{!! Form::model( $mail, ['method' => 'PATCH' , 'action' => ['MyMailsController@update', $mail->id]]) !!}

     @include ('admin.mail.form', ['submitButton' => 'Atualizar'])


{!! Form::close() !!}
 {!! Form::open(['method' => 'DELETE' , 'action' => ['MyMailsController@destroy', $mail->id]] )!!}
                <div class="form-group">
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

                </div>
        {!! Form::close() !!}
@stop