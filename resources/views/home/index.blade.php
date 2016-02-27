@extends('layouts.home')
@section('title', 'Carlos M Carvalho - Bem Vindos')
@section('link'){{ url('/')}}@stop
@section('text', 'Obrigado pela visita, aqui você encontrar algumas postagens e trabalhos feitos durante minha vida academica.')
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

             @include('partials.pop_works')
             @include('partials.category_list')

            </div>
           </div>
          </div>
          <!-- End middle bar content -->

          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="row">
              <div class="rightbar_content">
              <!-- Email -->
              @include('partials.mailmark')
               <!-- Lista Conexões -->
               @include('partials.social')
               <!-- Lista Ultimas Postagens -->
               @include('partials.last_posts')
               <!-- Lista Postagens Populares -->
               @include('partials.posts')

              </div>
            </div>
          </div>

        </div>
      </div>
</section>
@stop

@stop

