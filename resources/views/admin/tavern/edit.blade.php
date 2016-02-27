@extends('layouts.admin')
@section('title', 'Atualizando Texto na Taverna')

@section('content')
    <h2>Atualizando Texto na Taverna</h2>

     @include ('errors/list')

     {!! Form::model($tavern, ['method' => 'PATCH', 'action' => ['TavernController@update', $tavern->id]]) !!}

            @include ('admin.tavern.form', ['submitButton' => 'Atualizar'])
        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE' , 'action' => ['TavernController@destroy', $tavern->id]] )!!}
                <div class="form-group">
                    {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

                </div>
        {!! Form::close() !!}
@stop

