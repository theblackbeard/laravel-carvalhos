@extends('layouts.home')
@section('title', 'Cadastro de E-mail')
@section('link'){{ url('mail')}}@stop
@section('text', 'Cadastrastro do Seu Email no site Carvalhos.com')
@section('photo'){{ asset('/img/about.jpg') }}@stop;
@section('autor', 'Carlos Mateus Carvalho')
@section('content')

 <section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
            <div class="row">
              <div class="leftbar_content">
                <h2>Cadastrando seu E-Mail</h2>
                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="single_page.html"><img src="http://s26.postimg.org/5yvkc0ozt/topo.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="{{url('/')}}">Pagina Principal</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Jul <strong>29</strong></span>
                          <h2>{{$msg}}</h2>
                          <p><a href="{{url('/')}}">Voltar a Página Inicial</a>
                          <br>
                          @include ('errors/list')

                          </p>
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
                  
                @include('partials.social')
                @include('partials.works')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==================End content body section=============== -->

@stop

@stop
