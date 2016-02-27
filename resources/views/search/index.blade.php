@extends('layouts.home')
@section('title'){{ "Resultados de: " . $keyword}}@stop
@section('link'){{ url('q') . "?keywords" .$keyword}}@stop
@section('text' , 'Busca Relacionada')
@section('photo'){{ asset('/img/about.jpg') }}@stop
@section('autor', 'Carlos Mateus Carvalho')
@section('content')
<section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
                <div class="leftbar_content">
                <h2>Postagens: <span class="badge">{{$posts->count()}}</span> </h2>
                <div class="row">
                     <!-- start single stuff post -->
                                    @foreach($posts as $post)
                                    <div class="single_stuff wow fadeInDown">
                                      <div class="single_stuff_img">
                                        <a href="{{url('post') . '/' .$post->name}}"><img src="{{$post->photo}}" alt="img"></a>
                                      </div>

                                      <div class="single_stuff_article">
                                            <div class="single_sarticle_inner">
                                                @foreach($post->categories as $tag)
                                                  <a class="stuff_category" href="{{url('category') .'/' . $tag->name}}">{{$tag->title}}</a>
                                                @endforeach

                                      <div class="stuff_article_inner">
                                                 <span class="stuff_date">{{ $post->mesBr($post->created_at) }} <strong>{{date('d', strtotime($post->created_at))}}</strong></span>
                                                 <h2><a href="{{url('post') .'/' . $post->name}}">{{$post->title}}</a><span class="pull-right badge">{{$post->views}}</span></h2>
                                      </div>


                                             </div>

                                      </div>


                                    </div>
                                    @endforeach
                <!-- End single stuff post -->
                <div class="stuffpost_paginatinonarea wow slideInLeft">
                     <?php echo $posts->appends(['keywords' => $keyword])->render(); ?>
                </div>

                </div>
               <h2>Trabalhos: <span class="badge">{{$works->count()}}</span> </h2>
                                <div class="row">
                                     <!-- start single stuff post -->
                                                    @foreach($works as $work)
                                                    <div class="single_stuff wow fadeInDown">
                                                      <div class="single_stuff_img">
                                                        <a href="{{url('work') . '/' .$work->name}}"><img src="{{$work->photo}}" alt="img"></a>
                                                      </div>

                                                      <div class="single_stuff_article">
                                                            <div class="single_sarticle_inner">
                                                                @foreach($work->categories as $tag)
                                                                  <a class="stuff_category" href="{{url('category') .'/' . $tag->name}}">{{$tag->title}}</a>
                                                                @endforeach

                                                      <div class="stuff_article_inner">
                                                                 <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                                                                 <h2><a href="{{url('work') .'/' . $work->name}}">{{$work->title}}</a><span class="pull-right badge">{{$work->views}}</span></h2>
                                                      </div>


                                                             </div>

                                                      </div>


                                                    </div>
                                                    @endforeach
                                <!-- End single stuff post -->
                                <div class="stuffpost_paginatinonarea wow slideInLeft">
                                      <?php echo $works->appends(['keywords' => $keyword])->render(); ?>
                                </div>

                                </div>



            </div>

          </div>
          <!-- End left bar content -->

            <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="row">
                          <div class="rightbar_content">

                             @include('partials.social')
                             @include('partials.posts')
                             @include('partials.category')

                          </div>
                        </div>
           </div>
    </div>
      </div>
    </section>

@stop

@stop
