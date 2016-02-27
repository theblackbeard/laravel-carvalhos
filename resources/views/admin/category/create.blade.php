@extends('layouts.admin')
@section('title', 'Criar Uma Categoria')


@section('content')
   <h2>Cadastrando Nova Categoria</h2>
    @include ('errors/list')

   {!! Form::open(['url' => 'admin/category']) !!}

        @include ('admin.category.form', ['submitButton' => 'Salvar'])

   {!! Form::close() !!}


@stop
