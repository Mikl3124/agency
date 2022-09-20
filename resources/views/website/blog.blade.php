@extends('layouts.website')
@section('content')

<div class="page-wrapper">

  <!-- Banner Section -->
  <section class="page-banner">
      <div class="image-layer" style="background-image:url({{ asset('images') }}/lyneo-blog.png)" id="lyneo-blog"></div>
      <div class="shape-1"></div>
      <div class="shape-2"></div>
      <div class="banner-inner">
          <div class="auto-container">
              <div class="inner-container clearfix">
                  <h1>Le Blog</h1>
                  <div class="page-nav">
                      <ul class="bread-crumb clearfix">
                          <li><a href="{{ route('home')}}">Accueil</a></li>
                          <li class="active">Blog</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--End Banner Section -->

  <div class="sidebar-page-container">
      <div class="auto-container">
          <div class="row clearfix">
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
              @if ($posts->count() == 0)
              <div class="text-center">
                <div class="d-inline-flex">
                  <p>Désolé, n'y a aucun article correspondant à votre recherche</p>
                </div>
                <div class="link-box">
                  <a class="theme-btn btn-style-one" href="{{ route('website.blog') }}">
                      <i class="btn-curve"></i>
                      <span class="btn-title">Revenir aux articles</span>
                  </a>
                </div>
              </div>
              @else
               <!--Content Side-->
               <div class="blog-posts">
                @foreach ($posts as $post)
                  <!--News Block-->
                  <div class="news-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="{{ route('website.post',[$post->category->slug, $post->slug])}}"><img src="{{ $post->image }}" alt="{{ $post->title }}"</a>
                        </div>
                        <div class="lower-box">
                            <div class="post-meta">
                                <ul class="clearfix">
                                    <li><span class="far fa-clock"></span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</li>
                                </ul>
                            </div>
                            <h4><a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">{{ $post->title }}</a>
                            </h4>
                            <div class="text">{{ $post->meta }} ...</div>
                            <div class="link-box"><a class="theme-btn" href="{{ route('website.post',[$post->category->slug, $post->slug])}}">Voir l'article</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
              </div>
              {{ $posts->withQueryString()->onEachSide(0)->links() }}

              @endif
            </div>

            @include('layouts.blog-sidebar')

          </div>
      </div>
  </div>


@endsection
