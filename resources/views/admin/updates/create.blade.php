@extends('layouts.admin')
@section('title', 'Nova Atualização')

@section('content')
@include ('errors/list')
{!! Form::open(['url' => 'admin/updates']) !!}

     @include ('admin.updates.form', ['submitButton' => 'Salvar'])

{!! Form::close() !!}
@stop