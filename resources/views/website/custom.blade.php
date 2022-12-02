@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/custom-website.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Sites Sur-mesure</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li><a href="{{ route("developpement") }}">Développement Web</a></li>
                              <li class="active">Sites Sur-mesure</li>
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
                            <img src="{{ asset('images') }}/build-website.png" alt="site custom a bordeaux">
                          </div>
                          <div class="text-content">
                            <div class="sec-title">
                              <h2 class="text-center">Pourquoi votre entreprise a besoin d'un site Web personnalisé<span class="dot">?</span></h2>
                            </div>
                              <p>
                                Votre site web est l'épine dorsale de votre entreprise. Il soutient tous les efforts de marketing numérique de votre entreprise et sert de principal point de contact avec vos clients. Un site de commerce électronique personnalisé et réactif donne aux utilisateurs en ligne une idée claire des offres de votre marque, de vos propositions de valeur uniques et de vos valeurs fondamentales.
                                <br>
                                Selon un rapport publié par la Fondation eCommerce, 88 % des consommateurs Bordelais effectuent des recherches en ligne avant de faire un achat ou de se rendre dans un magasin local. Sans une conception de site web professionnelle et personnalisée, les acheteurs en ligne peuvent être facilement frustrés. Cela se traduit par une augmentation du taux de rebond, une mauvaise réputation en ligne et un taux de conversion plus faible.
                                <br>
                                Ne laissez pas cela se produire pour votre entreprise. Veillez à ce que vos clients cibles puissent trouver votre site Web et y naviguer facilement. Investissez dans un site web réactif, bien conçu et informatif pour améliorer la rentabilité et le succès de votre marque.
                                                            </p>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="service-details">
                        <div class="text-content">
                            <div class="featured">
                                <div class="row clearfix">
                                    <div class="image-col col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('images') }}/question-wordpress.png" alt="Qu'est ce que Wordpress">
                                        </div>
                                    </div>
                                    <div class="text-col col-md-6 col-sm-12">
                                        <div class="inner">
                                            <h4>Conception de sites Web sur mesure ou CMS: Quel est le meilleur choix pour votre entreprise?</h4>
                                            <p>Votre site web est une puissante plate-forme de communication qui vous permet de commercialiser votre marque 24 heures sur 24, 7 jours sur 7, et d'entrer en contact avec des clients de tous horizons. Cependant, tous les sites ne garantissent pas le retour sur investissement (ROI) que vous souhaitez. La première chose à faire est de choisir entre un modèle de site Web et un site Web personnalisé.
                                              <br>
                                              Un modèle de site Web est une conception Web préétablie qui permet aux développeurs d'insérer du contenu dans un cadre sophistiqué construit par HTML ou CSS. Vous pouvez modifier des éléments limités, tels que les couleurs, les styles de police et les images. Mais à part cela, ce que vous voyez est ce que vous obtenez. Bien que les modèles prêts à l'emploi vous permettent de gagner du temps et de l'argent, ils manquent de flexibilité et d'unicité.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Un site web de conception personnalisée, en revanche, vous permet d'établir et d'exprimer votre marque par le biais d'éléments de page adaptés qui correspondent à vos objectifs. Le coût de la conception d'un site Web personnalisé est relativement plus élevé que celui des modèles de sites Web, mais il offre de nombreux avantages qui vous donnent un avantage concurrentiel. Une conception de site Web WordPress personnalisée est plus adaptée aux moteurs de recherche, centrée sur le client, unique et évolutive que les modèles intégrés.
                            </p>
                            <p>
                              En choisissant des forfaits de conception de sites Web personnalisés, vous construisez un site Web autour de votre parcours client spécifique et de votre message de marque.
                            <p>
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
                                      <h4>Pourquoi la conception et le développement de sites Web personnalisés sont la meilleure option pour votre marque?</h4>
                                      <p>Sur ce marché très encombré, la conception d'un site WordPress personnalisé peut être un facteur de différenciation essentiel pour votre entreprise. Un site Web de commerce électronique personnalisé vous permet d'éviter les fonctionnalités inutiles et les logiciels superflus qui pourraient réduire ses temps de chargement. En outre, aucun thème ne vous empêche de personnaliser l'apparence et les fonctionnalités d'un site Web personnalisé.
                                      </p>
                                  </div>
                                </div>
                                <div class="image-col col-md-4 col-sm-12">
                                  <div class="image">
                                    <img src="{{ asset('images') }}/worpdress-assets.png" alt="Wordpress pour entreprise">
                                  </div>
                                </div>
                                </div>
                              </div>
                          </div>
                          <div class="text-content">
                            <div class="featured">
                                <div class="row clearfix">
                                  <p>
                                    Avec un design qui renforce la marque, des éléments adaptés au référencement et une architecture de site robuste, le prix de la conception d'un site web personnalisé vaut bien votre investissement. Vous n'êtes toujours pas convaincu que les forfaits de conception de sites Web personnalisés sont le meilleur choix pour votre entreprise ?
                                  </p>
                                  <p>
                                    Un site Web personnalisé vous offre une présence numérique fiable qui répond aux besoins de votre entreprise en termes de qualité, d'image de marque et de convivialité. Tirez parti des services de conception de sites Web personnalisés et laissez une impression positive aux visiteurs de vos pages. L'agence de marketing Internet Thrive propose des services professionnels de conception de sites Web personnalisés pour vous aider à étendre la portée en ligne de votre marque.
                                  </p>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>

      <!-- Call To Section -->
      <section class="call-to-section-two alternate">
          <div class="auto-container">
              <div class="inner clearfix">
                  <h2>Besoin d'un site Sur-mesure?<br>Vous avez des questions?</h2>
                  <div class="link-box">
                      <a class="theme-btn btn-style-two" href="{{ route("website.contact") }}">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Contactez-nous</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>
    </div>


@endsection

