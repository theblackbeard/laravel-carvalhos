<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Area Admninistrativa">
    <meta name="author" content="Carlos Mateus Carvalho">
    <link rel="icon" href="../../favicon.ico">
    <title>Admin - @yield('title')</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/estilo.css')}}" rel="stylesheet" >
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/_items/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/_items/js/ie-emulation-modes-warning.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- TyneMC -->
    <script type="text/javascript" src="{{ asset('/js/editor/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            selector: "textarea",
            theme: "modern",
            height: 300,

            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak ",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor wordcount badge bprimary bbloq syntax bimagem"
            ],
            content_css: "css/content.css, css/boot/bootstrap.css, css/syntax/shCore.css, css/syntax/shCoreDefault.css",
            toolbar: "badge| link | image| bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor backcolor emoticons | undo redo | ",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });
    </script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

</head>
<body>
<!-- Meno do Topo -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin/home">Área Administrativa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/admin/home">Dashboard</a></li>
                <li><a href="painel.php?mt=conf/index">Configurações</a></li>
                <li><a href="#">Profile</a></li>
                 <li><a href="/" target="_blank">Front-End</a></li>
                <li><a href="/admin/logout">Sair</a></li>
            </ul>

        </div>
    </div>
</nav>
<!-- Fim Meno do Topo -->

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 col-md-3 sidebar">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="menumail">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#mail" aria-expanded="false" aria-controls="mail">
                                                E-mails
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="mail" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menumail">
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="/admin/mail/create">Novo Emails</a></li>
                                                <li class="list-group-item"><a href="/admin/mail">Listar E-Mails</a></li>

                                            </ul>
                                        </div>
                                    </div>
               </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#atual" aria-expanded="false" aria-controls="atual">
                                Atualizações
                            </a>
                        </h4>
                    </div>
                    <div id="atual" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item">Nova Atualização</li>
                                <li class="list-group-item">Listar Atualizações</li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu1">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#sobre" aria-expanded="false" aria-controls="sobre">
                                Sobre
                            </a>
                        </h4>
                    </div>
                    <div id="sobre" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu1">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/admin/about/create">Novo Sobre</a></li>
                                <li class="list-group-item"><a href="/admin/about">Listar Sobre</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu2">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#cattrab" aria-expanded="false" aria-controls="cattrab">
                                Categorias
                            </a>
                        </h4>
                    </div>
                    <div id="cattrab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu2">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/admin/category/create">Nova Categoria</a></li>
                                <li class="list-group-item"><a href="/admin/category">Listar Categorias</a></li>

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu4">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#trabalho" aria-expanded="false" aria-controls="trabalho">
                                Trabalhos
                            </a>
                        </h4>
                    </div>
                    <div id="trabalho" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu4">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/admin/work/create">Novo Trabalho</a></li>
                                <li class="list-group-item"><a href="/admin/work">Listar Trabalhos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu5">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#postagem" aria-expanded="false" aria-controls="postagem">
                                Postagens
                            </a>
                        </h4>
                    </div>
                    <div id="postagem" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu5">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/admin/post/create">Novo Post</a></li>
                                <li class="list-group-item"><a href="/admin/post">Listar Posts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                 <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="menu7">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#tavern" aria-expanded="false" aria-controls="tavern">
                                                Taverna
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="tavern" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu7">
                                        <div class="panel-body">
                                            <ul class="list-group">
                                                <li class="list-group-item"><a href="/admin/tavern/create">Novo Texto</a></li>
                                                <li class="list-group-item"><a href="/admin/tavern">Listar Textos</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                
                
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="menu5">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#usuario" aria-expanded="false" aria-controls="usuario">
                                Usuarios
                            </a>
                        </h4>
                    </div>
                    <div id="usuario" class="panel-collapse collapse" role="tabpanel" aria-labelledby="menu5">
                        <div class="panel-body">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/admin/user/create">Novo Usuario</a></li>
                                <li class="list-group-item"><a href="/admin/user">Listar Usuarios</a></li>

                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        
        <div class="col-sm-9 col-md-9 main">
            @include('flash::message')



            <div class="panel panel-default">
              <div class="panel-heading">@yield('title')</div>
                  <div class="panel-body">
                     @yield('content')
                 </div>
                 <div class="panel-footer">@yield('options')</div>
               </div>
          </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

@yield('footer')
</body>
</html>