@extends('layouts.home')
@section('title')Listagem: {{$category->title}} @stop
@section('link'){{ url('post')}}@stop
@section('text')hjksahkdjhak@stop
@section('photo'){{ asset('/img/category.jpg') }}@stop
@section('autor', 'Carlos Mateus Carvalho')
@section('content')



 <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">


            <div class="row">

                        <!-- -->

                        <div class="leftbar_content">
                        <h2>{{$category->title}}</h2>

                         @foreach($category->worksIn as $work)
                            <div class="single_stuff wow fadeInDown">
                                <div class="single_stuff_img">
                                     <a href="{{url('work') . '/' . $work->name}}"><img src="{{$work->photo}}" alt="img"></a>
                                </div>
                            <div class="single_stuff_article">
                                <div class="single_sarticle_inner">

                                   <a class="stuff_category" href="{{url('work')}}">Trabalhos</a>

                                    <div class="stuff_article_inner">
                                      <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                                      <h2><a href="{{url('work') .'/' . $work->name}}">{{$work->title}}</a><span class="pull-right badge">{{$work->views}}</span></h2>

                                    </div>
                                </div>
                            </div>
                            </div>
                         @endforeach

                         @foreach($category->postsIn as $work)
                                                     <div class="single_stuff wow fadeInDown">
                                                         <div class="single_stuff_img">
                                                              <a href="{{url('post') . '/' . $work->name}}"><img src="{{$work->photo}}" alt="img"></a>
                                                         </div>
                                                     <div class="single_stuff_article">
                                                         <div class="single_sarticle_inner">
                                                         <a class="stuff_category" href="{{url('post')}}">Postagem</a>
                                                             <div class="stuff_article_inner">
                                                               <span class="stuff_date">{{ $work->mesBr($work->created_at) }} <strong>{{date('d', strtotime($work->created_at))}}</strong></span>
                                                               <h2><a href="{{url('post') .'/' . $work->name}}">{{$work->title}}</a><span class="pull-right badge">{{$work->views}}</span></h2>

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

                         <!-- -->




          </div>

          </div>
          <!-- End left bar content -->





          <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="row">
              <div class="rightbar_content">

                 @include('partials.social')
                 @include('partials.posts')
                 @include('partials.works')
                 @include('partials.category')


              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@stop
@stop