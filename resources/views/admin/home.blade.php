@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
    <ul class="list-group">
      <li class="list-group-item"><b>Atualizações</b></li>
       @foreach($updates as $update)
      <li class="list-group-item">{{$update->title}} - <b>{{$update->status}}</b>  data: {{$update->created_at}}</li>
      @endforeach
    </ul>
@stop

