@extends('layouts.tavern')
@section('title', 'Canto da Taverna Criativa')
@section('top')
    <h4>OLÁ MEU AMOR, AQUI É A</h4>
    <h1>TAVERNA CRIATIVA</h1>
    <h4>O NOSSO CANTINHO PESSOAL</h4>
@stop
@section('content')

    @foreach($taverns as $tavern)
    <div class="col-lg-4 col-md-4 col-sm-4 gallery">
    			<a href="{{url('tavern') .'/' . $tavern->name}}"><img src="{{$tavern->photo}}" class="img-responsive"></a>
    </div>
    @endforeach
    <div class="stuffpost_paginatinonarea wow slideInLeft">
                                     <?php echo $taverns->render(); ?>
    </div>

@stop
@stop