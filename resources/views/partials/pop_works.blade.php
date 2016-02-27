 <h2 class="yellow_bg">Populares</h2>
              <div class="middlebar_content_inner wow fadeInUp">
                <ul class="middlebar_nav">
                @foreach($worksPop as $popSite)
                  <li>
                    <a class="mbar_thubnail" href="#"><img src="{{$popSite->photo}}" alt="img"></a>
                    <a class="mbar_title" href="work/{{$popSite->name}}" title="{{$popSite->title}}"> <span style="font-size: 13px">{!! html_entity_decode(str_limit($popSite->text,20))!!}</span></a>
                  </li>
                @endforeach
                </ul>
              </div>