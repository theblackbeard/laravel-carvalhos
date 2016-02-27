<!-- start Popular Posts -->
<div class="single_blog_sidebar wow fadeInUp">
  <h2>Trabalhos Populares</h2>
  <ul class="middlebar_nav wow">
    @foreach($worksPop as $work)
      <li>
         <a href="{{$work->photo}}" class="mbar_thubnail" target="_blank"><img alt="img" src="{{$work->photo}}"></a>
         <a href="{{url('work') . '/' . $work->name}}" class="mbar_title">{!! html_entity_decode(str_limit($work->text, 40))!!}</a>
      </li>
    @endforeach
  </ul>
 </div>
 <!-- End Popular Posts -->

