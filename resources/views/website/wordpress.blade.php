@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/wordpress.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Sites Wordpress</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li><a href="{{ route("developpement") }}">Développement Web</a></li>
                              <li class="active">Site Wordpress</li>
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
                            <img src="{{ asset('images') }}/developpement web.png" alt="site web">
                          </div>
                          <div class="text-content">
                            <div class="sec-title">
                              <h2>Boostez vos ventes grâce à des solutions de sites web adaptées à vos besoins<span class="dot">.</span></h2>
                            </div>
                            <p>
                                Nous sommes une entreprise de conception de sites WordPress, fiable et axée sur les résultats. La gestion de votre site Web doit être simple, et nos experts <a href="https://wordpress.com/fr/">WordPress</a> vous installent sur la plateforme Web la plus conviviale qui soit.<br>
                                Créez un site à fort taux de conversion optimisé pour la recherche avec nos services de conception et de développement WordPress de notre agence de marketing numérique Lyneo.
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
                                            <h4>Qu'est-ce que WordPress ?</h4>
                                            <p>Obtenez des résultats avec le système de gestion de contenu le plus populaire</p>
                                            <ul>
                                                <li>Code source totalement gratuit</li>
                                                <li>Gestion très facile</li>
                                                <li>Excellente capacité de référencement</li>
                                                <li>Rapide à déployer</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Si vous avez effectué une recherche Google sur "qu'est-ce que WordPress?", vous l'avez très probablement fait après avoir fait l'expérience d'un site Web WordPress. WordPress est un outil de création de sites Web qui alimente plus de 38 % du Web, ce qui signifie qu'environ 1 site Web sur 3 fait confiance aux services de WordPress.<br>
                              Si vous avez cherché "comment créer un site Web WordPress?", vous constaterez que ce CMS est considéré comme incroyablement conviviale et facile à comprendre.</p>
                            <p>Dans un site Wordpress, ce sont les thèmes qui déterminent l'aspect et la convivialité de votre site Web, tandis que les plugins ajoutent des fonctionnalités, comme l'ajout d'un formulaire de contact ou l'installation d'outils d'optimisation des moteurs de recherche (<a href="{{ route('seo') }}">SEO</a>). <br>
                              En général, un concepteur WordPress se concentre sur votre image de marque et vos éléments visuels, tandis qu'un développeur WordPress s'occupe du code.<br>

                              Les possibilités sont infinies avec un site WordPress, mais vous avez besoin d'une équipe professionnelle de conception et de développement WordPress pour donner vie à votre vision.</p>
                        </div>
                  </div>
                </div>
                <div class="link-box my-4 text-center">
                  <a class="theme-btn btn-style-one" href="{{ route('contact') }}">
                      <i class="btn-curve"></i>
                      <span class="btn-title">Vous avez besoin d'un site WordPress?</span>
                  </a>
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 mt-5">
                  <div class="service-details">
                      <div class="text-content">
                          <div class="featured">
                              <div class="row clearfix">
                                <div class="text-col col-md-7 col-sm-12">
                                  <div class="inner">
                                      <h4>Pourquoi votre entreprise devrait utiliser WordPress pour son site web?</h4>
                                      <p class="text-primary"><i>"Soyez facilement trouvable en ligne grâce à un site optimisé pour les recherches"</i></p>
                                      <p>Nous avons abordé les thèmes "qu'est-ce que WordPress" et "à quoi sert WordPress", mais pour comprendre ses avantages, nous allons voir, pourquoi la conception de sites WordPress est avantageuse pour votre entreprise - et, non, vous n'avez pas besoin d'être un concepteur WordPress ou un développeur WordPress expérimenté pour le comprendre.
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
                                    Pour obtenir plus de ventes, votre site Web doit d'abord être trouvé en ligne. Ensuite, votre conception web doit être accrocheuse et présenter toutes les informations dont vos clients potentiels ont besoin. Il doit avoir une navigation intuitive et offrir la meilleure expérience de navigation.
                                  <br>
                                    Grâce à notre équipe WordPress, tout ce que votre site web devrait être est rendu possible avec nos services de développement WordPress.
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
                                <img class="my-5 icon-box" src="{{ asset('images') }}/design-flexibility-wordpress.svg" alt="Flexibilité Wordpress">
                                <h3 class="how-it-works-card__title">
                                      <a href="team.html">Conception Flexible</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Entre les mains d'un expert WordPress, vous disposez d'une plateforme web entièrement personnalisable, c'est un CMS idéal pour créer pratiquement tout type de site web. Présentez votre site d'entreprise, votre blog ou votre boutique e-commerce comme vous le souhaitez grâce à la conception de sites Web WordPress.<br>
                                    Il existe plus de 5 000 <a href="https://fr.wordpress.org/themes/">thèmes WordPress</a> gratuits qui servent de base pour concevoir un site Web WordPress de la bonne manière et un développeur WordPress peut en créer un uniquement pour vous.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                      </div><!-- /.col-md-12 col-lg-6 -->
                      <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box" src="{{ asset('images') }}/content-management.svg" alt="Facilité d'utilisation de Wordpress">
                                  <h3 class="how-it-works-card__title">
                                      <a href="about.html">Facile d'utilisation</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    L'administration de votre site ne devrait pas être compliquée. L'équipe développement WordPress a spécifiquement conçu la plateforme pour répondre aux besoins d'un public non technique. Le CMS WordPress est si intuitif, il peut donner à n'importe qui l'impression d'être un développeur web WordPress. Il suffit de se connecter à votre tableau de bord d'administration WordPress, d'ajouter ou de mettre à jour votre contenu web et de voir les changements instantanément lorsque vous rafraîchissez la page.
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
                              <img class="my-5 icon-box" src="{{ asset('images') }}/powerfull-plugins.svg" alt="Plugins Wordpress performants">
                                <h3 class="how-it-works-card__title">
                                    <a href="team.html">Des plugins performants</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  WordPress est connu comme un simple éditeur visuel, mais l'étendue de ses capacités de conception de sites Web recèle beaucoup de puissance. Grâce aux plugins, vous pouvez ajouter des formulaires personnalisés, des caroussels et bien d'autres éléments indispensables à votre site Web, en plus de puissants outils d'analyse et de référencement WordPress. Les plus de 50 000 plugins gratuits simplifient la création d'un site Web WordPress avec une fonctionnalité complète.
                                </p><!-- /.how-it-works-card__text -->
                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="how-it-works-card text-center">
                            <div class="how-it-works-card__inner">
                              <img class="my-5 icon-box" src="{{ asset('images') }}/seo-ready-design.svg" alt="referencement Wordpress">
                                <h3 class="how-it-works-card__title">
                                    <a href="about.html">Prêt pour le référencement</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  En plus des excellents plugins WordPress pour le SEO, la plateforme est structurée pour rendre l'optimisation de votre site aussi facile que possible. Vous pouvez aisément inclure vos mots-clés dans vos permaliens, ajouter des métadonnées sur tous les articles et optimiser vos images avec du texte alt. Mieux encore, les thèmes et plugins WordPress sont connus pour offrir une excellente expérience utilisateur que Google récompense par un meilleur classement dans les moteurs de recherche.                                  </p><!-- /.how-it-works-card__text -->
                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
              </div><!-- /.auto-container -->
              <!--Content Side-->
              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="service-details">
                  <div class="text-content">
                    <div class="featured">
                      <div class="row clearfix">
                        <div class="image-col col-md-5 col-sm-12 align-middle">
                          <div class="image">
                            <img src="{{ asset('images') }}/experts-wordpress.png" alt="Expezrts Wordpress">
                          </div>
                        </div>
                        <div class="text-col col-md-7 col-sm-12 mt-5">
                          <div class="sec-title centered">
                            <h4>Experts Wordpress</h4>
                          </div>

                          <div class="inner">
                            <p>
                              Nos experts WordPress, développent votre site internet pour qu'il soit le plus performant possible, qu'il attire encore plus de trafic et qu'il génère au final plus de prospects.<br>
                              Par rapport au <a href="{{ route('custom') }}">développement de votre site à partir de zéro</a> (également appelé "from scratch"), travailler avec une agence Web spécialisée WordPress, vous permet d'avoir un <b>site optimisé</b> pour la vente, <b>plus rapidement</b> et à un <b>prix beaucoup moins élevé</b>.
                            </p>
                            <p>
                              L'agence Lyneo vous propose des sites Web WordPress axés sur l'optimisation de l'expérience utilisateur (UX) - ce qui est un point clé pour les moteurs de recherche et encore meilleur pour vos conversions.
                            </p>
                            <p>
                              Nous concevons votre site Web WordPress en pensant d'abord à l'utilisateur, tout en gardant à l'esprit que celui doit servir à optimiser les ventes. <a href="https://calendly.com/m-lyneo/30min">Planifiez un appel </a> avec un expert WordPress, pour discuter de votre projet. </p>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--FAQ section-->
              <section class="faqs-section mb-5">
                <div class="sec-title centered">
                  <h2>Pourquoi Lyneo pour votre site WordPress<span class="dot">?</span></h2>
                  <p class="subtitle"=>"Impressionnez vos clients avec un site attrayant et fonctionnel"</p>
                </div>
                <div class="text-center mb-5">
                </div>

                <div class="auto-container">
                  <div class="row clearfix">
                    <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                      <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">1.</span> Nous sommes plus qu'une agence Wordpress</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">Outre nos services de conception de sites Web WordPress, l'équipe Lyneo est composée d'experts en <a href="{{ route('marketing-digital')}}">marketing numérique</a>  - <a href="{{ route('seo') }}">SEO</a>, <a href="{{ route('publicite-en-ligne') }}">pay-per-click</a> , médias sociaux et autres. Nous adoptons une approche holistique pour proposer nos services de développement de sites WordPress afin de maximiser vos résultats. Profitez des avantages de notre agence 360 à des prix flexibles pour la conception de sites WordPress.</div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">2.</span> Nous élaborons des stratégies centrées sur le client</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">Notre agence de création de site WordPress accorde la plus grande importance à vos objectifs commerciaux  - et c'est le point de départ de nos services de développement WordPress. Nous adoptons une approche particulière pour la création de votre site afin d'atteindre des objectifs tels que l'augmentation des prospects, l'amélioration de l'identité de votre marque et la vente de produits. Nos services de gestion WordPress sont axés sur la création d'un site Web authentique et à fort taux de conversion.</div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">3.</span> Nous créons des sites axés sur les ventes</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le plus grand avantage de travailler avec notre agence de conception de sites WordPress, est que nous savons comment stimuler les ventes. Nous pouvons inclure, sans surplus tarifaire, vos besoins en marketing numérique lors de la conception de votre site Worprss. Pour axer votre site sur les ventes, nous ajoutons des appels à l'action (CTA) clairs, simplifions la navigation sur vos pages et effectuons des tests A/B qui déterminent vos stratégies les plus rentables.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">4.</span> Nous offrons des analyses de sites Web de grande qualité</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Votre site web est la pierre angulaire du succès de votre marque et de vos stratégies de marketing numérique. Nous installons des outils d'analyse avancés, et de suivi du site. Nous générons des rapports pour vous permettre de mesurer le succès de vos campagnes. Notre développeur WordPress vérifie l'exactitude de vos données dans le cadre de nos services de maintenance WordPress.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">5.</span> Nous gardons une longueur d'avance</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Chaque concepteur WordPress chez Lyneo se tient au courant des dernières tendances en matière de conception afin d'asseoir notre position d'expert Wordpress. Nous nous assurons que nos stratégies de développement WordPress soient mises à jour pour les changements importants, tels que les mises à jour du CMS, les changements de directives de l'ADA et les mises à jour des algorithmes des moteurs de recherche.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">6.</span> Nous respectons les délais</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le délai de développement est varaible, il peut être de 2 semaines comme 20 semaines, en fonction de la complexité du site. Nous ne ferons jamais de fausses promesses et nous nous en tiendrons à un calendrier réaliste et convenu d'un commun accord. Notre agence WordPress respectera toujours les étapes de développement. Chez Lyneo, nous accordons de l'importance à la rapidité et à la réactivité, et nous fournissons un travail qui répond à vos besoins et vous donne 100% de satisfaction.
                                  </div>
                              </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>

              <!--Content Side-->
              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="service-details">
                  <div class="text-content">
                    <div class="featured">
                      <div class="row clearfix">
                        <div class="text-col col-md-6 col-sm-12">
                          <div class="inner">
                            <h4>Le processus de notre expert WordPress</h4>
                              <p>
                                Maintenant que vous connaissez les réponses à la question de savoir ce qu'est WordPress, à quoi sert WordPress et pourquoi précisément vous avez besoin d'un site WordPress, il ne vous reste plus qu'à vous lancer.<br>
                                Travailler avec une agence de développement WordPress telle que Lyneo vous offre la meilleure expérience client et des résultats significatifs.<br>
                                Nous propulsons votre succès en ligne grâce à notre processus d'expertise et à l'attention extrême que nous portons à nos clients.
                              </p>
                              <ol>
                                <li>
                                  <span class="count-list">1.</span> Nos experts formulent des recommandations fondées sur une compréhension totale de vos objectifs.
                                </li>
                                <li>
                                  <span class="count-list">2.</span> Nous définissons l'étendue de votre projet et mobilisons l'équipe qui construira votre site.
                                </li>
                                <li>
                                  <span class="count-list">3.</span> Votre chef de projet fournit des services WordPress adaptés à vos besoins.

                                </li>
                                <li>
                                  <span class="count-list">4.</span> Vous bénéficiez d'un accès administratif complet et d'un contrôle total sur votre site.
                                </li>
                                <li>
                                  <span class="count-list">5.</span> Nous restons en contact et offrons nos services d'assistance WordPress imbattables.
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="image-col col-md-6 col-sm-12">
                            <div class="image">
                                <img src="{{ asset('images') }}/process-wordpress.png" alt="Qu'est ce que Wordpress">
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>L'agence de marketing internet Lyneo est spécialisée dans WordPress depuis 2018. Avec Lyneo, vous bénéficiez d'un tarif de conception de site WordPress très avantageuse.<br>
                        Une fois que votre site est en ligne et fonctionnel, vous pouvez compter sur nos services de maintenance WordPress pour vous assurer que votre site Web est toujours pleinement opérationnel et qu'il a fière allure.<br>
                        Faites confiance à nos experts WordPress pour permettre à votre site web de vous apporter des prospects qualifiés pendant que vous travaillez sur votre activité principale.
                      </p>
                      <p>
                        <a href="https://tidycal.com/lyneo/discutons-de-votre-projet">Planifiez un appel</a> dès aujourd'hui pour découvrir les meilleures solutions WordPress qui s'offrent à vous, en fonction de votre budget.
                      </p>
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
                  <h2>Besoin d'un site Wordpress?<br>Vous avez des questions?</h2>
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
