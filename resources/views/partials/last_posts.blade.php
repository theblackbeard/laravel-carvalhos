 <div class="single_blog_sidebar wow fadeInUp">
    <h2>Últimas Postagens</h2>
    <ul class="featured_nav">
         @foreach($posts as $post)
                  <li>
                    <a class="featured_img" href="post/{{$post->name}}"><img src="{{$post->photo}}" alt="img"></a>
                    <div class="featured_title">
                      <a class="" href="post/{{$post->name}}">{!! html_entity_decode(str_limit($post->text, 100))!!}</a>
                    </div>
                  </li>
         @endforeach
    </ul>
</div>