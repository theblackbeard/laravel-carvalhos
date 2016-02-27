  <div class="popular_categori  wow fadeInUp">
                <h2 class="limeblue_bg">Categorias</h2>
                <ul class="poplr_catgnva">
                    @foreach($categories as $category)
                    <li><a href="category/{{$category->name}}">{{$category->title}}</a></li>
                    @endforeach

                  </ul>
</div>