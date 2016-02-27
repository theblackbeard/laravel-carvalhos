 <!-- start Popular Posts -->
                <div class="single_blog_sidebar wow fadeInUp">
                <h2>Categorias</h2>
                <ul class="poplr_tagnav">

                    @foreach($categories as $category)
                    @if($category->worksIn()->count() != 0 || $category->postsIn()->count() != 0)
                  <li><a href="{{url('category') .'/' . $category->name}}">{{$category->title}}</a></li>
                    @endif
                    @endforeach

                </ul>
                </div>
                <!-- End Popular Posts -->