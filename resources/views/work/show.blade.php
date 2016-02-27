@extends('layouts.home')
@section('title'){{ $work->title . " - Carlos M Carvalhos"}}@stop
@section('link'){{ url('work') . "/" .$work->name}}@stop
@section('text'){{ strip_tags(str_limit($work->text, 170))}}@stop
@section('photo'){{ $work->photo }}@stop;
@section('autor', 'Carlos Mateus Carvalho')
@section('content')

 <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
            <div class="row">

              <div class="leftbar_content">
                <h2><a href="{{url('work')}}">Todos os Trabalhos</a></h2>
                <!-- start single stuff post -->

                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="{{$work->photo}}" target="_blank"><img src="{{$work->photo}}" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          @foreach($work->categories as $tag)
                          <a class="stuff_category" href="{{url('category') .'/' . $tag->name}}">{{$tag->title}}</a>
                          @endforeach
                        <div class="stuff_article_inner">
                          <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                          <h2>{{$work->title}}</h2><span class="pull-right badge">{{$work->views}}</span>
                             {!! html_entity_decode($work->text)!!}
                             <div class="addthis_sharing_toolbox"></div>
                             <br>
                             <h2>Comente!</h2>

                              <div class="fb-comments" data-href="{{ url('work') . "/" .$work->name}}"  data-numposts="5"></div>

                        </div>

                      </div>
                  </div>
                </div>

                <!-- End single stuff post -->

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