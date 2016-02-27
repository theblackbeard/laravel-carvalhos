<header id="header">
      <div class="container">
         <!-- Static navbar -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><span>Carvalhos</span> DevRoad</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav custom_nav">
              <li class=""><a href="{{url('/')}}">Home</a></li>
              <li class=""><a href="{{url('about')}}">Sobre</a></li>
              <li class=""><a href="{{url('tavern')}}">Taverna</a></li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Trabalhos</a>
                <ul class="dropdown-menu" role="menu">
                @foreach($worksPop as $work)
                  <li class="dropdown">
                    <a class="dropdown-toggle"  href="{{url('work') . '/' . $work->name}}">
                    {{$work->title}}</a>

                     <!--  <ul class="dropdown-menu" role="menu">
                        <li>Two Columns</li>
                        <li>Three Columns</li>
                        <li>Four Columns</li>
                      </ul>   -->
                  </li>
                  @endforeach


                  <li><a href="{{url('work')}}"><strong><span style="text-transform: uppercase">Todos os Trabalhos</span></strong></a></li>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Postagens</a>
                <ul class="dropdown-menu" role="menu">
                  @foreach($postsPop as $post)
                  <li><a href="{{url('post').'/' . $post->name}}">{{$post->title}}</a></li>
                  @endforeach
                   <li><a href="{{url('post')}}"><strong><span style="text-transform: uppercase">Todas as Postagens</span></strong></a></li>
                </ul>
              </li>
              <li><a href="{{url('admin')}}">Admin</a></li>


            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

           <form id="searchForm" action="{{ url('q')}}" method="get">
             <input type="text" placeholder="Buscar..." name="keywords">
             <input type="submit" value="">
           </form>

      </div>
    </header>
