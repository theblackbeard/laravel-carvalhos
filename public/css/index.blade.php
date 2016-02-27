 @extends('layouts.home')
@section('title')Carlos M Carvalho - Bem Vindos@stop
@section('link'){{ url('/')}}@stop
@section('text'){{ strip_tags(str_limit($about->text, 170))}}@stop
@section('photo'){{ asset('/img/index.jpg') }}@stop;
@section('autor', 'Carlos Mateus Carvalho')
 @section('content')

 <!-- ==================start content body section=============== -->
    <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->
          <div class=" col-sm-12 col-md-6 col-lg-6">
            <div class="row">
              <div class="leftbar_content">
                <h2>Últimos Trabalhos  </h2>
                @foreach($works as $work)

                <!-- start single stuff post -->
                <div class="single_stuff">
                  <div class="single_stuff_img">
                    <a href="work/{{$work->name}}"><img src="{{$work->photo}}" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                        @foreach($work->categories as $tag)
                          <a class="stuff_category" href="category/{{$tag->name}}">{{$tag->title}}</a>
                        @endforeach
                        <span class="pull-right badge">{{$work->views}}</span>
                        <div class="stuff_article_inner">
                         <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                          <h2><a href="work/{{$work->name}}"> {!! html_entity_decode(str_limit($work->title, 30))!!}</a></h2>
                         {!! html_entity_decode(str_limit($work->text, 150))!!}
                        </div>
                      </div>
                  </div>
                </div>
                <!-- End single stuff post -->
                @endforeach


                <div class="stuffpost_paginatinonarea wow slideInLeft">
                 <?php echo $works->render(); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- End left bar content -->

          <!-- start middle bar content -->
          <div class="col-sm-6 col-md-2 col-lg-2">
           <div class="row">
              <div class="middlebar_content">
              <h2 class="yellow_bg">Populares</h2>
              <div class="middlebar_content_inner wow fadeInUp">
                <ul class="middlebar_nav">
                @foreach($worksPop as $popSite)
                  <li>
                    <a class="mbar_thubnail" href="#"><img src="{{$popSite->photo}}" alt="img"></a>
                    <a class="mbar_title" href="work/{{$popSite->name}}"> {!! html_entity_decode(str_limit($popSite->text, 20))!!}</a>
                  </li>
                @endforeach
                </ul>
              </div>
              <div class="popular_categori  wow fadeInUp">
                <h2 class="limeblue_bg">Categorias</h2>
                <ul class="poplr_catgnva">
                    @foreach($categories as $category)
                    <li><a href="category/{{$category->name}}">{{$category->title}}</a></li>
                    @endforeach

                  </ul>
              </div>
            </div>
           </div>
          </div>
          <!-- End middle bar content -->

          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="row">
              <div class="rightbar_content">
              <!-- start featured post -->
                <div class="single_blog_sidebar wow fadeInUp">
                <h2>Últimas Postagens</h2>
                <ul class="featured_nav">
                @foreach($posts as $post)
                  <li>
                    <a class="featured_img" href="post/{{$post->name}}"><img src="{{$post->photo}}" alt="img"></a>
                    <div class="featured_title">
                      <a class="" href="post/{{$post->name}}"> {!! html_entity_decode(str_limit($post->text, 200))!!}</a>
                    </div>
                  </li>
                 @endforeach
                </ul>
                </div>
                <!-- End featured post -->


               @include('partials.posts')
               @include('partials.social')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================End content body section=============== -->

@stop

@stop