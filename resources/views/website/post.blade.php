@extends('layouts.website')
@section('content')

<!-- Banner Section -->
<section class="page-banner">
  <div class="image-layer" style="background-image:url({{ $post->image }})"></div>
  <div class="shape-1"></div>
  <div class="shape-2"></div>
  <div class="banner-inner">
      <div class="auto-container">
          <div class="inner-container clearfix">
              <h1>{{ $post->title }}</h1>
              <div class="page-nav">
                  <ul class="bread-crumb clearfix">
                      <li><a href="{{ route('home') }}">Accueil</a></li>
                      <li><a href="{{ route('website.blog') }}">Blog</a></li>
                      <li><a href="{{ route('website.category', $post->category->slug) }}">{{ $post->category->name }}</a></li>
                      <li class="active">Article</li>
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
          <!--Content Side-->
          <div class="content-side col-lg-8 col-md-12 col-sm-12">
              <div class="blog-details">
                  <!--News Block-->
                  <div class="post-details">
                      <div class="inner-box">
                          <div class="image-box">
                              <a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">><img src="{{ $post->image }}" alt="{{ $post->title }}"></a>
                          </div>
                          <div class="lower-box">
                              <div class="post-meta">
                                  <ul class="clearfix">
                                      <li><span class="far fa-clock"></span>{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</li>
                                  </ul>
                              </div>
                              <h4>{{ $post->title }}</h4>
                              <div class="text">
                                {!! $post->description !!}
                              </div>
                          </div>
                      </div>
                      <div class="info-row clearfix">
                          <div class="tag-info">
                            <strong>Categorie :</strong> <a href="{{ route('website.category', $post->category->slug ) }}">{{ $post->category->name }}</a>
                          </div>
                      </div>
                  </div>
                  <div class="post-control-two">
                      <div class="row clearfix">
                        @foreach ($random_2_posts as $post)
                          <div class="control-col col-md-6 col-sm-12">
                            <div class="control-inner">
                                <h4><a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">{{ $post->title }}</a></h4>
                                <a href="{{ route('website.post',[$post->category->slug, $post->slug])}}" class="over-link"></a>
                            </div>
                          </div>
                        @endforeach
                      </div>
                  </div>
                </div>
          </div>

          @include('layouts.blog-sidebar')
      </div>
  </div>
</div>

@endsection
