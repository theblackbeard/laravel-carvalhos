@extends('layouts.admin')
@section('title', 'Atualizar trabalho')

@section('content')
    <h2>Atualizando Trabalho</h2>

     @include ('errors/list')

   {!! Form::model($work, ['method' => 'PATCH', 'action' => ['WorkController@update', $work->id]]) !!}

        @include ('admin.work.form', ['submitButton' => 'Atualizar'])
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE' , 'action' => ['WorkController@destroy', $work->id]] )!!}
            <div class="form-group">
                {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

            </div>
    {!! Form::close() !!}
@stop