@extends('layouts.empty')
@section('title', "Página não encontrada")
@section('link', "Não Encontrada")
@section('text', "Página não encontrada, verifique o endereço se esta correto.")
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
                    <h2>Página não encontrada</h2>
                    <!-- start single stuff post -->
                    <div class="single_stuff wow fadeInDown">
                      <div class="single_stuff_img">
                        <a href="single_page.html"><img src="../img/404.png" alt="img"></a>
                      </div>
                      <div class="single_stuff_article">
                          <div class="single_sarticle_inner">
                              <a class="stuff_category" href="{{url('/')}}">Ir para página Inicial</a>
                            <div class="stuff_article_inner">
                              <span class="stuff_date">404 <strong>Não!</strong></span>
                              <h2>Opsss.. que coisa não!</h2>
                               A página requisistada não existe, por favor verifique se o endreço está correto!
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


                    @include('partials.social')

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

@stop
@stop