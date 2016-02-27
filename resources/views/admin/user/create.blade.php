@extends('layouts.admin')
@section('title', 'Registrando um Usuario')
@section('content')
        @include ('errors/list')

        {!! Form::open(['url' => 'admin/user']) !!}

            @include ('admin.user.form', ['submitButton' => 'Salvar'])
        {!! Form::close() !!}

@endsection
@stop