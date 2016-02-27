@extends('layouts.admin')
@section('title', 'Atualizar Atualização')

@section('content')
@include ('errors/list')
{!! Form::model( $updates, ['method' => 'PATCH' , 'action' => ['UpdateController@update', $updates->id]]) !!}

     @include ('admin.updates.form', ['submitButton' => 'Atualizar'])


{!! Form::close() !!}
 {!! Form::open(['method' => 'DELETE' , 'action' => ['UpdateController@destroy', $updates->id]] )!!}
                <div class="form-group">
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

                </div>
        {!! Form::close() !!}
@stop