<!-- start Popular Posts -->
<div class="single_blog_sidebar wow fadeInUp">
  <h2>Postagens Populares</h2>
  <ul class="middlebar_nav wow">
     @foreach($postsPop as $post)
       <li>
        <a href="{{$post->photo}}" class="mbar_thubnail" target="_blank"><img alt="img" src="{{$post->photo}}"></a>
        <a href="{{url('post') . '/' . $post->name}}" class="mbar_title">{!! html_entity_decode(str_limit($post->title, 25))!!}</a>
       </li>
     @endforeach
  </ul>
</div>
<!-- End Popular Posts -->

