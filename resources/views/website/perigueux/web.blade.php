@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/perigueux.webp)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Agence Web à <br>Périgueux</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Périgueux - Agence Web</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--End Banner Section -->

      <div class="sidebar-page-container">
          <div class="auto-container mb-5">
              <div class="row clearfix">

                  <!--Content Side-->
                  <div class="content-side col-lg-8 col-md-12 col-sm-12 mt-5">
                      <div class="service-details">
                        <div class="sec-title">
                          <h4 class="text-center">Réalisez vos objectifs commerciaux avec des sites qui convertissent parfaitement<span class="dot">.</span></h4>
                        </div>
                        <div class="main-image image">
                          <img src="{{ asset('images') }}/web-ville.svg" alt="creation site web à bordeaux">
                        </div>
                        <p>
                          A l'Agence Web Lyneo, nous nous efforçons d'aider les entreprises de Périgueux, mais aussi de Dordogne, à briller en produisant un contenu professionnel et attrayant. Nous offrons une gamme étendue de services comprenant le développement, l'hébergement et l'optimisation du référencement, quelle que soit la taille de votre entreprise ou le type d'entreprise privée que vous dirigez. Nous garantissons que votre projet sera tenu à jour à chaque étape du processus, du début à la fin. Notre équipe est là pour vous aider, alors quoi que vous fassiez et quelle que soit la taille de vos objectifs, soyez assurés qu'ils peuvent être atteints avec l'Agence Web Lyneo, Perigueux !
                        </p>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Notre agence WEB de Périgueux<br>à votre service<span class="dot">.</span></h2>
                      <div class="subtitle">Boostez votre activité grâce à des sites web à fort taux de conversion</div>
                    </div>

                    <section class="service-section">
                      <div class="row clearfix">
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-offpage.svg" alt="SEO">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('seo-perigueux') }}">Optimisation pour les moteurs de recherche - SEO</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre agence web de Périgueux est votre meilleur atout pour que votre entreprise se démarque de la concurrence. Nos sites Web sont conçus de manière esthétique, en combinant l'attrait visuel avec les principes de référencement qui assurent une visibilité maximale dans les résultats des moteurs de recherche. En utilisant des stratégies de référencement, nos experts seront en mesure d'identifier et d'optimiser les mots-clés spécifiques aux services de votre entreprise, facilitant ainsi la tâche des clients potentiels qui recherchent une entreprise comme la vôtre. Travailler avec nous signifie que plus de clients potentiels verront votre site web en premier, vous mettant sur la voie du succès.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/responsive-web.png" alt="Web Responsive Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <p>Sites internet adaptés aux mobiles</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    L'agence web Lyneo à Périgueux est fière de proposer des services de conception de sites web de qualité supérieure utilisant les dernières techniques de responsive design. Nos développeurs créent des sites web étonnants et captivants qui sont incroyablement accessibles sur tous les appareils, assurant ainsi une excellente expérience utilisateur pour les visiteurs. En outre, nous avons constaté que les sites que nous concevons ont tendance à retenir l'attention des visiteurs plus longtemps que les sites plus ordinaires, ce qui donne un élan supplémentaire à votre marque.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/web-developpement-2.png" alt="Developpement Web">
                                <h3 class="how-it-works-card__title">
                                      <p>Développement de sites internet</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre agence web Lyneo à Périgueux reconnaît combien il est essentiel d'atteindre l'équilibre idéal entre la conception et la performance d'un site internet. Nos professionnels garantissent que votre site web n'est pas seulement esthétique, mais qu'il offre également une expérience utilisateur opérationnelle grâce à notre souci du détail. Notre objectif est de vous offrir un site web réactif qui répond à vos besoins et suscite l'intérêt des utilisateurs.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/wordpress-logo.png" alt="Experts Wordpress à Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('wordpress') }}">Experts Wordpress</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Vous êtes à la recherche d'une équipe de développement web expérimentée pour s'occuper de votre site web WordPress? Ne cherchez pas plus loin! Nos spécialistes ont une grande expérience de ce CMS, ils savent donc exactement comment mettre en œuvre le référencement et configurer les paramètres techniques. De plus, nous garantissons que tous les plugins et toutes les versions seront maintenus à jour, ce qui vous assure une totale tranquillité d'esprit.
                                  </p>
                                  </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/redaction-contenu-ville.svg" alt="Rédaction de contenu à Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <p>Rédaction de contenu</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre équipe d'experts est toujours à la pointe de la technologie en matière de référencement, et se tient au courant de toutes les mises à jour des algorithmes de recherche de Google dès qu'elles sont publiées. Notre engagement inébranlable envers l'excellence vous garantit un contenu de qualité conçu pour les besoins spécifiques de votre public. Nous sommes spécialisés dans la rédaction d'articles de blog, de communiqués de presse et d'autres types de documents originaux, qui donneront à votre site un coup de pouce essentiel dans les SERPs !
                                  </p>
                                    <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/hebergement-web.png" alt="hebergement web à Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <p>Hébergement WEB</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Chez Lyneo, nous savons combien votre site web est important pour réussir dans le monde numérique d'aujourd'hui. C'est pourquoi nos forfaits de développement web sont entièrement équipés de services d'hébergement fiables. Notre équipe d'experts de Périgueux est très expérimentée et crée des sites à l'aide de <a href="{{ route('wordpress') }}">WordPress </a> pour garantir une vitesse, une efficacité et une satisfaction des utilisateurs maximales - vous laissant ainsi du temps libre pour vous concentrer sur les besoins de votre entreprise !
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/site-web-sur-mesure.png" alt="site web sur-mesure à Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('custom') }}">Création de site web sur-mesure</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nos développeurs web à Périgourdin comprennent que chaque entreprise est unique et notre objectif est de créer un design de site web conçu spécifiquement pour les besoins de votre organisation. En mettant l'accent sur la créativité, la qualité et l'attention aux détails, nous nous efforçons de faire en sorte que vous vous démarquiez de la concurrence avec une présence en ligne vraiment personnalisée.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/developpement-ecommerce-2.png" alt="hebergement web à Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('commerce') }}">Création de sites e-commerce</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Libérez le potentiel de votre entreprise avec une solution de commerce électronique adaptée à vos besoins uniques. Nos développeurs expérimentés à Périgueux fournissent un soutien complet, offrant une boutique en ligne personnalisée qui vous emmènera, vous et vos clients, dans un voyage d'achat inoubliable.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                      </div>
                    </section>
                    <div class="sec-title mt-5">
                      <h2 class="text-center">Pourquoi choisir Lyneo pour votre site WEB <span class="dot">?</span></h2>
                      <div class="subtitle">Une conception de site Web engagée dans la réussite de votre entreprise.</div>
                    </div>
                  </div>
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                  <div class="service-details">
                    <div class="text-content">
                      <div class="featured">
                        <div class="row clearfix">
                          <div class="text-col col-md-7 col-sm-12">
                            <div class="inner">
                              <p>
                                Alors que les entreprises se battent pour réussir dans le paysage numérique actuel, le bon partenaire marketing peut faire toute la différence. Pour que votre entreprise tire le meilleur parti de son investissement, il est essentiel de choisir une agence spécialisée qui écoutera et comprendra à la fois vos objectifs et votre message avant d'élaborer un plan d'action efficace pour vous.
                              </p>
                            </div>
                          </div>
                          <div class="image-col col-md-4 col-sm-12">
                            <div class="image">
                              <img src="{{ asset('images') }}/team-lyneo-ville.svg" alt="Pourquoi Lyneo à Périgueux">
                            </div>
                          </div>
                          <div class="link-box text-center">
                            <a class="theme-btn btn-style-one" href="{{ route('contact') }}">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Contactez-nous</span>
                            </a>
                          </div>
                          <div class="inner mt-5">
                            <p>
                              L'agence web Lyneo en Périgiord est le partenaire idéal pour votre entreprise. Nos concepteurs expérimentés vous aideront à créer un site web qui amplifie votre image de marque et offre aux utilisateurs une expérience inoubliable - de plus, nos puissants services de marketing numérique garantissent des résultats. Avec Lyneo à bord, vous verrez votre site Web attirer de nouveaux clients et augmenter vos revenus !
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/experts-marketing-ville.png" alt="Priorité au client">
                                <h3 class="how-it-works-card__title">
                                      <p>Priorité au client</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Chez Lyneo, nous comprenons l'importance de la satisfaction des clients et nous accordons la priorité à leurs commentaires pour garantir une expérience utilisateur de haute qualité. Notre équipe se consacre à l'élaboration de solutions innovantes qui prennent en compte les idées de nos clients !
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                      </div><!-- /.col-md-12 col-lg-6 -->
                      <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/resultats-en-hausse.png" alt="resultats marketing digital">
                                  <h3 class="how-it-works-card__title">
                                      <p>Une tradition d'excellence</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Lyneo s'est imposé comme un leader de la conception web et du marketing numérique en Dordogne, ce qui fait de nous le premier choix des entreprises qui cherchent à atteindre leurs objectifs. Notre portefeuille de clients satisfaits est la preuve que nous avons ce qu'il faut pour donner vie à votre vision !
                                  </p><!-- /.how-it-works-card__text -->

                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                      </div><!-- /.col-md-12 col-lg-6 -->
                  </div><!-- /.row -->
                  <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="how-it-works-card text-center">
                            <div class="how-it-works-card__inner">
                              <img class="my-5 icon-box-2" src="{{ asset('images') }}/developpement-web-2.png" alt="Code de qualité">
                                <h3 class="how-it-works-card__title">
                                    <p>Un code propre et efficace</p>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Nos développeurs de Périgueux ont le souci du détail et créent un code qui optimise l'expérience de l'utilisateur et la vitesse du site. Nous accordons la plus grande importance à l'écriture d'un langage de programmation propre afin de garantir le bon fonctionnement de votre site web sans aucun accroc.
                                </p>                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/transparence-lyneo.png" alt="La transparence au travail">
                              <h3 class="how-it-works-card__title">
                                  <p>La transparence au travail</p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                Avec Lyneo, la transparence est essentielle. Nos clients ne se demandent jamais ce qui se passe - nous fournissons des mises à jour claires et constantes via notre portail en ligne afin que les projets restent correctement gérés du début à la fin. Nous veillons à ce que vous disposiez de toutes les informations nécessaires à la réussite de votre projet, sans aucune surprise cachée en cours de route !
                              </p>                                <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/respect-delais.png" alt="Nous respectons les délais">
                              <h3 class="how-it-works-card__title">
                                  <p>Nous respectons les délais</p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                Le respect des délais est une priorité absolue pour nous ; nous comprenons combien il est essentiel de respecter les échéances et de gérer votre entreprise. Soyez assuré qu'avec nous, vous recevrez toujours vos projets dans les temps - alors commençons !
                              </p><!-- /.how-it-works-card__text -->
                              <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">
                          <img class="my-5 icon-box-2" src="{{ asset('images') }}/innovation-lyneo.png" alt="Lyneo innove en permanence">
                            <h3 class="how-it-works-card__title">
                                <p>De beaux designs sur mesure</p>
                            </h3><!-- /.how-it-works-card__title -->
                            <p class="mt-3 mx-3">
                              Lyneo se distingue de la concurrence par la création de sites web personnalisés. Nous nous attachons à donner vie à la personnalité de votre marque et mettons un point d'honneur à ce que chaque projet soit unique - pas de solutions génériques ici !
                            </p>                                <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
              </div><!-- /.auto-container -->
            </div>


        <section class="process-one mt-5">
          <div class="auto-container">
              <div class="row">
                  <div class="col-md-12 col-lg-6 process-one__image__column">
                      <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/strategy.svg" alt="Startegie Web">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Strategie <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Augmentez vos revenus avec plus de devis et entretenez une relation durable avec vos clients existants. Notre agence web résout rapidement les problèmes sans rhétorique inutile, laissant les résultats parler d'eux-mêmes ! Nous sommes spécialisés dans l'apport d'un trafic accru grâce à des stratégies de référencement organique ou payant sans faille, ainsi que des programmes de fidélisation qui assurent d'excellents taux de rétention des clients.
                            </p><!-- /.process-one__summery -->

                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                  <div class="col-md-12 col-lg-6 process-one__image__column">
                      <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/application.svg" alt="Développement Web">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Développement <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Notre agence web à Périgueux vous aide à rester compétitif grâce aux dernières technologies en matière de sites web et de commerce électronique. Nous concevons des solutions qui sont à la fois visuellement attrayantes et optimisées pour le classement des moteurs de recherche, vous donnant une présence en ligne de pointe.
                            </p><!-- /.process-one__summery -->

                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/ui-ux.svg" alt="UI-UX Web">
                    </div><!-- /.process-one__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="process-one__content">
                        <div class="sec-title">
                            <h2>UI & UX <span class="dot">.</span><!-- /.dot -->
                            </h2>
                        </div><!-- /.sec-title -->
                        <p class="process-one__summery">
                          Nos spécialistes de la création créent des identités de marque et des graphiques uniques pour rester à la pointe des dernières tendances du web. Notre expertise en matière de design d'expérience, de design web et de convivialité, ainsi que notre approche innovante nous permettent de vous fournir des expériences avant-gardistes qui en disent long sur votre entreprise.
                        </p><!-- /.process-one__summery -->

                    </div><!-- /.process-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
              <div class="row">
                  <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/referencement.svg" alt="Référencement Web">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Référencement <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Faites passer votre visibilité au niveau supérieur avec une stratégie SEO ou Google Adwords axée sur les résultats, proposée par notre agence web de confiance. Concentrez-vous sur l'augmentation du trafic, l'élévation de la visibilité et l'amélioration du chiffre d'affaires rapidement et efficacement - tout cela est disponible dans un paquet personnalisé !
                          </p><!-- /.process-one__summery -->
                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->

          </div><!-- /.auto-container -->
      </section><!-- /.process-one -->



            <!--FAQ section-->
            <section class="faqs-section mb-5">
              <div class="sec-title centered">
                <h2>F.A.Q<span class="dot">.</span></h2>
              </div>
              <div class="text-center mb-5">
              </div>

              <div class="auto-container">
                <div class="row clearfix">
                  <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                      <!--Block-->
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">1.</span> Qu'est-ce qu'une agence web ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>Une agence web est une entrepri qui se sp&eacute;cialise dans le d&eacute;veloppement de sites web, d&#39;applications web et d&#39;autres services li&eacute;s au commerce &eacute;lectronique. Les agences Web fournissent un large &eacute;ventail de services, tels que la conception de sites Web, la conception de l&#39;exp&eacute;rience utilisateur (UX), l&#39;optimisation des moteurs de recherche (SEO), le marketing de contenu, les analyses Web, etc. L&#39;objectif d&#39;une agence web est d&#39;aider les entreprises &agrave; cr&eacute;er et &agrave; maintenir des sites web efficaces qui augmenteront leur pr&eacute;sence sur Internet</p>

                                  <p>Les agences Web sont compos&eacute;es de professionnels exp&eacute;riment&eacute;s qui comprennent comment maximiser les performances des sites Web gr&acirc;ce &agrave; diverses techniques. Une bonne agence web aura des connaissances sur les technologies modernes telles que HTML5, CSS3, JavaScript et JQuery ; les outils de conception de l&#39;exp&eacute;rience utilisateur tels que Adobe Photoshop et Illustrator ; les strat&eacute;gies d&#39;optimisation du r&eacute;f&eacute;rencement ; et bien plus encore. En outre, de nombreuses agences Web proposent des services suppl&eacute;mentaires tels que des services d&#39;h&eacute;bergement, l&#39;enregistrement de domaines, la configuration et la gestion de comptes de messagerie, entre autres</p>

                                  <p>Un aspect important de la collaboration avec une agence web est de pouvoir lui faire confiance pour votre projet. Les professionnels exp&eacute;riment&eacute;s poss&egrave;dent le savoir-faire technique n&eacute;cessaire pour d&eacute;velopper des sites Web qui ne sont pas seulement fonctionnels mais aussi esth&eacute;tiques. Ils comprennent &eacute;galement l&#39;importance de cr&eacute;er un site Web qui respecte toutes les r&eacute;glementations actuelles en mati&egrave;re d&#39;accessibilit&eacute; et de normes d&#39;exp&eacute;rience utilisateur. En plus de cette base de connaissances, ils doivent &ecirc;tre des experts dans la compr&eacute;hension des besoins des clients afin de livrer les projets &agrave; temps et dans les limites du budget tout en fournissant un excellent service &agrave; la client&egrave;le &agrave; tout moment</p>

                                  <p>Lorsque vous envisagez de faire appel &agrave; une agence web, il est important d&#39;examiner le portefeuille qu&#39;elle a cr&eacute;&eacute; pour des clients pr&eacute;c&eacute;dents avant de prendre une d&eacute;cision. Il est &eacute;galement essentiel de rechercher leur r&eacute;putation parmi les clients en lisant les critiques en ligne ou en demandant autour de vous les exp&eacute;riences des clients pr&eacute;c&eacute;dents. En fin de compte, vous voulez trouver une agence dont le travail parle de lui-m&ecirc;me avec son engagement &agrave; l&#39;excellence dans tous les aspects - de la conception &agrave; la livraison - afin que votre entreprise puisse b&eacute;n&eacute;ficier de leur expertise dans la cr&eacute;ation d&#39;exp&eacute;riences en ligne r&eacute;ussies pour les clients, maintenant et &agrave; l&#39;avenir.</p>

                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">2.</span> Comment choisir une agence web ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>
                                    Lorsque vous avez un projet Web, vous pouvez soit engager un freelance, soit une agence Internet, en fonction des besoins de votre projet, du degré d'expertise nécessaire, des autres personnes qui doivent être impliquées dans le projet et de votre budget.
                                  </p>
                                  <p>
                                    Les agences web sont la meilleure option pour les projets complexes, bien que souvent les freelances web travaillent ensemble pour fournir d'excellentes offres qui peuvent être encore meilleures grâce à leur expertise combinée.
                                  </p>
                                  <p>
                                    Ils devront acquérir les compétences requises. Un service de web design, la création d'un site web, ou une expertise particulière peuvent être confiés à un freelance spécialisé. Ou- ce que propose notre agence de communication web Lyneo- rassembler les compétences de plusieurs agences et freelances au sein d'un même projet.
                                  </p>
                                  <p>
                                    Aucune agence web n'est parfaite pour tout le monde, tout dépend de votre budget, du type de projet, de la créativité attendue et des technologies nécessaires. Pour trouver la meilleure agence web de Périgueux pour vous spécifiquement, recherchez-la en ligne et consultez ses projets passés pour voir si elle correspond à vos besoins.
                                  </p>
                                  <p>
                                    Contactez rapidement les agences web et voyez dans quelle mesure elles sont réactives par e-mail et par téléphone. Cela vous donnera une bonne indication de leur disponibilité, ce qui est un critère essentiel. Demandez un devis pour votre site Web : faites attention à la qualité de leur réponse, si elle correspond à ce que vous recherchez, à la personnalisation de l'offre, au budget (détaillé) qu'ils proposent, ainsi qu'aux délais et processus.
                                  </p>
                                  <p>
                                    Si vous voulez que les choses se déroulent bien, prenez le temps, dès le début, d'envoyer une expression détaillée des besoins aux différentes agences web (comme un appel d'offres ou un cahier des charges). Soyez clair, concis et complet dans votre explication. Enfin, suivez votre intuition en vous basant sur les critères précédents - cela vous aidera à choisir non seulement la meilleure agence web possible, mais aussi la meilleure pour VOTRE projet spécifique.
                                  </p>

                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">3.</span> Pourquoi choisir notre Agence Web Lyneo à Périgueux ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>
                                    Lyneo est une agence de conseil et de création de sites web basée à Périgueux en Dordogne. Notre expertise réside dans la conception web professionnelle et le marketing digital, et nous sommes reconnus pour notre réactivité.
                                  </p>
                                  <p>
                                    Dans notre entreprise, vous travaillerez avec des professionnels parmi les plus qualifiés de Périgueux, qui seront ravis de vous aider à réussir. Notre équipe se compose de consultants, de chefs de projet, de graphistes, de développeurs et de webmasters.
                                  </p>
                                  <p>
                                    Chez Lyneo, nous sommes spécialisés dans la conception de sites Web créatifs et durables. Notre équipe est composée d'experts de divers aspects du développement web, tels que le conseil, le codage et le référencement.
                                  </p>
                                  <p>
                                    Nous nous efforçons de créer des sites web qui sont à la fois visuellement attrayants et bien classés dans les moteurs de recherche. Nos solutions innovantes et efficaces ont aidé de nombreux clients à atteindre les résultats souhaités.
                                  </p>
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">4.</span> Quels types de sites propose notre agence Web Lyneo ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>
                                    Si vous êtes à la recherche d'un nouveau site web, notre agence devrait être votre premier choix ! Nous concevons des sites web professionnels clés en main qui répondent à vos besoins spécifiques - qu'il s'agisse d'un site vitrine, d'un site institutionnel ou d'un site de commerce électronique.
                                  </p>
                                  <p>
                                    Nos sites web sont conçus pour être réactifs sur les appareils mobiles et faciles à utiliser. En fonction du projet, nous construisons nos sites web en utilisant soit WordPress, soit Laravel. Dans notre agence, nous nous concentrons sur le développement de sites qui vous apporteront rapidement un bon retour et vous aideront à élargir votre clientèle.
                                  </p>
                                  <p>
                                    Nous comprenons combien il est frustrant de cliquer sur un site Web pour découvrir qu'il est en panne pour des raisons de maintenance ou qu'il met du temps à se charger. C'est pourquoi nous proposons des formules d'hébergement web qui garantissent que votre site web sera opérationnel 24 heures sur 24, 7 jours sur 7. Nos serveurs sont situés à Périgueux, en France, et sont sauvegardés régulièrement. Vous pouvez donc être rassuré en sachant que votre site est toujours sûr et sécurisé.
                                  </p>
                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">5.</span> Combien coûte une prestation d’agence web ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>
                                    Une agence web de renom vous accompagnera du début à la fin de votre projet. Cela implique non seulement le travail initial (comme l'analyse comparative de la concurrence, les audits numériques et les études de marché) mais aussi l'entretien une fois que votre site Web est en ligne (optimisations, mises à jour, maintenance, développement).
                                  </p>
                                  <p>
                                    Le coût de ce service varie en fonction de quelques conditions telles que les fonctionnalités souhaitées, le niveau de complexité de la conception, le nombre de modèles, etc.)
                                  </p>
                                </div>
                            </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </section>




      <!-- Call To Section -->
      <section class="call-to-section-two alternate">
          <div class="auto-container">
              <div class="inner clearfix">
                  <h2>Besoin d'un site Web?<br>Vous avez des questions?</h2>
                  <div class="link-box">
                      <a class="theme-btn btn-style-two" href="{{ route("website.contact") }}">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Contactez-nous</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>


@endsection

