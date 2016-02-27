@extends('layouts.admin')
@section('title', 'Atualizar Sobre')

@section('content')
@include ('errors/list')
{!! Form::model( $about, ['method' => 'PATCH' , 'action' => ['AboutController@update', $about->id]]) !!}
	
     @include ('admin.about.form', ['submitButton' => 'Atualizar'])
	
	
{!! Form::close() !!}
 {!! Form::open(['method' => 'DELETE' , 'action' => ['AboutController@destroy', $about->id]] )!!}
                <div class="form-group">
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

                </div>
        {!! Form::close() !!}
@stop