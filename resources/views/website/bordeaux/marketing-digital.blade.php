@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/agence-marketing-bordeaux.webp)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Agence de marketing digital à <br>Bordeaux</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Bordeaux - Agence de marketing digital</li>
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
                        <div class="sec-title">
                          <h4 class="text-center">Augmentez vos revenus grâce à nos solutions numériques axées sur la croissance<span class="dot">.</span></h4>
                        </div>
                          <div class="main-image image">
                            <img src="{{ asset('images') }}/marketing-bordeaux.svg" alt="SEO à Bordeaux">
                          </div>
                          <div class="text-content">
                            <p>Lyneo est une agence de marketing numérique à Bordeaux, en Aquitaine, qui permet aux entreprises et aux marques d'atteindre leurs objectifs grâce à des stratégies marketing performantes.<br><span id="dots">...</span><span id="more"><br>
                            Lyneo propose des solutions de marketing numérique tout-en-un, notamment la rédaction de contenu, le marketing des réseaux sociaux, la conception et le développement de sites Web, et la gestion des campagnes de publicité en ligne.<br><br>
                              Bordeaux est située en plein cœur du bassin Aquitain et est l'une des villes les plus peuplée de France. Les habitants ont la chance de profiter d'étés chauds et d'hivers doux, grâce à son climat océanique. Bordeaux est connu grâce à sa gastronomie, son vignoble et son art de vivre. Du fait de son passé historique très riche, la ville est également reconnue pour son patrimoine historique. Une visite dans cette ville ne serait pas complète sans aller voir le miroir d'eau, la place de la bourse et le grand théâtre.<br><br>
                              Bordeaux accueille de très grandes entreprises sur son territoire, dont l'entreprise CDiscount, spécialisée dans la vente par correspondance. Avec une économie florissante, un climat agréable, Bordeaux est une destination idéale pour des affaires et les loisirs.<br><br>
                              Gérer et développer une entreprise à Bordeaux est une excellente chose, mais cela peut aussi être un défi. Avec un marché très compétitif, il est difficile de se démarquer de la masse. C'est pourquoi l'entreprise de marketing numérique Lyneo à Bordeaux est là pour aider votre entreprise à réussir en se concentrant sur le bon objectif.<br><br>
                              Si vous souhaitez réussir le marketing de votre entreprise à Bordeaux, vous avez besoin de l'équipe d'experts en marketing de Lyneo à vos côtés. Apprenez-en davantage sur notre service de marketing numérique à Bordeaux dès aujourd'hui!<br>
                            </span>
                            <button onclick="myFunction()" id="myBtn">En lire plus</button>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Nos services de marketing digital à Bordeaux<span class="dot">.</span></h2>
                      <div class="subtitle">Trouvez vos clients idéaux avec le message adéquate</div>
                    </div>

                    <section class="service-section">
                      <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="how-it-works-card text-center">
                                <div class="how-it-works-card__inner">
                                  <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-bordeaux.png" alt="SEO Bordeaux">
                                    <h3 class="how-it-works-card__title">
                                        <a href="{{ route('seo-bordeaux') }}">Search Engine Optimisation - SEO</a>
                                    </h3><!-- /.how-it-works-card__title -->
                                    <p class="mt-3 mx-3">
                                      Nos experts en marketing digital Bordelais sont formés pour mener des campagnes et des stratégies de référencement efficaces.<br>
                                      Nous effectuons un audit du site et une recherche de mots-clés en rapport avec votre activité. Nous personnalisons toutes les stratégies SEO pour les aligner sur vos objectifs.
                                    </p><!-- /.how-it-works-card__text -->
                                    <!-- /.how-it-works-card__link -->
                                </div><!-- /.how-it-works-card__inner -->
                            </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/web-dev-bordeaux.png" alt="Developpement web Bordeaux">
                                  <h3 class="how-it-works-card__title">
                                      <a href="#">Développement Web</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    L'équipe très créative nos développeurs web Bordelais sait comment créer des sites web attrayants, conçus pour le trafic et la conversion.<br>
                                    Lyneo maîtrise tous les aspects de la conception, du développement et de la maintenance de vos projets web.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/reseaux-sociaux-bordeaux.png" alt="Reseaux sociaux Bordeaux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Marketing de réseaux sociaux</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Laissez-nous gérer votre marketing sur les réseaux sociaux pour que vous puissiez vous concentrer sur des choses plus importantes. Notre équipe d'experts en marketing numérique à Bordeaux assimile la voix et le message de votre marque pour créer des campagnes de médias sociaux personnalisées pour vous.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/reputation-en-ligne-bordeaux.png" alt="Reputation en ligne Bordeaux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Réputation en ligne</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Prenez le contrôle de votre réputation en ligne grâce à notre service de gestion de la réputation en ligne. Ne laissez pas les avis négatifs faire chuter votre entreprise. Nos experts en marketing digital de Phoenix peuvent vous aider à mettre en avant vos clients satisfaits et à renforcer la réputation de votre marque.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/redaction-contenu-bordeaux.png" alt="Redaction de contenu Bordeaux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Rédaction de contenu</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre équipe de rédacteurs fournit d'excellents services de rédaction de contenu pour asseoir la présence de votre entreprise en ligne. Notre société de marketing digital Bordelaise fournit un contenu engageant et convaincant qui génère des prospects et des revenus pour atteindre vos objectifs commerciaux.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/paiment-par-clic-bordeaux.png" alt="Paiement par clic Bordeaux">
                                  <h3 class="how-it-works-card__title">
                                      <a href="{{ route('publicite-en-ligne') }}">Paiement par clic - PPC</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Atteignez rapidement votre public grâce à la publicité payante. Nos services de gestion PPC aideront votre entreprise à se développer en utilisant les meilleures tactiques de paiement par clic du secteur. Nous suivons les dernières stratégies pour AdWords et d'autres plateformes publicitaires qui génèrent des conversions pour votre entreprise.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                      </div>
                    </section>
                    <div class="sec-title mt-5">
                      <h2 class="text-center">Pourquoi choisir Lyneo pour votre marketing digital à Bordeaux<span class="dot">?</span></h2>
                      <div class="subtitle">Atteignez vos objectifs commerciaux grâce à des solutions de marketing puissantes</div>
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
                              <p>Aujourd'hui, il ne suffit pas de travailler avec une société de marketing digital choisie au hasard. Assurez-vous de vous associer à une agence qui non seulement prendra le temps d'écouter vos objectifs et le message que vous souhaitez véhiculer, mais aussi qui vous accompagnera pour obtenir les résultats souhaités afin que votre entreprise bénéficie du meilleur retour sur investissement marketing.<br>
                                Toutes les agences de marketing digital n'y parviennent pas.
                              </p>
                            </div>
                          </div>
                          <div class="image-col col-md-4 col-sm-12">
                            <div class="image">
                              <img src="{{ asset('images') }}/team-lyneo-bordeaux.svg" alt="Pourquoi Lyneo à Bordeaux">
                            </div>
                          </div>
                          <div class="link-box text-center">
                            <a class="theme-btn btn-style-one" href="{{ route('contact') }}">
                                <i class="btn-curve"></i>
                                <span class="btn-title">Contactez-nous</span>
                            </a>
                          </div>
                          <div class="inner mt-5">
                            <p>Investir dans une campagne de marketing digital est toujours une démarche risquée pour les entreprises. Il n'y a aucune garantie de succès et les règles du jeu changent constamment.<br>
                              L'agence de marketing digital Lyneo à Bordeaux possède l'expérience et l'expertise dans l'atteinte de résultats exceptionnels pour ses clients. Nous mettons en œuvre des stratégies de marketing digital éprouvées qui vous aident à atteindre vos objectifs commerciaux.<br>
                              Voici d'autres raisons pour lesquelles vous devriez choisir Lyneo pour vos besoins en marketing digital :
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
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/experts-marketing-bordeaux.png" alt="Experts marketing Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="#">Nous sommes des experts en marketing digital</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre équipe possède des années d'expérience et de compétences, ce qui la rend hautement qualifiée pour tous les projets de marketing digital. Nous sommes fiers de n'engager que les meilleurs du secteur et nous attendons d'eux qu'ils fournissent le meilleur pour vous.
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
                                      <a href="#">Vous obtenez de véritables résultats</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nous fournissons des résultats tangibles et mesurables qui atteignent et dépassent vos objectifs commerciaux. Grâce à nos recherches fondées sur des données, nous veillons à ce que toutes les campagnes aient des chances de succès. Plus besoin de gaspiller des ressources dans des expériences et des intuitions qui ne mènent nulle part.
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
                              <img class="my-5 icon-box-2" src="{{ asset('images') }}/recherche-excellence.png" alt="Recherche de l'excellence">
                                <h3 class="how-it-works-card__title">
                                    <a href="#">Recherche de l'excellence</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Chez Lyneo, nous ne nous arrêtons pas simplement lorsque nous atteignons les objectifs de nos clients. Nous identifions les domaines qui peuvent encore être améliorés et nous encourageons nos clients à continuer à développer des stratégies pour dépasser leurs objectifs. En mettant l'accent sur une plus grande croissance, nos clients sont assurés d'obtenir plus de résultats que prévu initialement.
                                </p><!-- /.how-it-works-card__text -->
                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="how-it-works-card text-center">
                            <div class="how-it-works-card__inner">
                              <img class="my-5 icon-box-2" src="{{ asset('images') }}/cooperation-client.png" alt="collaboration client">
                                <h3 class="how-it-works-card__title">
                                    <a href="#">Approchée axée sur le client</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Chez Lyneo nous croyons en la vision qu'ont nos clients de notre entreprise. Nous écoutons leurs objectifs commerciaux et alignons nos stratégies pour les aider à les atteindre. Tous nos services de marketing digital visent à placer les objectifs de nos clients au-dessus de tout.
                                </p>                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/transparence-lyneo.png" alt="transparence de Lyneo">
                              <h3 class="how-it-works-card__title">
                                  <a href="#">Nous sommes tranparents</a>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                Il n'y a pas de secrets lorsque vous travaillez avec nous. Nous pratiquons la transparence avec nos clients. Nous fournissons des statistiques de performance à partir de Google Analytics et créons des rapports détaillés sur le référencement. Nous fournissons également des rapports mensuels détaillés afin que les clients restent informés de toutes les mises à jour du projet.
                              </p>                                <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">
                          <img class="my-5 icon-box-2" src="{{ asset('images') }}/innovation-lyneo.png" alt="Lyneo innove en permanence">
                            <h3 class="how-it-works-card__title">
                                <a href="#">Nous innovons en permanence</a>
                            </h3><!-- /.how-it-works-card__title -->
                            <p class="mt-3 mx-3">
                              Nous croyons qu'il faut sortir des sentiers battus et adopter de nouvelles façons de faire les choses. Notre équipe Bordelaise trouve les tendances les plus efficaces en matière de marketing et les appliques dans les campagnes. Nous suivons les dernières tendances du secteur et identifions celles qui ont un potentiel de réussite.
                            </p>                                <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
              </div><!-- /.auto-container -->
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


@endsection


