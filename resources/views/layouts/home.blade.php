<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.seo')
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- for fontawesome icon css file -->
    <link href="{{ asset('/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{ asset('/css/animate.css')}}">
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <!-- main site css file -->
    <link href="{{ asset('/css/structure.css')}}" rel="stylesheet">

     <link href="{{asset('/css/syntax/shCore.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('/css/syntax/shCoreDefault.css')}}" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shCore.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushCSharp.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushJava.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushCss.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushPhp.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushJScript.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushXml.js')}}"></script>
        <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushSql.js')}}"></script>
            <script type="text/javascript" src="{{asset('/js/syntax/scripts/shBrushLua.js')}}"></script>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

   @include('partials.menu')
   @yield('content')
   @include('partials.footer')

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.4";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-553fe9040c7236c6" async="async"></script>


<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/wow.min.js')}}"></script>
<script type="text/javascript">
    SyntaxHighlighter.config.stripBrs = true;
    SyntaxHighlighter.all()
</script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61674123-1', 'auto');
  ga('send', 'pageview');

</script>

</body>


</html>