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
            <a class="navbar-brand" href="{{url('/')}}"><span>Carvalhos</span> Academic</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav custom_nav">
              <li class=""><a href="{{url('/')}}">Home</a></li>
              <li class=""><a href="{{url('about')}}">Sobre</a></li>
              <li class=""><a href="{{url('tavern')}}">Taverna</a></li>
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Trabalhos</a>
                <ul class="dropdown-menu" role="menu">



                  <li><a href="{{url('work')}}">Todos os Trabalhos</a></li>

                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Postagens</a>
                <ul class="dropdown-menu" role="menu">

                   <li><a href="{{url('post')}}">Todas as Postagens</a></li>
                </ul>
              </li>
              <li><a href="{{url('admin')}}">Admin</a></li>


            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <form id="searchForm">
        <input type="text" placeholder="Search...">
        <input type="submit" value="">
      </form>
      </div>
    </header>
