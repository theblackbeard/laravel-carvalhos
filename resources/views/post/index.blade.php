@extends('layouts.home')
@section('title', 'Carvalhos - Todos as Postagens')
@section('link'){{ url('post')}}@stop
@section('text', 'Todos as postagens listadas nessa pagina')
@section('photo'){{ asset('/img/post.jpg') }}@stop
@section('autor', 'Carlos Mateus Carvalho')
@section('content')

 <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
                <div class="leftbar_content">
                <h2>Todos as Postagens</h2>
                <div class="row">
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
                     <?php echo $posts->render(); ?>
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
