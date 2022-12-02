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
                      <h1>Agence SEO à <br>Bordeaux</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Bordeaux - Agence SEO (Search Engine Optimisation)</li>
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
                          <h4 class="text-center">Rendez votre entreprise visible sur le web.<br>Grâce à une stratégie SEO<span class="dot">.</span></h4>
                        </div>
                          <div class="main-image image">
                            <img src="{{ asset('images') }}/seo-ville.svg" alt="seo à bordeaux">
                          </div>
                          <div class="text-content">
                            <p>Lyneo est une agence de référencement naturel située à Bordeaux, en Aquitaine. Notre agence propose des services de recherche de mots clés et de stratégie pour aider les entreprises à gagner en visibilité en ligne. <br><span id="dots">...</span><span id="more">Les services de référencement de Lyneo à Bordeaux englobent la rédaction de contenu, la stratégie SEO et la création de liens.<br>
                              Bordeaux est également le plus grand ensemble urbain inscrit sur la liste du patrimoine mondial de l'UNESCO, avec 350 bâtiments couvrant une zone de 1810 hectares. Le style architectural de Bordeaux repose sur l'unité puisque le style des bâtiments a été préservé depuis environ 300 ans (le XVIIIe siècle étant l'âge d'or du commerce du vin).

                              Idéalement située sur le coude de la Garonne, et proche de l'océan Atlantique, Bordeaux reste un grand port maritime et une ville de commerce active. La ville a été la résidence de grands philosophes et hommes politiques comme Etienne de la Boétie, Montaigne ou Montesquieu.<br>
                              Votre entreprise doit être le point de mire des visiteurs et des habitants de Bordeaux. Nos experts en référencement de Bordeaux aident les entreprises comme la vôtre à établir une présence numérique qui vous positionne devant vos clients. Apprenez-en plus sur notre agence SEO Bordelaise aujourd'hui !
                            </span>
                            <button onclick="myFunction()" id="myBtn">En lire plus</button>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Nos services SEO à Bordeaux<span class="dot">.</span></h2>
                      <div class="subtitle">Attirez les bons clients grâce à un contenu optimisé</div>
                    </div>

                    <section class="service-section">
                      <div class="row clearfix">
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/recherche-mots-cle-bordeaux.svg" alt="Recherche mots clé bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Recherche et stratégie de mots clés<p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Trouver des mots-clés pour votre site web est une tâche essentielle et nous pouvons le faire pour vous. Nos experts en référencement chez Lyneo vous aident à mettre votre contenu en face de personnes pertinentes avec la bonne recherche de mots-clés et la bonne stratégie.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/link-building-bordeaux.svg" alt="Recherche mots clé bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Création de liens<p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Faites de votre entreprise une autorité dans votre secteur grâce à des méthodes de création de liens de qualité. Nos spécialistes den link-building mettent en œuvre des stratégies personnalisées pour obtenir des liens retour vers votre site, afin qu'il gagne en autorité au fil du temps.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/redaction-contenu-ville.svg" alt="Rédaction de contenu à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>Rédaction de contenu<p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Toute entreprise peut tirer profit d'une rédaction de contenu qui engage, informe et responsabilise les lecteurs. Notre équipe de spécialistes du contenu est experte dans la création de contenus uniques et pertinents pour votre public.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/on-page-seo.svg" alt="SEO one page à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('seo') }}">Référencement en ligne</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Faites en sorte que chaque page de votre site web vous ramène des prospects ou des clients. Nos experts en référencement à Bordeaux ont des années d'expérience dans la création de pages web optimisées SEO, pour booster votre classement sur le moteurs de recherche. Avec une bonne stratégie SEO, vous êtes sûr d'attirer plus de trafic, et donc plus de clients.                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-local-bordeaux.svg" alt="SEO local à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <a href="{{ route('seo-local') }}">SEO Local</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Les clients qui habitent près de votre entreprise peuvent vous trouver plus rapidement lorsque vous optimisez votre site Web pour le référencement local. Notre service de référencement local comprend la création de votre profil Google My Business et son optimisation pour qu'il apparaisse dans les résultats de recherche du pack local.
                                  </p>

                                    <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-ecommerce-bordeaux.svg" alt="SEO e-commerce à Bordeaux">
                                <h3 class="how-it-works-card__title">
                                      <p>SEO e-commerce</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Développez votre site e-commerce grâce à des stratégies d'optimisation pour les moteurs de recherche conçues spécifiquement pour les boutiques en ligne. Nos spécialistes du SEO pour e-commerce à Bordeaux créent des listes de produits à fort taux de conversion et des pages de produits à chargement rapide.
                                  </p>
                                    <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->

                      </div>
                    </section>
                    <div class="sec-title mt-5">
                      <h2 class="text-center">Pourquoi choisir Lyneo pour votre SEO à Bordeaux<span class="dot">?</span></h2>
                      <div class="subtitle">Des stratégies de marketing basées la data, au service de vos ventes</div>
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
                            <p>L'optimisation pour les moteurs de recherche est un élément essentiel d'une campagne de marketing réussie. Le référencement est le facteur qui rend votre contenu pertinent pour votre public. Sans le référencement, toute autre initiative marketing est vouée à l'échec.<br>
                              Notre agence de référencement à Bordeaux aide les entreprises à accroître leur clientèle et à atteindre leurs objectifs de revenus grâce à des tactiques de référencement fondées sur les données. Nos spécialistes SEO de Bordeaux utilisent les derniers outils et techniques pour mettre en œuvre des campagnes SEO largement réussies.<br>
                              Voici d'autres raisons pour lesquelles vous devriez travailler avec nous :
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
                                    Nous croyons aux objectifs commerciaux de nos clients, c'est pourquoi nous adoptons une approche centrée sur le client dans tous les projets. Nos clients ne sont pas des spectateurs mais des collaborateurs dans le parcours marketing.
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
                                      <p>Nous avons des résultats</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nous pensons que nous sommes l'une des meilleures agence de référencement à Bordeaux parce que nous obtenons des résultats positifs avec chaque campagne que nous gérons. Avec notre connaissance de l'industrie et des méthodes de marketing éprouvées, nous pouvons garantir un retour sur investissement significatif.
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
                              <img class="my-5 icon-box-2" src="{{ asset('images') }}/recherche-excellence.png" alt="collaboration client">
                                <h3 class="how-it-works-card__title">
                                    <p>Nous sommes des spécialistes du SEO</p>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Nous sommes très sélectifs avec les membres de notre équipe. Chaque membre de notre équipe est un expert dans son domaine de référencement. Lorsque vous travaillez avec nous, vous serez affecté à un spécialiste SEO dédié qui s'aligne sur les besoins de votre entreprise.
                                </p>                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/cooperation-client.png" alt="Nous croyons à l'intégrité">
                              <h3 class="how-it-works-card__title">
                                  <p>Nous croyons en l'honnêteté et l'intégrité</p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                Nous ne mentons pas aux clients pour faire du profit. Chez Lyneo, nous ne proposons que des solutions de marketing numérique adaptées à votre entreprise. Nous valorisons l'honnêteté et l'intégrité, ce qui nous a permis d'établir des relations durables avec nos clients.
                              </p><!-- /.how-it-works-card__text -->
                              <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/transparence-lyneo.png" alt="Lyneo vous tient informé">
                              <h3 class="how-it-works-card__title">
                                  <p>Nous vous tenons informés</p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                L'agence Lyneo travaille avec ses clients en toute transparence. Les clients ont accès à des outils de suivi des performances et à des rapports réguliers, de sorte qu'ils connaissent à tout moment l'état d'avancement d'un projet.
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
                              Chez Lyneo, nous aimons essayer des méthodes de marketing modernes, y compris dans nos pratiques d'optimisation pour les  moteurs de recherche. Nos experts SEO de Bordeaux suivent les dernières tendances du secteur, de sorte qu'ils apprennent de nouvelles stratégies et les mettent en œuvre sur les projets appropriés.
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
                          <div class="acc-btn"><span class="count">1.</span> Comment choisir la bonne agence de référencement pour votre entreprise ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    <p>
                                      Le choix de la bonne agence de référencement ne doit pas être compliqué. Il vous suffit de faire vos recherches au préalable afin d'éviter les agences qui feront des promesses irréalistes ou qui utiliseront des tactiques de black-hat. Pour vous aider à choisir le partenaire idéal, voici quelques conseils :
                                    </p>
                                    <ol>
                                      <li>
                                        <p>
                                          Il est important de vérifier le classement d'une agence pour des mots-clés connexes afin de déterminer si elle convient, car cela témoigne de sa compréhension et de sa mise en œuvre des techniques de référencement.
                                        </p>
                                      </li>
                                      <li>
                                        <p>
                                          Avant de prendre votre décision finale, il est toujours bon de voir ce que disent les autres. Vérifiez l'e-réputation en lisant les avis et les témoignages des clients sur des sites d'évaluation indépendants tels que Trustpilot ou Google My Business.<br>
                                          Vous pourrez ainsi vous faire une idée du service clientèle de l'agence et de sa compréhension du travail qu'elle effectue.
                                        </p>
                                      </li>
                                      <li>
                                        <p>
                                          Une façon de savoir si une agence de référencement est réputée est de consulter son site Web pour vérifier ses références. Si elle peut montrer des exemples d'amélioration du classement et de la visibilité d'un site Web par le biais de témoignages de clients, d'études de cas, etc., il est probable qu'elle sera en mesure de faire de même pour vous.
                                        </p>
                                      </li>
                                      <li>
                                        <p>
                                          Pour vous assurer que l'agence est fiable, vérifiez son numéro d'enregistrement et demandez à voir ses anciens états financiers. Cela vous aidera à décider si elle est abordable et si elle correspond à vos objectifs.
                                        </p>
                                      </li>
                                    </ol>
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">2.</span> Pourquoi aurais-je besoin d'un service de référencement, et comment cela aiderait-il mon site Web ? ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Si vous n'avez jamais travaillé avec un spécialiste du référencement, il existe probablement plusieurs domaines d'amélioration qui pourraient rendre votre site Web plus visible sur les moteurs de recherche. Ce processus s'appelle rendre votre site "SEO friendly". Un service de référencement examinera les aspects techniques, le contenu (rédaction web et liens internes), ainsi que le netlinking de votre site pour identifier les améliorations à apporter.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">3.</span> Vous craignez que vos efforts de référencement n'aient pas d'impact ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le retour sur investissement d'une agence d'optimisation des moteurs de recherche est facilement quantifiable : l'augmentation du trafic de clients potentiels vers votre site Web entraîne une augmentation des ventes et, en fin de compte, des bénéfices.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">4.</span> Une société de référencement peut-elle garantir que mon site web sera classé numéro un dans les moteurs de recherche ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Un mot d'avertissement : ne croyez pas une agence de référencement qui vous promet un classement numéro 1 sur Google. L'objectif est toujours d'avoir une meilleure visibilité, mais nous ne pouvons pas contrôler l'amélioration de notre site ni son classement. Restez également à l'écart des agences qui proposent leur service d'optimisation avec un nombre déterminé de mots clés : Ce n'est pas ainsi que fonctionne le référencement.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">5.</span> En plus de contribuer au référencement, les publicités sur votre site Web amélioreront-elles votre classement ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    De nombreuses personnes utilisent cette stratégie de visibilité. L'optimisation des moteurs de recherche (SEO) et les liens sponsorisés sont deux techniques complémentaires qui peuvent vous aider à maximiser la visibilité de votre site sur Google. Le référencement a un effet et un retour sur investissement à long terme, tandis que les liens sponsorisés (Google Ads) ont un effet beaucoup plus immédiat, mais peuvent ne pas être aussi efficaces à long terme.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">6.</span> Est-il possible suivre l'évolution de votre prestation SEO ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Une communication ouverte est essentielle au succès de notre agence de référencement à Bordeaux, et nous donnons toujours des conseils réfléchis dans le but d'obtenir un classement dans Google. Pour mieux faire cela, nous avons quelques rapports qui sortent toutes les deux semaines détaillant votre positionnement. Vous assisterez également à des points périodiques du projet avec votre consultant afin que vous puissiez suivre ensemble la progression de votre site. Enfin, nous fournissons des outils d'analyse externes afin que vous puissiez également tout contrôler vous-même.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">6.</span> SEO ou SEA, quelle est la différence ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    <p>
                                      Le référencement naturel (SEO)est une stratégie à long terme tandis que le SEA est plus à court terme. Avec cette dernière, vous pouvez rapidement accroître votre visibilité et cibler des annonces spécifiques sur les personnes les plus susceptibles d'utiliser votre produit ou service.
                                    </p>
                                    <p>
                                      Le SEA est destiné aux campagnes temporaires, par exemple si vous vendez un produit saisonnier. Le référencement permet notamment aux gens de se familiariser avec votre marque ou de s'en souvenir plus tard, tandis que le SEA (Search Engine Advertising) vise des objectifs plus immédiats.
                                    </p>
                                    <p>
                                      Bien que le référencement et le SEA soient tous deux excellents pour obtenir de nouveaux clients, il y aura des moments où l'utilisation de la publicité sera plus avantageuse que le référencement. C'est le cas, par exemple, d'une campagne d'acquisition à durée limitée, comme des remises saisonnières ou le lancement d'un nouveau produit.
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
                  <h2>Besoin d'une stratégie SEO?<br>Vous avez des questions?</h2>
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

