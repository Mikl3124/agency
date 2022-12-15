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
          <div class="auto-container">
              <div class="row clearfix">

                  <!--Content Side-->
                  <div class="content-side col-lg-8 col-md-12 col-sm-12">
                      <div class="service-details">
                        <div class="sec-title">
                          <h4 class="text-center">Réalisez vos objectifs commerciaux avec des sites Web qui convertissent parfaitement<span class="dot">.</span></h4>
                        </div>

                        <div class="main-image image">
                          <img src="{{ asset('images') }}/web-ville.svg" alt="creation site web à bordeaux">
                        </div>

                        <div class="text-content">
                          <p>Lyneo est un agence web à Périgueux dordogne, spécialisée dans l'optimisation de sites Web pour les petites et grandes entreprises. <br><span id="dots">...</span><span id="more">
                            Nous comprenons l'importance d'avoir un site web qui non seulement est beau mais qui est aussi performant. C'est pourquoi nous employons des développeurs web ayant des années d'expérience - pour nous assurer que votre site atteint son plein potentiel .<br>
                            Périgueux est une ville  d'art et d'histoire, et il est donc logique de commencer par les bases lorsqu'on parle d'optimisation de site Web. C'est pourquoi nous avons mis au point cette recette pour créer un article de blog qui fera remarquer votre site.<br>
                            Avec avec un riche patrimoine culturel qui remonte à la période gallo-romaine. La ville de Périgueux abrite une variété d'attractions touristiques intéressantes, notamment la cathédrale de Périgueux et la basilique Saint Front. En outre, Périgueux est également réputée pour son architecture médiévale et Renaissance, que l'on peut voir dans les nombreux bâtiments et monuments historiques de la ville.<br>
                            Nous pensons qu'il faut plus qu'une simple expertise technique pour créer un site Web réussi. Vous avez besoin de stratégies de marketing de contenu et de meilleures pratiques de référencement afin de tirer le meilleur parti de votre site Web. C'est pourquoi nous proposons des services de rédaction d'articles de blog, afin que vous puissiez vous concentrer sur la création d'un contenu attrayant et informatif pour vos visiteurs.<br>
                            Nous sommes fiers d'avoir chez Lyneo une équipe d'experts qui utilisent leurs connaissances et leurs compétences pour aider les entreprises à lancer ou à réorganiser leurs sites Web. En optimisant votre site Web, notre équipe peut s'assurer qu'il se démarque de tous les autres et qu'il est performant - générant des prospects et des ventes.<br>
                            L'agence Lyneo propose des services de conseil pour vous aider à lancer ou relancer votre site Web, ainsi qu'à mettre en œuvre des stratégies conçues pour générer des prospects et des ventes. Notre équipe d'experts est passionnée par le marketing numérique et la fourniture de solutions axées sur les résultats afin que vous puissiez tirer le meilleur parti de votre présence en ligne. Qu'il s'agisse de créer une boutique de commerce électronique, de créer du contenu pour un blog ou d'améliorer l'expérience des utilisateurs en modifiant le design, Lyneo possède l'expertise nécessaire pour vous aider à réussir. <br>
                            Lyneo a pour vocation d'aider les entreprises à atteindre leur plein potentiel, dès le départ. Nous nous engageons à fournir un service de qualité avec des délais d'exécution rapides afin que vous puissiez vous concentrer sur ce qui est important : la croissance de votre entreprise. Contactez-nous dès aujourd'hui pour une consultation gratuite et découvrez comment nous pouvons faire travailler votre site Web pour vous !
                          </span>
                          <button onclick="myFunction()" id="myBtn">En lire plus</button>
                        </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Nos services de création de site web <br> à Périgueux<span class="dot">.</span></h2>
                      <div class="subtitle">Boostez votre activité grâce à des sites web à fort taux de conversion</div>
                    </div>

                    <section class="service-section">
                      <div class="row clearfix">
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-offpage.svg" alt="SEO bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('seo-bordeaux') }}">Optimisation pour les moteurs de recherche - SEO</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Non seulement nos sites Web sont accrocheurs, mais ils sont également conçus dans un souci de stratégie. Nos services de conception de sites Web à Bordeaux comprennent l'optimisation des moteurs de recherche <a href="{{ route('seo-bordeaux') }}">(SEO) </a> s'assurer que vos clients cibles puissent trouver facilement votre site. Nous travaillerons avec vous pour identifier les bons mots-clés, puis nous optimiserons votre site Web en conséquence pour vous assurer une place de choix dans les résultats de recherche.
                                </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/responsive-web.png" alt="Web Responsive Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Conception adaptée aux mobiles</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    En utilisant le responsive web design, nos développeurs web de Périgueux créeront un site web attrayant et facilement consultable sur tout type d'appareil. Sans compter que les visiteurs sont plus susceptibles de passer plus de temps sur votre site. Il y a également plus de chances d'être mieux classé sur les pages de résultats des moteurs de recherche si votre site est adapté aux mobiles - ce qui sera le cas si vous nous laissez le construire, car nous restons toujours au courant des derniers changements d'algorithme de Google.
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
                                      <p>Développement de sites WEB</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nous sommes spécialisés dans la création de sites Web réactifs qui sont à la fois beaux et fonctionnels. Nous pensons que trouver un équilibre entre le design et la fonctionnalité est essentiel pour tout site Web.  Notre équipe d'experts a le souci du détail, ce qui garantit que votre site Web sera à la fois esthétique et convivial.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/wordpress-logo.png" alt="Experts Wordpress à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('wordpress') }}">Experts Wordpress</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nous sommes des experts en conception de sites Web qui utilisent WordPress pour un grand nombre de nos projets, nous comprenons donc extrêmement bien cette plateforme. Si vous souhaitez une refonte de votre site Web WordPress ou si vous avez besoin d'aide pour la mise en œuvre du référencement et d'autres configurations techniques, ne cherchez pas plus loin - nous pouvons vous aider. De plus, nous garantissons que tous vos plugins et versions de WordPress seront à jour.
                                  </p>
                                  </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/redaction-contenu-ville.svg" alt="Rédaction de contenu à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Rédaction de contenu</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre équipe de rédacteurs de contenu basée à Périgueux est toujours au courant des dernières modifications des algorithmes de recherche de Google. Nous ne fournissons que du contenu de qualité, original et adapté à votre public spécifique.  Nous pouvons développer des articles de blog, des communiqués de presse et d'autres types de contenu Web pour aider votre site Web à être mieux classé dans les résultats des moteurs de recherche.
                                  </p>
                                    <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/hebergement-web.png" alt="hebergement web à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Hébergement WEB</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Chez Lyneo, nous comprenons que votre site Web est un élément essentiel de votre entreprise. C'est pourquoi nos forfaits de conception et de développement de sites Web incluent toujours un hébergement Web rapide et fiable. Notre équipe de concepteurs experts à Périgueux crée des sites Web à l'aide de <a href="{{ route('wordpress') }}">WordPress </a>, ce qui garantit que votre site sera optimisé pour la vitesse et l'expérience utilisateur. En nous confiant l'hébergement de votre site web, vous pouvez libérer du temps pour vous concentrer sur la gestion de votre entreprise.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/site-web-sur-mesure.png" alt="site web sur-mesure à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('custom') }}">Création de site web sur-mesure</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Aucune entreprise n'est identique à une autre, alors votre site Web ne doit pas l'être non plus. Notre équipe de concepteurs web à Périgueux travaillera avec vous pour créer un design de site web personnalisé, adapté aux besoins de votre entreprise. Nous sommes fiers de fournir des conceptions web créatives et de haute qualité qui vous aideront à vous démarquer de la concurrence.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/developpement-ecommerce-2.png" alt="hebergement web à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('commerce') }}">Création de sites e-commerce</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Si vous avez besoin d'un site de commerce électronique original et époustouflant, adapté à vos besoins spécifiques, les experts en conception web de notre agence de Périgueux peuvent vous aider. Nos développeurs travailleront avec vous en tête-à-tête pour créer la boutique en ligne parfaite pour votre entreprise.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                      </div>
                    </section>
                    <div class="sec-title mt-5">
                      <h2 class="text-center">Pourquoi choisir Lyneo pour votre site WEB à Périgueux<span class="dot">?</span></h2>
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
                              <p>De nos jours, il est essentiel que vous ne vous associiez pas à n'importe quelle vieille agence de marketing numérique. Vous devez vous assurer de trouver une agence qui non seulement sera à l'écoute de vos objectifs et du message que vous souhaitez faire passer, mais qui vous guidera également afin que votre entreprise obtienne le meilleur retour possible sur son investissement en marketing. Toutes les agences de marketing numérique n'ont pas ce niveau de dévouement.
                              </p>
                            </div>
                          </div>
                          <div class="image-col col-md-4 col-sm-12">
                            <div class="image">
                              <img src="{{ asset('images') }}/team-lyneo-ville.svg" alt="Pourquoi Lyneo à Bordeaux">
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
                              Le site Web de votre entreprise peut être un outil puissant pour vous aider à trouver de nouveaux clients et à augmenter vos ventes. En créant un plan de marketing numérique détaillé, vous pouvez vous assurer que votre site Web génère davantage de revenus pour votre entreprise.
                            </p>
                            <p>
                              L'agence de communication Lyneo à Périgueux peut vous aider à créer un site web qui se classe bien sur Google. Notre équipe de concepteurs expérimentés travaillera en étroite collaboration avec vous pour s'assurer que votre site web reflète parfaitement votre image de marque.
                            </p>
                            <p>
                              En outre, lorsque vous travaillez avec Lyneo, nous vous garantissons que notre service de <a href="{{ route('marketing-bordeaux') }}">marketing digital</a> sera inégalé :
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
                                    Lyneo se consacre à la satisfaction de ses clients. Nous prenons soin d'écouter les suggestions de nos clients et d'utiliser leurs commentaires lors de la formulation de plans afin de mieux répondre à leurs besoins.
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
                                    Nos succès passés et nos clients satisfaits suffisent à prouver notre crédibilité : Lyneo est l'une des meilleures agences de création de sites Web à Périgueux. Nous sommes des experts dans l'organisation de campagnes de marketing numérique efficaces.
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
                                  Nos développeurs à Périgueux utilisent toujours un code clair pour améliorer l'expérience de l'utilisateur web, la vitesse du site et l'autorité. Cela signifie que le langage de programmation derrière votre site web est facile à comprendre et sans erreur.
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
                                Chez Lyneo, nous sommes fiers d'être une agence de conception web ouverte et honnête. Nous tenons nos clients informés de l'état d'avancement de leurs projets grâce à notre portail en ligne, afin qu'ils soient toujours dans la boucle. Travailler avec nous est facile et transparent - il n'y a pas de secrets ou de surprises.
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
                                Nous savons combien il est important de respecter les délais. C'est pourquoi nous garantissons que tous nos projets de conception web seront livrés à temps, à chaque fois. Vous pouvez ainsi vous concentrer sur ce qui est vraiment important : la gestion de votre entreprise.
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
                              Lyneo est fier de présenter des sites Web uniques pour chaque projet. Contrairement à d'autres entreprises, nous ne croyons pas au modèle de la taille unique. Nos conceptions web personnalisées permettent à votre personnalité et à votre marque de transparaître, ce qui vous aide à vous démarquer des autres. De plus, notre équipe d'experts en conception de sites Web est basée à Périgueux et est toujours disponible pour répondre à toutes vos questions ou préoccupations.
                            </p>                                <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
              </div><!-- /.auto-container -->
            </div>

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
                                  <p>
                                    Une agence web est spécialisée dans la création de sites web professionnels, y compris les aspects de conception et de développement. Souvent, elles donnent également des conseils sur d'autres étapes nécessaires au lancement d'un site Web réussi, comme un audit Web initial ou une analyse des sites concurrents.
                                  </p>
                                  <p>
                                    En tant que concepteur de sites Web, il est important de tenir compte de l'expérience des utilisateurs lors de la conception de sites Web. Cela implique de considérer des aspects tels que la navigation, l'ergonomie et la conception graphique.
                                 </p>
                                 <p>
                                  En tant que développeur web, il est important de choisir le développement qui convient au projet. Par exemple, en considérant les technologies et les outils de gestion de contenu. Et tout en faisant cela, il faut s'assurer que le code est propre et efficace.
                                 </p>
                                 <p>
                                  En outre, une agence web doit soutenir ses clients dans la mise à jour de leurs sites web (par exemple, la maintenance et la mise à niveau des sites web). De nos jours, les agences web généralistes peuvent également proposer des services de marketing numérique tels que le référencement naturel (SEO), la gestion des campagnes Google Ads et la gestion des comptes de médias sociaux.
                                 </p>
                                 <p>
                                  Si vous voulez déléguer tout le travail, cherchez une agence web qui offre tout ce dont vous avez besoin. Si vous voulez seulement que quelqu'un conçoive votre site Web, trouvez une agence spécialisée dans l'UX et la création de contenu, puis associez-vous à des agences dédiées au SEO, au SEA et au marketing des médias sociaux.
                                 </p>
                                <p>
                                  Une agence web réussit à atteindre vos objectifs et à créer un site web de qualité lorsqu'elle dispose de consultants, de chefs de projet, de concepteurs web et de développeurs compétents travaillant ensemble de manière efficace. Les meilleures agences vous fourniront également des experts en UX, en SEO, en médias sociaux et en contenu pour exécuter votre vision de manière irréprochable.
                                </p>

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
                                    Lyneo est une agence de conseil et de création de sites web basée à Bordeaux en Gironde. Notre expertise réside dans la conception web professionnelle et le marketing digital, et nous sommes reconnus pour notre réactivité.
                                  </p>
                                  <p>
                                    Dans notre entreprise, vous travaillerez avec des professionnels parmi les plus qualifiés de Bordeaux, qui seront ravis de vous aider à réussir. Notre équipe se compose de consultants, de chefs de projet, de graphistes, de développeurs et de webmasters.
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

