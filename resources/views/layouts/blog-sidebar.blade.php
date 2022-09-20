
              <!--Sidebar Side-->
              <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <div class="sidebar-widget search-box">
                        <div class="widget-inner">

                          <form action="{{ route('simple_search') }}" method="GET">
                            @csrf
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Recherche"
                                        required="">
                                    <button type="submit"><span
                                            class="icon flaticon-magnifying-glass-1"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Au hasard...</h4>
                            </div>
                            @foreach ($random_3_posts as $post)
                              <div class="post">
                                <figure class="post-thumb"><img src="{{ $post->image}}" alt="{{ $post->title}}">
                                </figure>
                                <h5 class="text"><a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">{{ $post->title }}</a></h5>
                              </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-widget archives">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Categories</h4>
                            </div>
                            <ul>
                              @foreach ($categories as $categorie)
                                <li><a href="{{ route('website.category', $categorie->slug) }}">{{ $categorie->name }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
