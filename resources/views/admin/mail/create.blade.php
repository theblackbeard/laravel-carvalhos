@extends('layouts.admin')
@section('title', 'Novo Sobre')

@section('content')
@include ('errors/list')
{!! Form::open(['url' => 'admin/mail']) !!}

     @include ('admin.mail.form', ['submitButton' => 'Salvar'])

{!! Form::close() !!}
@stop