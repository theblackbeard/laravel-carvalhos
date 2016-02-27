@extends('layouts.tavern')
@section('title'){{$tavern->title}} - Canto da Taverna Criativa @stop
@section('top')
    <h4>ESSA É A POSTAGEM:</h4>
    <h1>{{$tavern->title}}</h1>
    <h4>ESPERO QUE GOSTE</h4>
@stop

@section('content')


    <div class="col-lg-12 col-md-12 col-sm-12">
    	<h3>{{$tavern->title}}</h3>
    	 {!! html_entity_decode($tavern->text) !!}
    </div>


@stop
@stop