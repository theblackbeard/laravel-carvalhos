@extends('layouts.admin')
@section('title', 'Atualizar Postagem')

@section('content')
    <h2>Atualizar Postagem</h2>

     @include ('errors/list')
 {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}

        @include ('admin.post.form', ['submitButton' => 'Atualizar'])
    {!! Form::close() !!}

    {!! Form::open(['method' => 'DELETE' , 'action' => ['PostController@destroy', $post->id]] )!!}
            <div class="form-group">
                {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

            </div>
    {!! Form::close() !!}

@stop

