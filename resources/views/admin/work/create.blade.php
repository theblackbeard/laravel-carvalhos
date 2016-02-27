@extends('layouts.admin')
@section('title', 'Novo trabalho')

@section('content')
    <h2>Cadastrando Novo Trabalho</h2>

     @include ('errors/list')

    {!! Form::open(['url' => 'admin/work']) !!}

        @include ('admin.work.form', ['submitButton' => 'Salvar'])
    {!! Form::close() !!}

@stop

