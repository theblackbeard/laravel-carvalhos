@extends('layouts.admin')
@section('title', 'Nova Postagem')

@section('content')
    <h2>Nova Postagem</h2>

     @include ('errors/list')

    {!! Form::open(['url' => 'admin/post']) !!}

        @include ('admin.post.form', ['submitButton' => 'Salvar'])

    {!! Form::close() !!}

@stop

