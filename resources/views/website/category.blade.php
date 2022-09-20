@extends('layouts.website')
@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/blog-category.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>{{ $category->name }}</h1>
                      <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('website.blog') }}">Blog</a></li>
                            <li class="active">{{ $category->name }}</li>
                        </ul>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--End Banner Section -->

      <!-- News Section -->
      <section class="news-section">
          <div class="auto-container">

              <div class="row clearfix">
                @foreach ($posts as $post)
                  <!--News Block-->
                  <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                  data-wow-duration="1500ms">
                    <div class="inner-box">
                      <div class="image-box">
                          <a href="{{ route('website.post',[$post->category->slug, $post->slug])}}"><img src="{{ $post->image }}" alt="{{ $post->title }}"></a>
                      </div>
                      <div class="lower-box">
                          <div class="post-meta">
                              <ul class="clearfix">
                                  <li><span class="far fa-clock"></span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</li>
                              </ul>
                          </div>
                          <h5><a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">basic rules of running web agency business</a></h5>
                          <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                          <div class="link-box"><a class="theme-btn" href="{{ route('website.post',[$post->category->slug, $post->slug])}}"><span
                                      class="flaticon-next-1"></span></a></div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="d-flex justify-content-center mt-5">
                {{ $posts->withQueryString()->onEachSide(0)->links() }}
              </div>


          </div>
      </section>


@endsection

