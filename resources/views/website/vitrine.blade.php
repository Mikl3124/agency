@extends('layouts.website')
@section('content')


        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/site-vitrine-nyleo.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Sites Vitrine</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="index-main.html">Accueil</a></li>
                              <li><a href="services.html">Développement Web</a></li>
                              <li class="active">Sites Vitrine</li>
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
                      <div class="service-details">
                          <div class="main-image image">
                            <img src="{{ asset('images') }}/developpement web.png" alt="site web à bordeaux">
                          </div>
                          <div class="text-content">
                              <h3>Développement Web</h3>
                              <p>
                                Chaque projet que nous rencontrons, petit ou grand, comporte généralement des exigences personnalisées. Nous examinerons toutes les exigences de développement et travaillerons avec vous pour élaborer un plan de développement concis. L'objectif est de vous donner la liberté de vous concentrer sur ce qui compte le plus.
                              </p>
                              <p>
                                D'un site WordPress standard à un framework Laravel personnalisé, nous pouvons presque tout faire.
                              </p>
                              <p>
                                En utilisant des frameworks comme Laravel, ou WordPress, nous pouvons tout mettre en place pour n'importe quelle idée. Aucune idée n'est trop simple ou trop complexe. Dans le cadre de ce processus, nous évaluons soigneusement toutes les exigences techniques et les traduisons en une approche et une stratégie de développement hiérarchisées et échelonnées. Les attentes, le budget et le calendrier sont tous transparents et aussi clairement définis que possible. La granularité de nos feuilles de route et de nos plans de projet vise à garantir que tout le monde est sur la même longueur d'onde à chaque étape du processus.
                              </p>
                                Nous fournissons des services de conception et de développement web à Bordeaux et nous avons tout vu. Aucun projet n'est trop grand ou trop petit pour nous, et nous serions ravis d'en savoir plus sur votre projet ou votre idée !</p>
                              <div class="featured">
                                  <div class="row clearfix">
                                      <div class="image-col col-md-6 col-sm-12">
                                          <div class="image">
                                              <img src="images/resource/featured-image-17.jpg" alt="">
                                          </div>
                                      </div>
                                      <div class="text-col col-md-6 col-sm-12">
                                          <div class="inner">
                                              <h4>planning & strategy</h4>
                                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                  industry.</p>
                                              <ul>
                                                  <li>Research beyond the business plan</li>
                                                  <li>Marketing options and rates</li>
                                                  <li>The ability to turnaround consulting</li>
                                                  <li>Customer engagement matters</li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <p>Need something changed or is there something not quite working the way you envisaged?
                                  Is your van a little old and tired and need refreshing? Lorem Ipsum is simply dummy
                                  text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                  standard dummy text ever since the 1500s, when an unknown printer took a galley of
                                  type and scrambled it to make a type specimen book. It has survived not only five
                                  centuries, but also the leap into electronic typesetting, remaining essentially
                                  unchanged.</p>
                              <p class="last">Lorem Ipsum is simply dummy text of the printing and typesetting
                                  industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                  1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                  specimen book. It has survived not only five centuries, but also the leap into
                                  electronic typesetting, remaining essentially unchanged.</p>
                          </div>
                      </div>
                  </div>

                  <!--Sidebar Side-->
                  <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                      <aside class="sidebar blog-sidebar">

                          <div class="sidebar-widget services">
                              <div class="widget-inner">
                                  <div class="sidebar-title">
                                      <h4>All Services</h4>
                                  </div>
                                  <ul>
                                      <li class="active"><a href="web-development.html">Website Development</a></li>
                                      <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                      <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                      <li><a href="seo.html">SEO & Content Writting</a></li>
                                      <li><a href="app-development.html">App Development</a></li>
                                      <li><a href="ui-designing.html">UI/UX Designing</a></li>
                                  </ul>
                              </div>
                          </div>

                          <div class="sidebar-widget call-up">
                              <div class="widget-inner">
                                  <div class="sidebar-title">
                                      <h4>need Linoor help?</h4>
                                  </div>
                                  <div class="text">Prefer speaking with a human to filling out a form? call corporate
                                      office and we will connect you with a team member who can help.</div>
                                  <div class="phone"><a href="tel:666888000"><span
                                              class="icon flaticon-call"></span>666 888 000</a></div>
                              </div>
                          </div>


                      </aside>
                  </div>

              </div>
          </div>
      </div>

      <!-- Call To Section -->
      <section class="call-to-section-two alternate">
          <div class="auto-container">
              <div class="inner clearfix">
                  <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                  <div class="link-box">
                      <a class="theme-btn btn-style-two" href="about.html">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Contact with us</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>


@endsection
