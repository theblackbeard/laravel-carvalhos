@extends('layouts.admin')
@section('title', 'Novo Texto na Taverna')

@section('content')
    <h2>Cadastrando Novo Texto na Taverna</h2>

     @include ('errors/list')

    {!! Form::open(['url' => 'admin/tavern']) !!}

        @include ('admin.tavern.form', ['submitButton' => 'Salvar'])
    {!! Form::close() !!}

@stop

