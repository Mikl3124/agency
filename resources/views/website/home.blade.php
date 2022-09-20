@extends('layouts.website')
@section('content')

  <!-- Banner Section -->
  <section class="banner-section banner-one">

      <div class="left-based-text">
          <div class="base-inner">
              <div class="hours">
                  <ul class="clearfix">
                      <li><span>Lundi - Vendredi</span></li>
                      <li><span>9h - 18h</span></li>
                  </ul>
              </div>
          </div>
      </div>

      <div class="banner-carousel owl-theme owl-carousel">
          <!-- Slide Item -->
          <div class="slide-item">
              <div class="image-layer" style="background-image: url({{ asset('images') }}/lyneo-slider1.svg);"></div>
              <div class="left-top-line"></div>
              <div class="right-bottom-curve"></div>
              <div class="right-top-curve"></div>
              <div class="auto-container">
                  <div class="content-box">
                      <div class="content">
                          <div class="inner">
                              <div class="sub-title">L'agence web qui libère votre plein potentiel</div>
                              <h1>Agence Web <br>à Bordeaux</h1>
                              <div class="link-box">
                                  <a class="theme-btn btn-style-one" href="about.html">
                                      <i class="btn-curve"></i>
                                      <span class="btn-title">Nous découvrir</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Slide Item -->
          <div class="slide-item">
              <div class="image-layer" style="background-image: url({{ asset('images') }}/lyneo-slider2.svg);"></div>
              <div class="left-top-line"></div>
              <div class="right-bottom-curve"></div>
              <div class="right-top-curve"></div>
              <div class="auto-container">
                  <div class="content-box">
                      <div class="content">
                          <div class="inner">
                              <div class="sub-title">L'agence SEO qui libère votre plein potentiel/div>
                              <h1>Agence SEO <br>à Bordeaux</h1>
                              <div class="link-box">
                                  <a class="theme-btn btn-style-one" href="about.html">
                                      <i class="btn-curve"></i>
                                      <span class="btn-title">Nous découvrir</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </section>
  <!--End Banner Section -->

  <!--Services Section-->
  <section class="services-section">
      <div class="auto-container">
          <div class="row clearfix">
              <!--Title Block-->
              <div class="title-block col-xl-8 col-lg-12 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="sec-title">
                          <h2>Faites décoller <br>Vos Ventes<span class="dot">.</span></h2>
                          <div class="lower-text">Lyneo Création est une agence de conception de sites Web, et de référencement à Bordeaux qui vous aide à être visible en ligne, afin d'attirer plus de clients.
                            <br>
                            Nous vous aidons à atteindre vos objectifs, grâce à notre expérience, notre savoir-faire et notre engagement, tout en respectant votre identité visuelle.                         </div>
                        </div>
                  </div>
              </div>
              <div class="image-column align-self-center text-center col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="image-block wow fadeInUp " data-wow-delay="300ms" data-wow-duration="1500ms"><img
                            src="{{ asset('images') }}/Strategie Digitale Bordeaux Lyneo.webp" alt="referencement web bordeaux" width="200" height="200"></div>
                </div>
            </div>
            <div class="row clearfix">
              <!--Service Block-->
              <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                  data-wow-duration="1500ms">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-responsive"></span></div>
                      <h6 class="mb-4"><a href="web-development.html">Développement<br>Web</a></h6>
                      <p class="text-card">Vous avez besoin d'être présent sur internet ? Notre agence web de Bordeaux vous accompagne dans la création de votre site internet, et vous conseille tout au long de votre projet pour garantir les meilleurs résultats.</p>
                  </div>
              </div>
              <!--Service Block-->
              <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
              data-wow-delay="300ms" data-wow-duration="1500ms">
              <div class="inner-box">
                  <div class="bottom-curve"></div>
                  <div class="icon-box"><span class="flaticon-development"></span></div>
                  <h6  class="mb-4"><a href="seo.html">Référencement Naturel <br>Seo</a></h6>
                  <p class="text-card">Le référencement naturel est l'un des principaux leviers de croissance pour une entreprise sur internet. Nous sommes spécialisés dans le SEO à Bordeaux. Nous vous accompagnons pour améliorer votre visibilité et positionner votre site sur le web.</p>
                </div>
              </div>
              <div class="service-block col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                  data-wow-duration="1500ms">
                  <div class="inner-box">
                      <div class="bottom-curve"></div>
                      <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                      <h6 class="mb-4"><a href="digital-marketing.html">Publicité <br>En Ligne</a></h6>
                      <p class="text-card">Notre agence web de Bordeaux vous propose des outils digitaux performants et ciblés, adaptés à vos objectifs et votre budget : emailing, réseaux  sociaux, inbound marketing, campagnes publicitaires (SEA).</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!--About Section-->
  <section class="about-section about-section__dark">
      <div class="auto-container">
          <div class="row clearfix">
              <!--Image Column-->
              <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img
                              src="{{ asset('images') }}/agence-web-bordeaux.svg" alt="agence web Bordeaux"></div>
                      {{-- <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms"><img
                              src="{{ asset('images') }}/resource/featured-image-2.jpeg" alt="agence seo Bordeaux"></div> --}}
                  </div>
              </div>
              <!--Text Column-->
              <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="sec-title">
                          <h2>Lyneo<br>votre agence web à Bordeaux<span class="dot">.</span></h2>
                          <div class="lower-text">Nous nous engageons à fournir à nos clients un service exceptionnel en toutes circonstances.  afin de répondre parfaitement à  leurs besoins et attentes</div>
                      </div>
                      <div class="text">
                          <p>Notre équipe de professionnels à Bordeaux est à votre disposition pour vous accompagner dans la définition de votre stratégie digitale, la mise en place et le suivi de vos campagnes publicitaires, ainsi que pour toute prestation connexe (SEO, Social Media, webdesign…).</p>
                      </div>
                      <div class="link-box">
                          <a class="theme-btn btn-style-one" href="about.html">
                              <i class="btn-curve"></i>
                              <span class="btn-title">Nous découvrir</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--We DO Section-->
  <section class="we-do-section we-do-section__dark">
      <div class="auto-container">
          <div class="row clearfix">
              <!--Left Column-->
              <div class="left-col col-lg-6 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="sec-title">
                          <h2>Nous vous accompagnons vers<br>votre réussite<span class="dot">.</span></h2>
                      </div>
                      <div class="featured-block clearfix">
                          <div class="image"><img src="{{ asset('images') }}/shopping-cart.svg" alt="Agence web Bordeaux"></div>
                          <div class="text">49 millions de Français, soit 92% des internautes en France ont acheté sur internet cette année </div>
                      </div>
                      <div class="progress-box">
                          <div class="bar-title">Internautes ayant acheter sur internet cette année</div>
                          <div class="bar">
                              <div class="bar-inner count-bar" data-percent="92%">
                                  <div class="count-box">
                                      <span class="count-text" data-stop="92" data-speed="1500">0</span>%
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Right Column-->
              <div class="right-col col-lg-6 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="faq-box">
                          <ul class="accordion-box accordion-box__dark clearfix">
                              <!--Block-->
                              <li class="accordion block active-block">
                                  <div class="acc-btn active"><span class="count">1.</span> Une agence digitale à Bordeaux qui vous comprend</div>
                                  <div class="acc-content current">
                                      <div class="content">
                                          <div class="text">Notre équipe est composée de professionnels expérimentés en communication digitale et en webmarketing. Nous sommes là pour vous aider à bâtir votre projet sur le web et à atteindre vos objectifs.</div>
                                      </div>
                                  </div>
                              </li>

                              <!--Block-->
                              <li class="accordion block">
                                  <div class="acc-btn"><span class="count">2.</span> Des services webmarketing complets</div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">Notre agence Lyneo accompagne les entreprises bordelaises dans leur stratégie web. Nous mettons à votre disposition notre expertise en matière de référencement naturel (SEO), de Google Adwords, de création de sites internet et de webdesign. </div>
                                      </div>
                                  </div>
                              </li>

                              <!--Block-->
                              <li class="accordion block">
                                  <div class="acc-btn"><span class="count">3.</span> Une agence Web tournée vers la créativité</div>
                                  <div class="acc-content">
                                      <div class="content">
                                          <div class="text">Bordeaux est une ville dynamique et cosmopolite, en constante évolution. Notre agence web s'inspire de cette dynamique pour créer des sites web uniques et innovants.Nous travaillons avec les dernières technologies et suivons les dernières tendances du web design pour offrir à nos clients un service de qualité.</div>
                                      </div>
                                  </div>
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Gallery Section -->
  <section class="gallery-section gallery-section__dark">
      <div class="auto-container">
          <!--MixitUp Galery-->
          <div class="mixitup-gallery">
              <div class="upper-row clearfix">
                  <div class="sec-title">
                      <h2>Quelques réalisations<span class="dot">.</span></h2>
                  </div>
                  <!--Filter-->
                  {{-- <div class="filters clearfix">
                      <ul class="filter-tabs filter-btns clearfix">
                          <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                          <li class="filter" data-role="button" data-filter=".branding">Branding<sup>[3]</sup>
                          </li>
                          <li class="filter" data-role="button" data-filter=".illustration">
                              illustration<sup>[3]</sup></li>
                          <li class="filter" data-role="button" data-filter=".photography">
                              Photography<sup>[3]</sup></li>
                          <li class="filter" data-role="button" data-filter=".web-design">Web Design<sup>[4]</sup>
                          </li>
                      </ul>
                  </div> --}}
              </div>
              <div class="filter-list row">
                  <!-- Gallery Item -->
                  <div class="gallery-item mix all web-design col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://iziplans.com">
                            <figure class="image"><img src="{{ asset('images') }}/capture-iziplans.jpeg" alt="iziplans"></figure>
                          </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site e-commerce</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">iziplans</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Gallery Item -->
                  <div class="gallery-item mix all photography web-design col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://nyleo.fr">
                            <figure class="image"><img src="{{ asset('images') }}/capture-nyleo.jpeg" alt="Nyleo Conception"></figure>
                          </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site vitrine</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">Nyleo Conception</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Gallery Item -->
                  <div class="gallery-item mix all branding web-design col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://psychofripes.fr/">
                            <figure class="image"><img src="{{ asset('images') }}/capture-psychofripes.jpeg" alt="psychofripes"></figure>
                          </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site e-commerce</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">Psychofripes</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Gallery Item -->
                  <div class="gallery-item mix all branding illustration col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://distri-nails.fr/">
                            <figure class="image"><img src="{{ asset('images') }}/capture-distri-nails.jpeg" alt="distri-nails"></figure>
                          </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site e-commerce</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">Distri-nails</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Gallery Item -->
                  <div
                      class="gallery-item mix all branding illustration photography web-design col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://risetraining.fr/">
                            <figure class="image"><img src="{{ asset('images') }}/capture-rise-training.png" alt="rise-training"></figure>
                          </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site Vitrine</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">Rise-training</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Gallery Item -->
                  <div class="gallery-item mix all illustration photography col-lg-4 col-md-6 col-sm-12">
                      <div class="inner-box">
                          <a href="https://matozz.com">
                            <figure class="image"><img src="{{ asset('images') }}/capture-matozz.jpeg" alt="matozz"></figure>
                           </a>
                          <div class="cap-box">
                              <div class="cap-inner">
                                  <div class="cat"><span>Site e-commerce</span></div>
                                  <div class="title">
                                      <h5 class="title-site-card">Matozz</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>
  </section>

  <!-- Funfacts Section -->
  <section class="facts-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
      <!-- <div class="image-layer" style="background-image: url({{ asset('images') }}/background/image-1.jpg);"></div> -->
      <img src="{{ asset('images') }}/lyneo-agence-web.svg" alt="agence web lyneo" class="jarallax-img">
      <div class="auto-container">
          <div class="inner-container">
              <!-- Fact Counter -->
              <div class="fact-counter">
                  <div class="row clearfix">

                      <!--Column-->
                      <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                          <div class="inner">
                              <div class="content">
                                  <div class="count-outer count-box">
                                      <span class="count-text" data-speed="4000" data-stop="143">0</span>
                                  </div>
                                  <div class="counter-title">Projets réalisés</div>
                              </div>
                          </div>
                      </div>

                      <!--Column-->
                      <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                          <div class="inner">
                              <div class="content">
                                  <div class="count-outer count-box alternate">
                                      <span class="count-text" data-speed="3000" data-stop="4">0</span>
                                  </div>
                                  <div class="counter-title">Années d'experience</div>
                              </div>
                          </div>
                      </div>

                      <!--Column-->
                      <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                          <div class="inner">
                              <div class="content">
                                  <div class="count-outer count-box">
                                      <span class="count-text" data-speed="3000" data-stop="62681">0</span>
                                  </div>
                                  <div class="counter-title">Lignes de code (à peu près 😊)</div>
                              </div>
                          </div>
                      </div>

                      <!--Column-->
                      <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                          <div class="inner">
                              <div class="content">
                                  <div class="count-outer count-box">
                                      <span class="count-text" data-speed="4000" data-stop="4.9">0</span><span> /5</span>
                                  </div>
                                  <div class="counter-title">Note Google Reviews</div>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>

          </div>
      </div>
  </section>
  <!-- End Funfacts Section -->

  <!-- Trusted Section -->
  <section class="trusted-section trusted-section__dark">
      <div class="auto-container">
          <div class="outer-container">
              <div class="row clearfix">
                  <div class="left-col col-xl-5 col-lg-6 col-md-12 col-sm-12">
                      <div class="inner">
                          <div class="col-header">
                              <div class="header-inner">
                                  <span>Pourquoi travailler avec nous?</span>
                              </div>
                          </div>
                          <div class="features">
                            <div class="faq-box">
                              <ul class="accordion-box accordion-box__dark clearfix">
                                  <!--Block-->
                                  <li class="accordion block">
                                    <div class="acc-btn"><span class="count">1.</span> Notre culture du résultat</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">La culture du résultat est ancrée dans toutes les décisions que nous prenons et oriente nos actions au quotidien. Cela se traduit par une approche méthodique et un suivi continu de vos campagnes, ainsi qu’une adaptation en fonction des résultats obtenus. Notre objectif est de vous accompagner afin que votre projet web soit un succès sur le long terme !</div>
                                        </div>
                                    </div>
                                  </li>
                                  <!--Block-->
                                  <li class="accordion block">
                                      <div class="acc-btn"><span class="count">2.</span> Notre créativité</div>
                                      <div class="acc-content">
                                          <div class="content">
                                              <div class="text">Nous mettons un point d'honneur à offrir un service unique en son genre, axé sur l'inventivité et la créativité. Nous nous engageons à 100% pour mener à bien notre mission et assurer la satisfaction de nos clients. Parce que notre professionnalisme est au-dessus de tout, nous sommes toujours prêts à partager nos idées et à trouver des solutions novatrices. Ensemble, nous pouvons réussir les projets les plus ambitieux !</div>
                                          </div>
                                      </div>
                                  </li>

                                  <!--Block-->
                                  <li class="accordion block">
                                      <div class="acc-btn"><span class="count">3.</span> Notre transparence</div>
                                      <div class="acc-content">
                                          <div class="content">
                                              <div class="text">La transparence est une valeur fondamentale chez Lyneo. Nous mettons un point d'honneur à réaliser 100 % des prestations client en interne, afin que vous sachiez exactement ce que nous faisons pour vous. De plus, nous anticipons les tendances et vous apportons un appui à la réflexion, afin que vos stratégies digitales soient au top !</div>
                                          </div>
                                      </div>
                                  </li>
                                   <!--Block-->
                                   <li class="accordion block">
                                    <div class="acc-btn"><span class="count">4.</span> Notre expérience</div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Grâce à notre solide expérience digitale, nous pouvons vous accompagner à toutes les étapes de la création d'une solution web efficace, en passant par la mise en place d'une stratégie e-commerce et social media pertinente. Avec nous, vous êtes entre de bonnes mains !</div>
                                        </div>
                                    </div>
                                </li>

                              </ul>
                          </div>
                          </div>
                      </div>
                  </div>
                  <div class="right-col col-xl-7 col-lg-6 col-md-12 col-sm-12">
                      <div class="inner">
                          <div class="sec-title">
                              <h2>Plus de 120 clients nous<br>ont déjà fait confiance<span class="dot">.</span></h2>
                              <div class="lower-text">Nous sommes fiers de pouvoir compter sur le soutien et la confiance de nos clients.  Ils ont tous choisi de travailler avec nous car ils savent qu'ils peuvent toujours compter sur notre expertise et notre professionnalisme.</div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </section>

  <section class="testimonials-four">
    <div class="auto-container">
      <div class="sec-title centered">
        <h2>Témoignages<span class="dot">.</span></h2>
      </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="testimonials-four-card">
                    <div class="testimonials-four-card__content">
                        <p>"Le développement de notre site Web et la mise en place du digital marketing ont été mis en œuvre par un accompagnement très professionnel. Conseils pertinents, attention personnalisée et réactivité."</p>
                        <div class="name">Romain Catala</div>
                        <div class="designation">iziplans</div>
                    </div><!-- /.testimonials-four-card__content -->
                    <div class="image">
                        <img src="images/romain-catala.jpeg" alt="temoignage romain catala">
                    </div>
                </div><!-- /.testimonials-four-card -->
            </div><!-- /.col-md-6 col-lg-4 -->

            <div class="col-md-6 col-lg-4">
                <div class="testimonials-four-card">
                    <div class="testimonials-four-card__content">
                        <p>"Nous avons apprécié votre professionnalisme et la qualité du service proposé. Votre agence est à l'écoute de ses clients et sait répondre aux attentes. Nous avons été très satisfaits de votre travail pour notre référencement."</p>
                        <div class="name">Leo Archimbault</div>
                        <div class="designation">permis-construire.com</div>
                    </div><!-- /.testimonials-four-card__content -->
                    <div class="image">
                        <img src="images/leo-archimbault.jpeg" alt="temoignage leo archimbault">
                    </div>
                </div><!-- /.testimonials-four-card -->
            </div><!-- /.col-md-6 col-lg-4 -->

            <div class="col-md-6 col-lg-4">
                <div class="testimonials-four-card">
                    <div class="testimonials-four-card__content">
                        <p>“Mon projet de boutique en ligne a parfaitement été réalisé par Lyneo Création. Grâce à leurs précieux conseils, j'ai gagné beaucoup de temps en évitant, des erreurs de débutant. Merci"
                         </p>
                        <div class="name">Amélie Pelland</div>
                        <div class="designation">Body Scult</div>
                    </div><!-- /.testimonials-four-card__content -->
                    <div class="image">
                        <img src="images/amelie-pelland.jpeg" alt="temoignage amelie pelland">
                    </div>
                </div><!-- /.testimonials-four-card -->
            </div><!-- /.col-md-6 col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.auto-container -->
</section>
  <!-- Parallax Section -->
  <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
      <!-- <div class="image-layer" style="background-image: url({{ asset('images') }}/background/image-2.jpg);"></div> -->
      <img src="" alt="" class="jarallax-img">
      <div class="auto-container">
          <div class="content-box">
              <div class="icon-box"><span class="flaticon-app-development"></span></div>
              <h2>Le marketing est une guerre de perceptions, <span>et non de produits.</span></h2>
          </div>
      </div>
  </section>
  <!-- End Funfacts Section -->

  <!--Sponsors Section-->
  <section class="sponsors-section sponsors-section__one-page">
      <div class="sponsors-outer">
          <!--Sponsors-->
          <div class="auto-container">
              <!--Sponsors Carousel-->
              <div class="sponsors-carousel owl-theme owl-carousel">

                  <div class="slide-item">
                    <figure class="image-box"><a href="https://fr.semrush.com/"><img src="{{ asset('images') }}/logo-semrush.png" alt="logo semrush"></a>
                    </figure>
                  </div>
                  <div class="slide-item">
                    <figure class="image-box"><a href="https://www.screamingfrog.co.uk/"><img src="{{ asset('images') }}/logo-screaming-frog.png" alt="logo screaming-frog"></a>
                    </figure>
                  </div>
                  <div class="slide-item">
                    <figure class="image-box"><a href="https://www.ovhcloud.com/fr/"><img src="{{ asset('images') }}/logo-ovh.png" alt="logo ovh"></a>
                    </figure>
                  </div>
                  <div class="slide-item">
                    <figure class="image-box"><a href="https://wordpress.com/fr/"><img src="{{ asset('images') }}/logo-wordpress.png" alt="logo wordpress"></a>
                    </figure>
                  </div>
                  <div class="slide-item">
                    <figure class="image-box"><a href="https://laravel.com/"><img src="{{ asset('images') }}/logo-laravel.png" alt="logo laravel"></a>
                    </figure>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!--Agency Section-->
  <section class="agency-section agency-section__dark">
      <div class="auto-container">
          <div class="row clearfix">
              <!--Left Column-->
              <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="sec-title">
                          <h2>La confiance fait<br> la différence<span class="dot">.</span></h2>
                      </div>

                      <!--Default Tabs-->
                      <div class="default-tabs tabs-box">

                          <!--Tab Btns-->
                          <ul class="tab-btns tab-buttons clearfix">
                              <li data-tab="#tab-1" class="tab-btn active-btn"><span>Notre Mission</span></li>
                              <li data-tab="#tab-2" class="tab-btn"><span>Notre Vision</span></li>
                          </ul>

                          <!--Tabs Container-->
                          <div class="tabs-content">

                              <!--Tab-->
                              <div class="tab active-tab" id="tab-1">
                                  <div class="content">
                                      <div class="text">Nous croyons que être visible sur internet est essentiel à la réussite des organisations et des entreprises. Notre mission est donc d'aider les organisations à atteindre leur plein potentiel en ligne, en fournissant des solutions de communication et de marketing adaptées à leurs besoins.</div>
                                  </div>
                              </div>

                              <!--Tab-->
                              <div class="tab" id="tab-2">
                                  <div class="content">
                                      <div class="text">Nous accompagnons les entreprises Bordelaises dans leurs stratégies digitales et relationnelles. Ensemble, nous travaillons à développer une présence online forte et impactante, afin de vous permettre de toucher un maximum de clients potentiels. Notre objectif est de vous aider à atteindre vos objectifs commerciaux tout en boostant votre visibilité sur le web.</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!--Right Column-->
              <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                  <div class="inner">
                      <div class="text">Nous sommes convaincus qu'un soutien engagé crée une relation de confiance forte et durable avec nos partenaires et nos clients. Notre objectif est de créer un site web qui réponde à 100% de vos attentes.</div>
                      <div class="featured-block-two clearfix">
                          <div class="image"><img src="{{ asset('images') }}/lyneo-confiance.svg" alt="agence web de confiance"></div>
                          <div class="text">
                              <ul>
                                  <li>Excellence</li>
                                  <li>Respect</li>
                                  <li>Transparence</li>
                                  <li>Ponctualité</li>
                                  <li>Qualité</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- News Section -->
  <section class="news-section news-section__dark">
      <div class="auto-container">
          <div class="sec-title centered">
              <h2>Derniers Articles<span class="dot">.</span></h2>
          </div>

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
                              <li><span class="far fa-clock"></span> {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</li>
                          </ul>
                      </div>
                      <h5><a href="{{ route('website.post',[$post->category->slug, $post->slug])}}">{{ $post->title }}</a></h5>
                      <div class="text">{{ strstr(wordwrap($post->description, 120), "\n", true) }}</div>
                      <div class="link-box"><a class="theme-btn" href={{ route('website.post', $post->slug) }}><span
                                  class="flaticon-next-1"></span></a></div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
      </div>
  </section>

  <!-- Call To Section -->
  <section class="call-to-section">
      <div class="auto-container">
          <div class="inner clearfix">
              <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
              <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>
              <h2>Des questions à nous poser?<br>C'est parti!</h2>
              <div class="link-box">
                  <a class="theme-btn btn-style-two" href="about.html">
                      <i class="btn-curve"></i>
                      <span class="btn-title">Nous contacter</span>
                  </a>
              </div>
          </div>
      </div>
  </section>

@endsection
