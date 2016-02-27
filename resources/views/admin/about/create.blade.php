@extends('layouts.admin')
@section('title', 'Novo Sobre')

@section('content')
@include ('errors/list')
{!! Form::open(['url' => 'admin/about']) !!}
	
     @include ('admin.about.form', ['submitButton' => 'Salvar'])
	
{!! Form::close() !!}
@stop