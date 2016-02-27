@extends('layouts.admin')
@section('title', 'Atualizando um Usuario')
@section('content')
        @include ('errors/list')

      {!! Form::model( $user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}


            @include ('admin.user.form', ['submitButton' => 'Atualizar'])


        {!! Form::close() !!}

        {!! Form::open(['method' => 'DELETE' , 'action' => ['UserController@destroy', $user->id]] )!!}
             <div class="form-group">
                 {!! Form::submit('Deletar', ['class' => 'btn btn-danger form-control']) !!}

             </div>
        {!! Form::close() !!}
@endsection
@stop