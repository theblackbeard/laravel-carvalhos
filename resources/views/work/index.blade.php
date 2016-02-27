<?php


?>
@extends('layouts.home')
@section('title', 'Carvalhos - Todos os Trabalhos')
@section('link'){{ url('work')}}@stop
@section('text')hjksahkdjhak@stop
@section('photo'){{ asset('/img/work.jpg') }}@stop
@section('autor', 'Carlos Mateus Carvalho')
@section('content')

 <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
            <div class="row">

              <div class="leftbar_content">
                <h2>Todos os Trabalhos</h2>
                <!-- start single stuff post -->
                @foreach($works as $work)
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="{{url('work') . '/' . $work->name}}"><img src="{{$work->photo}}" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          @foreach($work->categories as $tag)
                          <a class="stuff_category" href="{{url('category') .'/' . $tag->name}}">{{$tag->title}}</a>
                          @endforeach
                        <div class="stuff_article_inner">
                          <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                          <h2><a href="{{url('work') .'/' . $work->name}}">{{$work->title}}</a></h2>
                           {!! html_entity_decode(str_limit($work->text, 200))!!}
                        </div>
                      </div>
                  </div>
                </div>
                @endforeach
                <!-- End single stuff post -->
                <div class="stuffpost_paginatinonarea wow slideInLeft">
                                 <?php echo $works->render(); ?>
                                </div>




              </div>

            </div>
          </div>
          <!-- End left bar content -->





          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="row">
              <div class="rightbar_content">
 <!-- Email -->
              @include('partials.mailmark')
                 @include('partials.social')
                 @include('partials.works')
                 @include('partials.category')

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================End content body section=============== -->

@stop

@stop
