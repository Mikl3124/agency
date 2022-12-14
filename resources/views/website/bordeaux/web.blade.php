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
                      <h1>Agence Web à <br>Bordeaux</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Bordeaux - Agence Web</li>
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
                          <h4 class="text-center">Atteignez vos objectifs commerciaux avec des sites web à fort taux de conversion<span class="dot">.</span></h4>
                        </div>
                          <div class="main-image image">
                            <img src="{{ asset('images') }}/web-ville.svg" alt="creation site web à bordeaux">
                          </div>
                          <div class="text-content">
                            <p>Lyneo est une agence de création de sites Web située à Bordeaux, en Aquitaine, qui se concentre sur l'optimisation des sites Web afin de générer du trafic et des ventes pour les petites et grandes entreprises ainsi que les marques.<br><span id="dots">...</span><span id="more">
                              Lyneo emploie des experts en développement web à Bordeaux qui apportent leur expérience et leurs compétences. Nous vous aidons à lancer ou à réorganiser votre site web et à mettre en œuvre des stratégies pour générer des prospects et des ventes.<br>
                              Aujourd'hui, l'industrie et le commerce à Bordeaux est en pleine croissance. De nouveaux centres de formation aux métiers de l'industrie et du commerce, fleurissent un peu partout. Ils forment les talents de demain, et il est facile de voir l'augmentation des investissements dans la R&D.<br>
                              Créer une entreprise à Bordeaux peut cependant s'avérer difficile, surtout lorsqu'il y a un nombre considérable de concurrents sur le marché. De nos jours, vous avez besoin d'une solide stratégie de marketing numérique pour rester au sommet du jeu et battre la concurrence.<br>
                              Avec l'agence de création de site web Lyneo à bordeaux, vous pouvez compter sur nos spécialistes de la conception web Bordelais qui ont des années d'expertise et d'expérience. Outre la création de sites Web optimisés, nous proposons des services complémentaires tels que la recherche de mots-clés, le marketing des médias sociaux et la rédaction de contenu.
                            </span>
                            <button onclick="myFunction()" id="myBtn">En lire plus</button>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Nos services de création de site web <br> à Bordeaux<span class="dot">.</span></h2>
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
                                    Nos sites Web sont aussi stratégiques qu'attrayants. Nos services de création de sites Web à Bordeaux comprennent des stratégies d'optimisation pour les moteurs de recherche <a href="{{ route('seo-bordeaux') }}">(SEO)</a> afin de vous garantir que vos clients trouvent votre site Web. Nos experts à conception de sites internet à Bordeaux trouvent les bons mots clés et optimisent votre site web pour qu'il soit classé dans les résultats de recherche.
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
                                    Nos développeurs web de Bordeaux vous aideront à créer un site web qui sera attractif sur n'importe quel appareil grâce au responsive web design. Le responsive web design est essentiel pour que les visiteurs restent plus longtemps en contact avec votre contenu. Vous avez également de meilleures chances de vous classer sur les pages de résultats des moteurs de recherche si votre site est adapté aux mobiles, car vous restez en phase avec les dernières mises à jour des algorithmes de Google.
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
                                    Lorsqu'il s'agit de conception et de développement de sites web, nous veillons à trouver un équilibre délicat entre design et fonctionnalité. Nous nous concentrons sur la création de sites Web réactifs, conviviaux et à fort taux de conversion.
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
                                    Nos experts en création de sites web à Bordeaux utilisent WordPress pour de nombreux projets, nous connaissons donc exceptionnellement bien cette plateforme. Nous pouvons vous aider avec une refonte de site WordPress, la mise en œuvre du référencement et d'autres configurations techniques. Nous nous assurons également que tous vos plugins et les versions de WordPress sont à jour.
                                  </p>                                  <!-- /.how-it-works-card__link -->
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
                                    Notre équipe dédiée de spécialistes en rédaction de contenu au sein de notre société de conception de sites Web à Bordeaux est constamment informée des dernières modifications apportées aux algorithmes de recherche de Google. Nous nous engageons à fournir un contenu unique et de qualité qui est conçu pour le public ciblé.
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
                                    Les forfaits de conception et de développement web de Lyneo incluent un hébergement web rapide et fiable. Nos experts en conception de sites Web à Bordeaux utilisent essentiellement <a href="{{ route('wordpress') }}">WordPress </a>pour créer des sites Web qui sont optimisés pour la vitesse et l'expérience utilisateur. Héberger votre site web avec nous signifie moins de tâches techniques pour vous et plus de temps pour votre entreprise.                                    <!-- /.how-it-works-card__link -->
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
                                    Votre entreprise ne ressemble à aucune autre, votre site Web doit donc être unique. Nous sommes à votre disposition pour  créer le site web de vos rêves dans le cadre de nos services de création de site internet à Bordeaux. Nos designers web créatifs Bordelais sont prêts à collaborer avec vous et à fournir un design web personnalisé qui répond aux besoins de votre entreprise.
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
                                    Vous avez besoin de créer votre site de e-commerce sans utiliser les plateformes populaires ? L'équipe d'experts en création de sites internet de notre agence de Bordeaux peut créer votre boutique en ligne personnalisée, belle et optimisée. Nos développeurs web collaboreront avec vous pour obtenir le site e-commerce parfait que vous souhaitez.
                                  </p>
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                      </div>
                    </section>
                    <div class="sec-title mt-5">
                      <h2 class="text-center">Pourquoi choisir Lyneo pour votre site WEB à Bordeaux<span class="dot">?</span></h2>
                      <div class="subtitle">Une création de site web stratégique et innovante qui convient à votre entreprise</div>
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
                              Les sites web peuvent être une excellente plateforme pour générer plus de revenus pour votre entreprise. Avec un plan de marketing numérique approprié, le site Web de votre entreprise peut vous aider à trouver de nouveaux clients et à stimuler les ventes.
                            </p>
                            <p>
                              L'agence de création de sites Web Lyneo à Bordeaux peut vous aider à créer un site Web qui se classe dans Google. Notre équipe de conception web de Bordeaux peut également travailler avec vous pour s'assurer que votre site web reflète parfaitement votre image de marque.
                            </p>
                            <p>
                              Lorsque vous travaillez avec Lyneo, vous avez la garantie de recevoir le meilleur service de <a href="{{ route('marketing-bordeaux') }}">marketing digital</a> :
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
                                      <p>Les clients d'abord</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Chez Lyneo, nous sommes extrêmement concentrés sur la satisfaction des besoins de nos clients. Nous prenons le temps d'écouter les préoccupations et les idées de nos clients, afin que nos plans d'action soient alignés sur un objectif unifié.
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
                                    Nos réalisations et nos anciens clients parlent d'eux-mêmes. Lyneo a gagné sa place parmi les meilleures agences de création de sites web à Bordeaux parce que nous sommes excellents dans la conduite de campagnes de marketing numérique réussies.
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
                                  Nos développeurs web de Bordeaux utilisent un code propre, ce qui signifie que le langage de programmation de votre site web est exempt d'erreurs et facile à comprendre. Un site Web avec un code da qualité améliore l'expérience utilisateur, augmente la vitesse du site et renforce l'autorité.
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
                                Lyneo mène la relation commerciale avec ses clients de manière claire et transparente. Nous fournissons à nos clients un portail en ligne où ils peuvent voir l'état d'avancement de leurs projets. Il n'y a pas de secrets ou de surprises lorsque vous travaillez avec notre agence de création de site web à Bordeaux.
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
                                Nous comprenons l'importance du respect des délais. Chez Lyneo, vous n'avez jamais à vous soucier des projets et des livraisons en retard. Vous avez l'assurance que chaque tâche de création de site web est terminée à temps, et ce en permanence.
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
                              Lyneo est fier de créer des sites web uniques pour chaque projet. Nous nous efforçons d'être différents de la concurrence et de nous démarquer avec nos conceptions web personnalisées. Notre équipe de spécialistes dans le création de site web à Bordeaux fera toujours le maximum pour satisfaire vos besoins.
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
                                    Une agence web ne se contente pas de concevoir et de construire des sites web professionnels, mais offre également des conseils sur les étapes essentielles à suivre pour un lancement réussi du site web. Celles-ci comprennent un audit web initial ou une analyse de la concurrence.
                                  </p>
                                  <p>
                                    Le travail d'un concepteur de sites Web consiste non seulement à rendre un site Web attrayant, mais aussi à s'assurer qu'il est facile à utiliser et à naviguer.
                                  </p>
                                  <p>
                                    Lorsque vous êtes un développeur web, le choix de la méthode de développement parfaite est la clé du succès. Cela inclut la prise en compte des technologies et des outils de gestion de contenu. Cependant, il est également essentiel que votre code soit propre et fonctionne sans problème.
                                  </p>
                                  <p>
                                    En outre, une agence web doit aider ses clients qui souhaitent mettre à jour leurs sites web (par exemple, la maintenance et la mise à niveau des sites web). De nos jours, il est courant que les agences web fournissent des services de marketing numérique tels que l'optimisation des moteurs de recherche (SEO), la gestion des campagnes Google Ads et la gestion des comptes de médias sociaux.
                                  </p>
                                  <p>
                                    Si vous voulez tout déléguer, recherchez une agence web qui offre ce dont vous avez besoin. Si vous avez seulement besoin de quelqu'un pour concevoir votre site Web, cherchez une agence spécialisée dans l'UX et la création de contenu. Ensuite, trouvez des agences qui se concentrent sur le SEO, le SEA et le marketing des médias sociaux avec lesquelles former des partenariats.
                                  </p>
                                  <p>
                                    Le succès d'une agence web dépend de son équipe - un groupe compétent de consultants, de chefs de projet, de concepteurs et de développeurs web travaillant ensemble efficacement. Mais les meilleures agences vous fourniront également des experts en UX, SEO, médias sociaux et contenu pour vous aider à donner vie à votre vision de manière irréprochable.
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
                                    En fonction des qualifications requises par votre projet, vous pouvez soit engager un freelance, soit une agence Internet. D'autres facteurs tels que les personnes qui doivent être impliquées dans le projet et votre budget entrent également en ligne de compte.
                                  </p>
                                  <p>
                                    Alors que les agences web sont les mieux placées pour les projets difficiles, les indépendants du web qui s'associent peuvent fournir des services étonnants qui ne peuvent que s'améliorer grâce à leurs diverses compétences.
                                  </p>
                                  <p>
                                    Ils devront acquérir les compétences nécessaires. Des services tels que la conception et la création de sites Web, ou une expertise particulière, peuvent être confiés à un seul freelance. Ou - comme le suggère notre agence de communication web Lyneo - rassembler les compétences de plusieurs agences et freelances pour un seul projet.
                                  </p>
                                  <p>
                                    L'agence web Bordelaise parfaite pour vous existe, mais elle peut être difficile à trouver. Cela dépend de votre budget, de la taille et du type de projet, de la créativité requise et des technologies nécessaires. Comparez les agences en examinant leurs projets antérieurs en ligne. Si elles ont réalisé un travail similaire à celui dont vous avez besoin, c'est bon signe !
                                  </p>
                                  <p>
                                    Un moyen infaillible de tester la réactivité d'une agence web est d'essayer de la contacter par e-mail et par téléphone. Cela vous permettra d'avoir l'esprit tranquille quant à leur disponibilité - ce qui est essentiel. Une fois cette étape franchie, demandez des devis à différentes agences pour votre projet de site Web en faisant attention à la qualité de chaque réponse, si elle est adaptée à vos besoins, si elle offre une personnalisation, ainsi qu'une description détaillée des délais et des processus.
                                  </p>
                                  <p>
                                    Pour éviter tout problème, prenez le temps, dès le début, d'envoyer une expression détaillée de vos besoins à différentes agences web (comme un appel d'offres ou un cahier des charges). Veillez à être clair, concis et complet dans votre explication. Enfin, suivez votre intuition sur la base des critères ci-dessus - cela vous aidera à choisir non seulement la meilleure agence web possible, mais aussi celle qui est parfaite pour VOTRE projet spécifique.
                                  </p>

                                </div>
                            </div>
                        </div>
                      </li>
                      <li class="accordion block">
                        <div class="acc-btn"><span class="count">3.</span> Pourquoi choisir notre Agence Web Lyneo à Bordeaux ?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  <p>
                                    Lyneo est une agence de conseil web et un concepteur de sites web basée à Périgueux, en France. Nous avons une grande expertise dans la conception de sites web professionnels et le marketing numérique, et nous sommes connus pour notre réactivité.
                                  </p>
                                  <p>
                                    Notre équipe est composée de consultants, de chefs de projet, de graphistes, de designers, de développeurs et de webmasters qui sont tous disponibles pour vous fournir le meilleur service possible.
                                  </p>
                                  <p>
                                    Chez Lyneo, nous sommes fiers de développer des conceptions web robustes et durables. Notre équipe est composée de personnes compétentes qui se spécialisent dans différents aspects de la conception web, du conseil au développement en passant par le référencement.
                                  </p>
                                  <p>
                                    Cela nous permet de créer des sites Web qui sont non seulement visuellement attrayants mais aussi bien classés dans les moteurs de recherche. Nous avons aidé de nombreux clients à obtenir les résultats souhaités grâce à nos solutions innovantes et efficaces.
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
                                    Si vous avez besoin d'un nouveau site Web, notre agence est l'endroit idéal pour vous ! Nous créons des sites web professionnels clés en main adaptés à vos besoins, notamment des sites vitrines, des sites institutionnels et des sites de commerce électronique.
                                  </p>
                                  <p>
                                    Nos sites Web sont conviviaux pour les mobiles et réactifs, créés avec le CMS WordPress ou le framework Laravel selon le projet. Notre agence est spécialisée dans la création et la refonte de sites Web qui vous apporteront un retour sur investissement rapide et vous aideront à atteindre de nouveaux clients.
                                  </p>
                                  <p>
                                    Nous proposons également des forfaits d'hébergement Web pour garantir que votre site Web fonctionne toujours de manière rapide et fiable. Nos serveurs sont situés à Périgueux, en France, et sont régulièrement sauvegardés pour une sécurité accrue. Avec nos forfaits d'hébergement, vous pouvez être sûr que votre site Web sera disponible 24 heures sur 24, 7 jours sur 7, sans aucun temps d'arrêt ou de chargement lent.
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
                                    Une agence web expérimentée vous soutiendra et vous conseillera tout au long de votre projet, du début à la fin. Cela comprend le travail préliminaire (analyse comparative des concurrents, audits numériques, études de marché, etc.) ainsi que la maintenance continue une fois que votre site Web est en ligne (optimisation, mises à jour, maintenance, développement, etc.)
                                  </p>
                                  <p>
                                    Le coût d'un tel service dépend de divers facteurs tels que les fonctionnalités souhaitées, la complexité du design, le nombre de modèles, etc.
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

