@extends('layouts.home')
@section('title', 'Login no Sistema')
@section('link'){{ url('admin')}}@stop
@section('text', 'Administrativo do sistema')
@section('photo'){{ asset('/img/admin.jpg') }}@stop
@section('autor', 'Carlos Mateus Carvalho')
@section('content')
<section id="contentbody">
      <div class="container">
        <div class="row">
        <!-- start left bar content -->

          <div class=" col-sm-12 col-md-8 col-lg-8">
            <div class="row">
              <div class="leftbar_content">
                <h2>Administrativo</h2>
                <!-- start single stuff post -->
                <div class="single_stuff wow fadeInDown">
                  <div class="single_stuff_img">
                    <a href="single_page.html"><img src="http://s26.postimg.org/5yvkc0ozt/topo.jpg" alt="img"></a>
                  </div>
                  <div class="single_stuff_article">
                      <div class="single_sarticle_inner">
                          <a class="stuff_category" href="{{url('admin')}}">Admin</a>
                        <div class="stuff_article_inner">
                          <span class="stuff_date">Jul <strong>21</strong></span>
                          <h2>Coloque suas credenciais</h2>

                        </div>


                          <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                                              						<input type="hidden" name="_token" value="{{ csrf_token() }}">

                                              						<div class="form-group">
                                              							<label class="col-md-4 control-label">Usuario</label>
                                              							<div class="col-md-6">
                                              								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                              							</div>
                                              						</div>

                                              						<div class="form-group">
                                              							<label class="col-md-4 control-label">Senha</label>
                                              							<div class="col-md-6">
                                              								<input type="password" class="form-control" name="password">
                                              							</div>
                                              						</div>

                                              						<div class="form-group">
                                              							<div class="col-md-6 col-md-offset-4">
                                              								<div class="checkbox">
                                              									<label>
                                              										<input type="checkbox" name="remember"> Lembrar
                                              									</label>
                                              								</div>
                                              							</div>
                                              						</div>

                                              						<div class="form-group">
                                              							<div class="col-md-6 col-md-offset-4">
                                              								<button type="submit" class="btn btn-primary">Entrar</button>


                                              							</div>
                                              						</div>
                                              					</form>

                                              					@include('errors.list')
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
                @include('partials.works')
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
