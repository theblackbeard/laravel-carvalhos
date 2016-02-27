@extends('layouts.admin')
@section('title', 'Editar Uma Categoria')


@section('content')
   <h2>Cadastrando Nova Categoria</h2>
    @include ('errors/list')


   {!! Form::model( $category, ['method' => 'PATCH', 'action' => ['CategoryController@update', $category->id]]) !!}

         @include ('admin.category.form', ['submitButton' => 'Atualizar'])


   {!! Form::close() !!}

   {!! Form::open(['method' => 'DELETE' , 'action' => ['CategoryController@destroy', $category->id]] )!!}
        <div class="form-group">
            {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

        </div>
   {!! Form::close() !!}
@stop
