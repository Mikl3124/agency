@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/seo.png)" alt="seo"></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>SEO</h1>
                      <h4 class="text-white">Search Engine Optimisation</h4>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li><a href="{{ route("marketing-digital") }}">Marketing Digital</a></li>
                              <li class="active">SEO</li>
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
                            <img src="{{ asset('images') }}/referencement-web.png" alt="seo bordeaux">
                          </div>
                          <div class="text-content">
                              <h3>Investissez dans votre avenir avec une société de référencement qui obtient des résultats</h3>
                              <p>
                                Soyons réalistes. Vous savez ce dont vous avez besoin mais vous ne savez pas comment l'obtenir. C'est ce que nos spécialistes du référencement à Bordeaux entendent sans cesse de la part des clients qui contactent notre agence.<br>
                                Vous êtes probablement ici pour l'une ou plusieurs des raisons suivantes :<br>
                              </p>
                              <ul>
                                <li>Votre site web n'apparaît pas sur internet</li>
                                <li>Le trafic de votre site web a diminué récemment et vous ne savez pas pourquoi.</li>
                                <li>Soudain, votre volume d'appels entrants et de prospects a diminué.</li>
                                <li>Vous lancez un nouveau site web et vous souhaitez développer rapidement votre nouvelle activité.</li>
                              </ul>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="service-details">
                        <div class="text-content">
                            <div class="featured">
                              <p>
                                Si l'un de ces quatre points douloureux vous dit quelque chose, rassurez-vous, vous avez trouvé la bonne société de référencement.<br>
                                Il y a une raison pour laquelle Lyneo sert actuellement de nombreux clients SEO et fournit des solutions d'optimisation pour répondre à l'algorithme en constante évolution de Google.
                              </p>
                                <div class="row clearfix">
                                    <div class="image-col col-md-6 col-sm-12">
                                        <div class="image">
                                            <img src="{{ asset('images') }}/solution-seo.png" alt="solution seo">
                                        </div>
                                    </div>
                                    <div class="text-col col-md-6 col-sm-12">
                                        <div class="inner">
                                            <h4>Nous fournissons des solutions de référencement pour résoudre vos problèmes</h4>
                                            <p>"Notre passion est de développer votre activité en ligne"</p>
                                            <p>Nous fournissons des solutions de référencement aux entreprises désireuses de développer leur présence en ligne, d'augmenter le nombre de prospects et d'accroître leurs revenus. Nos techniques et pratiques éprouvées en matière de référencement ont donné lieu à de nombreux succès pour nos clients.</p>
                                        </div>
                                    </div>
                                          <!--Testimonials Section-->
                                          <section class="testimonials-section testimonials-page">
                                            <div class="auto-container">
                                                <div class="row clearfix">
                                                    <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="inner">
                                                            <div class="icon"><span>“</span></div>
                                                            <div class="info">
                                                                <div class="image"><a href="team.html"><img src="{{ asset('images') }}/pascal-cabus.jpeg" alt="Pascal Cabus"></a></div>
                                                                <div class="name">Pascal Cabus</div>
                                                                <div class="designation">Gérant-Architecte</div>
                                                            </div>
                                                            <div class="text">Lyneo s'est surpassé et m'a permis de me concentrer sur d'autres aspects du développement commercial. Lyneo comprend les besoins complexes de ce que nous voulons accomplir."</div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="inner">
                                                            <div class="icon"><span>“</span></div>
                                                            <div class="info">
                                                                <div class="image"><a href="team.html"><img src="{{ asset('images') }}/leny-quercy.jpeg" alt="Leny Quercy"></a></div>
                                                                <div class="name">Leny Quercy</div>
                                                                <div class="designation">Responsable Marketing</div>
                                                            </div>
                                                            <div class="text">Les spécialistes de Lyneo ont toujours été activement engagés et il n'y a jamais de silence radio.<br>
                                                              C'est comme s'ils avaient été une extension de notre équipe et que nous pouvions toujours compter sur eux pour nous éclairer et répondre à nos questions.</div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="inner">
                                                            <div class="icon"><span>“</span></div>
                                                            <div class="info">
                                                              <div class="image"><a href="team.html"><img src="{{ asset('images') }}/melissa-blanc.jpeg" alt="Melissa Blanc"></a></div>
                                                                <div class="name">Melissa Blanc</div>
                                                                <div class="designation">Directrice communication</div>
                                                            </div>
                                                            <div class="text">Notre trafic a augmenté de 64% depuis qu'ils ont travaillé sur notre site et ils ont obtenu plusieurs mots-clés pour lesquels nous étions mal classés jusqu'à la première page.<br>
                                                              En fait, nos mots-clés se sont améliorés en moyenne de 56 positions avec Lyneo.<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="testi-block col-lg-6 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms"
                                                        data-wow-duration="1500ms">
                                                        <div class="inner">
                                                            <div class="icon"><span>“</span></div>
                                                            <div class="info">
                                                              <div class="image"><a href="team.html"><img src="{{ asset('images') }}/lucie-maubrac.jpeg" alt="Lucie Maubrac"></a></div>
                                                                <div class="name">Lucie Maubrac</div>
                                                                <div class="designation">Coach bien-être</div>
                                                            </div>
                                                            <div class="text">
                                                              Lyneo a été un atout fantastique pour ma stratégie de marketing en ligne. Après quelques années de mauvaise gestion de l'optimisation des moteurs de recherche, Lyneo a été en mesure de m'aider à améliorer le classement de mon site Web.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                </div>
                            </div>
                            <div class="inner">
                              <h4>
                                Êtes-vous sur la première page des pages de résultats des moteurs de recherche (SERP) pour les mots clés qui correspondent à votre entreprise ou à votre marque? </b>
                              </h4>
                              </p> Si ce n'est pas le cas, vous perdez de précieux prospects.<br>
                                L'optimisation des moteurs de recherche n'est pas une mode et il n'est plus possible de ne pas y penser si vous voulez développer votre activité. Il s'agit d'un élément indispensable de tout plan visant à commercialiser des produits ou des services et à générer davantage de prospects qualifiés et de ventes.
                              </p>
                            </div>
                  </div>
                </div>
                <!--Content Side-->
              </div>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box" src="{{ asset('images') }}/seo-keyboard.svg" alt="Startegie mots clés">
                                <h3 class="how-it-works-card__title">
                                      <a href="team.html">Recherche et stratégie de mots-clés</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Lyneo est une agence de référencement qui comprend votre créneau et peut améliorer votre classement pour des termes de recherche spécifiques. Votre spécialiste en référencement examinera les mots-clés pour lesquels votre site Web est actuellement classé, prendra votre liste de mots-clés souhaités et effectuera des recherches supplémentaires sur les mots-clés afin d'établir une liste qui correspond le mieux à votre site Web et au paysage concurrentiel.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                      </div><!-- /.col-md-12 col-lg-6 -->
                      <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box" src="{{ asset('images') }}/link-building.svg" alt="Facilité d'utilisation de Wordpress">
                                  <h3 class="how-it-works-card__title">
                                      <p>Création de liens</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Les backlinks sont un élément essentiel pour obtenir un meilleur classement dans les résultats de recherche, mais pas n'importe quel lien ! C'est pourquoi vous devez vous associer à une société de référencement telle que Lyneo, qui dispose d'une équipe spécialisée dans la création de liens et qui est en relation avec de nombreux sites Web pertinents et de grande qualité.
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
                              <img class="my-5 icon-box" src="{{ asset('images') }}/seo-technique.svg" alt="SEO technique">
                                <h3 class="how-it-works-card__title">
                                    <a href="team.html">SEO technique</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Les classements peuvent s'améliorer grâce à des optimisations sur le back-end de votre site Web, comme l'amélioration de la vitesse des pages. En corrigeant ces erreurs, vous facilitez la tâche des moteurs de recherche lorsqu'ils explorent votre site. Et lorsque vous rendez les moteurs de recherche heureux, vos classements peuvent vous rendre encore plus heureux !
                                </p><!-- /.how-it-works-card__text -->
                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="how-it-works-card text-center">
                            <div class="how-it-works-card__inner">
                              <img class="my-5 icon-box" src="{{ asset('images') }}/seo-local.svg" alt="seo local">
                                <h3 class="how-it-works-card__title">
                                    <a href="{{ route('seo-local')}}">SEO local</a>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Les statistiques montrent que 67 % des clients recherchent des entreprises locales en ligne. Améliorez le classement de votre entreprise en matière de référencement local grâce à l'optimisation du profil Google Business ou Google My Business (GMB) et attirez les clients les plus intéressés. Nous optimisons votre profil GMB et gérons votre réputation en ligne pour développer votre clientèle locale.
                                </p>
                                  <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box" src="{{ asset('images') }}/seo-offpage.svg" alt="SEO off-page">
                              <h3 class="how-it-works-card__title">
                                  <a href="team.html">SEO Off-page</a>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                L'optimisation hors-page est cruciale pour établir la crédibilité de la marque et augmenter l'exposition en ligne. Associez-vous à notre société de référencement et laissez-nous vous aider à démontrer votre expertise sectorielle. Nous tirons parti du marketing des médias sociaux, de la création de liens et du marketing d'influence pour générer des liens qualifiés et des évaluations positives.
                              </p><!-- /.how-it-works-card__text -->
                              <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box" src="{{ asset('images') }}/seo-one-page.svg" alt="seo one-page">
                              <h3 class="how-it-works-card__title">
                                  <p>SEO On-page</p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                Améliorez votre visibilité en ligne et gagnez un trafic de qualité. Chez Lyneo, nous veillons à ce que nos services de référencement soient conformes aux meilleures pratiques des moteurs de recherche afin de renforcer la fiabilité de votre site Web. Nos experts en référencement publient un contenu unique et riche en valeur, optimisent vos titres et vos balises HTML et utilisent des images en haute résolution.
                              </p>
                                <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
              <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">
                          <img class="my-5 icon-box" src="{{ asset('images') }}/seo-contenu.svg" alt="Rédaction de contenu SEO">
                            <h3 class="how-it-works-card__title">
                                <a href="team.html">Rédaction de contenu SEO</a>
                            </h3><!-- /.how-it-works-card__title -->
                            <p class="mt-3 mx-3">
                              Nous disposons d'une équipe de rédacteurs qui produisent du contenu adapté au référencement pour votre site Web, qu'il s'agisse de créer des articles de blog dignes d'être partagés ou d'optimiser les pages de services et de produits préexistantes en y ajoutant du contenu. Les moteurs de recherche aiment les sites Web qui ajoutent régulièrement du nouveau contenu. Choisissez notre société de référencement pour répondre à vos besoins en matière de contenu et renforcer votre marketing de recherche.
                            </p><!-- /.how-it-works-card__text -->
                            <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">
                          <img class="my-5 icon-box" src="{{ asset('images') }}/seo-ecommerce.svg" alt="seo ecommerce">
                            <h3 class="how-it-works-card__title">
                                <a href="{{ route('commerce') }}">SEO E-commerce</a>
                            </h3><!-- /.how-it-works-card__title -->
                            <p class="mt-3 mx-3">
                              Le référencement du commerce électronique est plus compliqué que le référencement ordinaire. Les magasins de commerce électronique ont de nombreuses pages différentes à optimiser en plus de la page d'accueil, car ils comprennent des pages de produits, des pages de catégories et de nombreux autres types de pages.<br>
                              Offrez à vos clients une expérience d'achat pratique 24h/24 et 7j/7 et augmentez votre taux de fidélisation.
                            </p>
                              <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                    </div><!-- /.how-it-works-card -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
          </div><!-- /.auto-container -->

              <!--FAQ section-->
              <section class="faqs-section mb-5">
                <div class="sec-title centered">
                  <h2>Pourquoi choisir Lyneo pour votre référencement<span class="dot">?</span></h2>
                  <h6>"Nos solutions de référencement fonctionnent : Nous l'avons prouvé de nombreuses fois"</h6>
                </div>
                <div class="text-center mb-5">
                </div>

                <div class="auto-container">
                  <div class="row clearfix">
                    <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                      <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">1.</span> L'expérience est importante</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">Depuis plus de nombreuses années, Lyneo aide les entreprises de tous les secteurs d'activité à accroître leur présence en ligne afin de générer plus de revenus.<br>
                                    Nous disposons de l'expérience et des réussites de nos clients pour soutenir les entreprises de toute taille qui souhaitent augmenter leur trafic en ligne et accroître leurs prospects. <br>
                                    Nos experts en référencement sont des leaders du secteur. Notre équipe est soudée, si un membre a un problème, nous intervenons tous.</div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">2.</span> Des professionnels du référencement dévoués</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Nous pensons que notre travail consiste à rendre aussi simple que possible pour nos clients le processus d'optimisation des moteurs de recherche, qui est technique, compliqué et parfois accablant.<br>
                                    L'une des nombreuses façons d'y parvenir consiste à fournir à chaque client un point de contact unique pour gérer son projet. Vous apprenez à bien connaître votre professionnel Lyneo et il apprendra à connaître votre entreprise et à comprendre vos besoins uniques.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">3.</span> Relations et résultats</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Nous vivons selon nos deux principales valeurs fondamentales : Les relations et les résultats.<br>
                                    Nous sommes là pour chaque client, c'est notre pilier. Nous avons des experts en référencement qui sont spécialisés dans l'aide aux entreprises de toutes tailles - des petites entreprises aux grandes franchises nationales - pour atteindre une croissance exponentielle.<br>
                                    Notre société d'optimisation des moteurs de recherche croit qu'elle doit s'approprier la voix de ses clients et nous travaillons dur chaque jour pour le prouver.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">4.</span> Nous nous améliorons sans cesse</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le référencement n'est jamais stagnant et nous ne le sommes pas non plus.<br>
                                    Le référencement est en constante évolution en raison des multiples mises à jour des algorithmes de Google chaque année qui ont un impact sur les facteurs de classement et nous sommes toujours au courant des dernières nouvelles et tendances.<br>
                                    Notre société d'optimisation des moteurs de recherche apprend constamment de nouvelles techniques et reste à jour pour rester en tête de la courbe. Rassurez-vous, notre société de référencement est proactive et non réactive.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">5.</span> Nous respectons les règles</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Nous valorisons l'honnêteté et l'intégrité dans tout ce que nous faisons. Nous respectons toujours les règles établies par Google, en utilisant le white hat SEO pour obtenir des résultats sans spammer ou tromper le système qui peut conduire à des pénalités possibles de Google.<br>
                                    En d'autres termes, nous n'avons pas besoin de tricher pour gagner en matière de référencement. Nous respectons les règles et ne mettons jamais votre entreprise en péril. Nous ne compromettons jamais notre intégrité.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">6.</span> Des rapports transparents</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Nous sommes totalement transparents afin que vous puissiez voir de quelle manière, notre travail augmentent vos revenus en ligne.<br>
                                    Nos rapports personnalisés et approfondis comprennent un accès 24h/24 et 7j/7 à un portail client en ligne, des rapports Google Analytics donnant un aperçu complet des performances de référencement de votre site, des classements de mots-clés régulièrement mis à jour, une ventilation mensuelle des tâches de référencement que nous avons effectuées et un rendez-vous mensuel passant en revue les améliorations et la stratégie de référencement.
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
                        <h4 class="text-center">Les services de référencement que vous pouvez attendre de Lyneo</h4>
                          <p>
                            En tant qu'entreprise de marketing numérique à service complet, Lyneo offre une gamme complète de services professionnels d'optimisation des moteurs de recherche afin d'accroître la visibilité de votre entreprise dans les moteurs de recherche en utilisant uniquement des techniques de référencement en "white hat" fiables et à l'épreuve du temps, telles que :
                          </p>
                        <div class="text-col col-md-6 col-sm-12">
                          <div class="inner">
                              <ul>
                                <li>
                                  <b>Stratégie de référencement personnalisée :</b> Nous personnalisons nos services de référencement pour répondre à vos besoins. Nous utilisons les tactiques qui ont le plus d'impact pour votre entreprise unique.
                                </li>
                                <li>
                                  <b>Référencement complet sur site :</b> Balises de titre, méta-descriptions, balises alt, liens internes, etc.
                                </li>
                                <li>
                                  Recherche approfondie de mots-clés et analyse du marché.
                                </li>
                                <li>
                                  <b>Rédaction de textes de haute qualité</b> pour que le contenu de votre site reste frais et encourage le retour du trafic.
                                </li>
                                <li>
                                  Évaluation approfondie de la concurrence.
                                </li>
                                <li>
                                  <b>Construction minutieuse de liens :</b> À la main, sur divers domaines ayant une autorité de domaine élevée.
                                </li>
                                <li>
                                  Des tactiques de référencement organique pour des résultats à long terme, associées à des publicités payantes pour des coups de pouce rapides (si le PPC vous intéresse).
                                </li>
                                <li>
                                  Google Analytics et d'autres logiciels de suivi des données pour tirer des enseignements des tendances, du trafic et autres.
                                </li>
                              </ul>
                            </div>
                          </div>
                          <div class="image-col col-md-6 col-sm-12">
                            <div class="image">
                                <img src="{{ asset('images') }}/services-seo.png" alt="services seo">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <section class="process-one">
            <div class="auto-container">
              <div class="sec-title centered mb-4">
                <h2>La méthodologie Agile de Lyneo pour le référencement<span class="dot">.</span></h2>
              </div>
              <div class="pb-5">
                <p>
                  Le paysage de la recherche est en constante évolution. Pour être bien classé sur les moteurs de recherche, vous devez investir dans les bons services de référencement adaptés aux besoins, aux demandes et aux clients cibles de votre entreprise. Il ne suffit pas de s'appuyer sur les anciennes tactiques de référencement pour maintenir une présence en ligne solide - vous devez trouver une société de référencement fiable qui peut faire monter d'un cran vos efforts de marketing numérique.
                </p>
                <p>
                L'agence Lyneo est une société de référencement axée sur le client. Nos experts en référencement travaillent en étroite collaboration avec nos clients pour élaborer des stratégies de référencement personnalisées qui favorisent la rentabilité à long terme. En utilisant une méthodologie éprouvée, efficace et efficiente, nous sommes en mesure de créer des résultats de haute qualité et mesurables.
                </p>
                <p>
                Notre société de référencement utilise une méthodologie appelée " référencement agile ", qui nous permet de construire un cadre de campagne robuste qui apporte de la valeur à votre entreprise. L'approche Agile SEO de Lyneo s'articule autour des processus suivants :
                </p>
              </div>

                <div class="row mt-5">
                    <div class="col-md-12 col-lg-6 process-one__image__column">
                        <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/decouverte-seo.svg" alt="Découverte seo">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Découverte <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">
                              En tant que société d'optimisation des moteurs de recherche, nous prenons le temps de comprendre les besoins, les demandes et les attentes de votre entreprise. Au cours de la phase de découverte, nous organisons une réunion avec les principales parties prenantes de votre entreprise et effectuons un examen initial du site. Ensuite, nous identifions vos indicateurs de performance clés (KPI), déterminons votre chemin de conversion et effectuons une recherche approfondie de mots-clés. Cela nous permet d'acquérir une connaissance approfondie des processus de votre entreprise, de la finalité de votre site et de ses objectifs.
                            </p><!-- /.process-one__summery -->

                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-4 process-one__image__column">
                        <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/analyse-seo.svg" alt="analyse seo">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-8">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Analyse <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">
                              L'étape suivante est l'analyse, qui couvre l'analyse comparative de la concurrence, l'audit approfondi du site, l'examen des analyses du site et l'évaluation des risques liés aux liens. À ce stade, nous recueillons et analysons toutes les données de votre entreprise afin de déterminer les facteurs qui influent sur votre présence numérique. Nous examinons l'historique de votre trafic, les problèmes techniques sur le site, les stratégies de liens retour de vos concurrents et les tactiques de création de liens. Nous utilisons les résultats de l'analyse pour formuler la meilleure approche pour votre référencement.
                            </p><!-- /.process-one__summery -->
                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-4 process-one__image__column">
                        <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/strategie-seo.svg" alt="strategie seo">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-8">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Stratégie <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">
                              Une fois que nous aurons identifié vos lacunes et vos opportunités en matière de marketing, nos experts en référencement créeront un plan stratégique de marketing en ligne de 60 jours (SOMP). Ce plan comprend les objectifs de votre campagne, les résultats attendus pour chaque canal de marketing et le temps de réalisation estimé. Au cours du premier mois de votre campagne, notre société de référencement donne la priorité aux aspects les plus critiques de votre référencement. Ceci afin d'assurer que tous nos efforts de référencement fournissent des résultats immédiats et ciblés.
                            </p><!-- /.process-one__summery -->
                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12 col-lg-4 process-one__image__column">
                      <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/execution-seo.svg" alt="execution seo">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-8">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Exécution <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Nous optimisons vos pages Web et vos articles de blog avec des mots-clés performants, améliorons la structure de votre site et gérons vos listes d'entreprises. Notre société de référencement exploite également une stratégie à canaux multiples pour améliorer vos résultats globaux de référencement. Nous mettons en œuvre des campagnes de gestion des médias sociaux et nous nous adressons à des sites Web tiers pour accroître votre portée en ligne.
                          </p><!-- /.process-one__summery -->
                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12 col-lg-4 process-one__image__column">
                      <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/mesure-seo.svg" alt="mesure seo">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-8">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Mesure <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Dès que vous vous inscrivez auprès de notre société de référencement, nous mettons en place un système de suivi qui nous permet de surveiller votre progression en ligne et de comprendre l'impact de votre campagne de référencement. Nous surveillons et analysons vos analyses, le classement des mots clés et les indicateurs clés de performance. Nos experts en référencement examinent également votre trafic organique, votre taux de rebond, votre taux de conversion, votre visibilité locale et vos taux de clics (CTR). En surveillant vos efforts de référencement, nous obtenons des informations exploitables et améliorons vos stratégies d'optimisation.
                          </p><!-- /.process-one__summery -->
                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
            <div class="row">
              <div class="col-md-12 col-lg-4 process-one__image__column">
                  <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{ asset('images') }}/rapport-seo.svg" alt="rapport seo">
                  </div><!-- /.process-one__image -->
              </div><!-- /.col-md-12 col-lg-6 -->
              <div class="col-md-12 col-lg-8">
                  <div class="process-one__content">
                      <div class="sec-title">
                          <h2>Rapport <span class="dot">.</span><!-- /.dot -->
                          </h2>
                      </div><!-- /.sec-title -->
                      <p class="process-one__summery">
                        Notre équipe de référencement prévoit des consultations régulières et des rapports mensuels avec vos chefs de projet pour vous tenir au courant de l'évolution de votre campagne. Lors de notre consultation, nous présentons un rapport complet qui donne un aperçu des performances de votre site. Cela comprend les tendances de vos indicateurs clés de performance, le trafic global et le classement. Chaque mois, nous créons une nouvelle feuille de route de 90 jours, afin que vous sachiez exactement comment se déroule votre campagne et à quoi vous attendre.
                      </p><!-- /.process-one__summery -->
                  </div><!-- /.process-one__content -->
              </div><!-- /.col-md-12 col-lg-6 -->
          </div><!-- /.row -->
          <div class="row">
            <div class="col-md-12 col-lg-4 process-one__image__column">
                <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                  <img src="{{ asset('images') }}/ajustement-seo.svg" alt="ajustement seo">
                </div><!-- /.process-one__image -->
            </div><!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-8">
                <div class="process-one__content">
                    <div class="sec-title">
                        <h2>Ajustement <span class="dot">.</span><!-- /.dot -->
                        </h2>
                    </div><!-- /.sec-title -->
                    <p class="process-one__summery">
                      Dans le cadre de nos efforts continus en matière de référencement, nous ajustons en permanence nos stratégies d'optimisation en fonction des dernières mises à jour des algorithmes et des tendances du marché. Les moteurs de recherche changent de manière dynamique et les demandes du secteur évoluent en permanence. C'est pourquoi nous adoptons une approche proactive pour garantir que votre site Web soit bien classé dans les résultats de recherche. Faites confiance à notre équipe de référencement pour effectuer les ajustements nécessaires et vous tenir informé à tout moment de l'évolution de votre campagne.
                    </p><!-- /.process-one__summery -->
                </div><!-- /.process-one__content -->
            </div><!-- /.col-md-12 col-lg-6 -->

        </div><!-- /.row -->

        </div><!-- /.auto-container -->
        </section><!-- /.process-one -->
        <div class="container">
          <!--Content Side-->
          <div class="sec-title centered">
            <h2>Pourquoi le SEO est-il un super investissement<span class="dot">?</span></h2>
          </div>
        <div class="content-side col-lg-12 col-md-12 col-sm-12">
          <div class="service-details">
              <div class="text-content">
                  <div class="featured">
                      <div class="row clearfix">
                        <div class="text-col col-md-7 col-sm-12">
                          <div class="inner">
                              <p>Nous mettons en pratique ce que nous prêchons afin d'assurer un retour sur investissement maximal.</p>
                              <p>
                                Tous les propriétaires d'entreprise veulent en avoir plus pour leur argent. Tous veulent de meilleures marges bénéficiaires. Le référencement vous permet d'économiser de l'argent. Considérez le SEO comme un employé : Le SEO ne pointe jamais. Il ne se fait jamais porter pâle. Il ne prend jamais de vacances. Le SEO travaille pour vous 24 heures sur 24, même quand vous dormez.
                              </p>
                          </div>
                        </div>
                        <div class="image-col col-md-4 col-sm-12">
                          <div class="image">
                            <img src="{{ asset('images') }}/argent-seo.svg" alt="seo gagner argent">
                          </div>
                        </div>
                        </div>
                      </div>
                  </div>
                  <div class="text-content">
                    <div class="featured">
                        <div class="row clearfix">
                          <p>
                            Non, le SEO ne répondra pas au téléphone. Mais il fera sonner le téléphone. Le référencement bien fait canalisera les clients vers votre site Web et les mettra en face de vos produits, services et marque.
                            <br>
                            Nous avons passé des années à affiner notre stratégie de référencement. Ce que nous faisons fonctionne non seulement pour nos clients, mais aussi pour notre site web.
                            <br>
                            Pourquoi l'optimisation des moteurs de recherche est un excellent investissement
                            Nous vivons de ce que nous vendons. Depuis 2016, Lyneo a connu une croissance exponentielle, atterrissant sur la liste Inc. 5000 parmi les entreprises privées américaines à la croissance la plus rapide pour cinq années consécutives.
                            <br>
                            Nous tirons le meilleur parti de nos résultats de recherche organiques. Nous croyons tellement au référencement que nous en dépendons. C'est l'élément vital de notre entreprise.
                            <br>
                            Vous ne seriez probablement pas ici sans le référencement. Comment avez-vous trouvé cette page ? Avec une recherche Google ? Si oui, voici un exemple de SEO travaillant pour nous. Maintenant, mettez-le au service de votre entreprise.
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
        <h2>Des questions sur le SEO<span class="dot">?</span></h2>
      </div>
      <div class="text-center mb-5">
      </div>

      <div class="auto-container">
        <div class="row clearfix">
          <div class="faq-block col-lg-12 col-md-12 col-sm-12">
            <ul class="accordion-box clearfix">
              <!--Block-->
              <li class="accordion block">
                <div class="acc-btn"><span class="count">1.</span> Qu'est ce que le SEO?</div>
                <div class="acc-content">
                    <div class="content">
                      <div class="text">
                        L'optimisation des moteurs de recherche est plus communément connue sous son acronyme SEO.<br>
                        L'optimisation est la base de toutes les pratiques de référencement. Une fois que la présence de votre marque (site web, contenu et plateformes de médias sociaux) est optimisée sur Internet, vous augmentez sa visibilité en ligne.<br>
                        Votre site web se retrouvera sur la première page des pages de résultats des moteurs de recherche (SERP). Vos clients en ligne trouveront également votre entreprise beaucoup plus rapidement.
                      </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">2.</span> Comment fonctionne le SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          L'optimisation des moteurs de recherche (SEO) consiste à apporter des modifications à votre présence en ligne, en particulier à votre site web, afin de le rendre plus attrayant pour les moteurs de recherche tels que Google et Bing.<br>
                          Les moteurs de recherche parcourent (ou analysent) votre site web pour en comprendre le contenu. Les meilleures pratiques de référencement permettent aux moteurs de recherche de comprendre facilement votre site web.<br>
                          Le référencement augmente la quantité de trafic organique sur votre site web et la qualité des visiteurs de votre site, sans coût supplémentaire. Il n'inclut aucun média ou placement payant et exclut le trafic direct.<br>
                          Avec une stratégie de référencement solide mise en œuvre sur votre site Web, Google l'identifiera comme un site d'autorité et dirigera les utilisateurs vers votre site.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">3.</span> Relations et résultats</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Nous vivons selon nos deux principales valeurs fondamentales : Les relations et les résultats.<br>
                          Nous sommes là pour chaque client, c'est notre pilier. Nous avons des experts en référencement qui sont spécialisés dans l'aide aux entreprises de toutes tailles - des petites entreprises aux grandes franchises nationales - pour atteindre une croissance exponentielle.<br>
                          Notre société d'optimisation des moteurs de recherche croit qu'elle doit s'approprier la voix de ses clients et nous travaillons dur chaque jour pour le prouver.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">4.</span> Dois-je avoir une stratégie SEO différente pour chaque moteur de recherche?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Il existe des différences subtiles entre les différents moteurs de recherche. Cependant, vous pouvez généralement vous concentrer sur Google dans votre stratégie de référencement, car la plupart de votre marché cible utilise ce moteur de recherche de premier plan. En outre, la majorité du trafic organique provient de Google.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">5.</span> Combien coûte la mise en place d'une stratégie SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Il est conseillé d'employer une agence ou un expert en référencement expérimenté et ce coût doit être inclus dans votre budget marketing.<br>
                          Le montant que vous devez vous attendre à payer est aligné sur l'étendue du travail nécessaire pour assurer le succès.<br>
                          Une agence numérique ou un expert en référencement facturera après avoir examiné la portée du projet et une fois que vous aurez présenté vos attentes prédéterminées.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">6.</span> Puis-je faire du SEO moi-même?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Oui, c'est possible - il faut un peu de savoir-faire et d'apprentissage par essais et erreurs, mais il est possible de mettre en œuvre une stratégie de référencement de base sur votre site Web.<br>
                          Cependant, le référencement prend du temps et, pour le faire correctement, vous devez tenir compte à la fois du référencement technique et du référencement sur page. De plus, vous devrez vous tenir au courant des modifications apportées aux algorithmes des différents moteurs de recherche.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">7.</span> Qu'est ce qui affecte mon classsement SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Trois facteurs ont un impact direct sur votre classement en matière de référencement, même si vous n'avez mis en place qu'une stratégie de recherche très basique sur votre site. Les facteurs à connaître sont les suivants :<br>
                          <b>Temps de chargement des pages :</b> Si votre site Web se charge trop lentement, vos visiteurs rebondiront et iront probablement sur le site d'un concurrent. Google (et tous les moteurs de recherche) classeront votre site plus bas à cause d'un temps de chargement trop lent. Il s'agit d'un point à surveiller de près à l'approche de la mise à jour majeure confirmée par Google. La mise à jour Core Web Vitals de mars 2021 portera sur trois aspects qui ont un impact direct - et considérable - sur l'expérience des utilisateurs de votre site. Le temps de chargement de la page est un élément important de cette mise à jour et est primordial pour assurer votre classement ou atteindre le sommet des SERPs.<br>
                          <b>Sélection des mots clés :</b> Vos mots clés doivent être choisis avec soin afin que votre site Web et vos pages soient répertoriés sous les termes de recherche corrects recherchés par votre client idéal.<br>
                          <b>Création de contenu :</b> Si vous créez un contenu de qualité sur votre site Web, votre public trouvera votre site rapidement et facilement et restera sur votre site pour en savoir plus. Cela augmente le temps de visite, ce qui améliore le classement dans les moteurs de recherche.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">8.</span> Pourquoi la mise en place d'un blog aide le SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Le blogging contribue à dynamiser votre stratégie de référencement sur l'ensemble de votre site, mais uniquement s'il est conçu dans une optique d'optimisation.<br>
                          Les moteurs de recherche recherchent le contenu de votre site Web qui répondra suffisamment aux questions des utilisateurs. Ainsi, en créant et en partageant des blogs de qualité et approfondis qui traitent de sujets pertinents dans votre secteur d'activité, vous êtes susceptible d'être identifié comme une source d'autorité sur le sujet recherché.<br>
                          Grâce aux tactiques de référencement sur page, les moteurs de recherche trouveront votre blog plus facilement.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">9.</span> Le SEO est-il meilleur que le SEA (publicité en ligne)?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Le référencement et le paiement au clic ou d'autres options de médias payants fonctionnent ensemble pour dynamiser votre site Web et positionner votre marque comme une autorité dans votre secteur ou votre niche.<br>
                          L'optimisation des moteurs de recherche offre souvent un bien meilleur retour sur investissement que les options de médias payants. Cela ne veut pas dire que le référencement est facile et bon marché ; il faut beaucoup de temps et de ressources pour y arriver, mais les récompenses à long terme sont immenses et durables. La plupart du temps, le référencement et la publicité payante fonctionnent ensemble pour fournir les meilleurs résultats.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">9.</span> Combien de temps prend le SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          Cela dépend entièrement de vos objectifs et des tactiques de campagne de recherche que vous utilisez. La plupart des experts en référencement estiment qu'il faut quatre à six mois avant de commencer à voir des résultats. Gardez à l'esprit qu'il s'agit du moment où vous commencez à voir les résultats et non du moment où vous atteignez les objectifs fixés.
                        </div>
                    </div>
                </div>
              </li>
              <li class="accordion block">
                <div class="acc-btn"><span class="count">10.</span> Quelles sont les bonnes pratiques SEO?</div>
                <div class="acc-content">
                    <div class="content">
                        <div class="text">
                          L'optimisation des moteurs de recherche (SEO) est une pratique aux multiples facettes qui nécessite de nombreuses actions différentes sur un site web pour qu'il soit optimisé pour les recherches.br>
                          De nombreuses personnes associent le référencement à un contenu de haute qualité, car les algorithmes de recherche ont fait du contenu un facteur de classement important. Les algorithmes recherchent du contenu qui répond à l'intention de recherche des utilisateurs.<br>
                          Si votre contenu s'adresse directement à votre public, votre site Web sera proposé aux utilisateurs par Google. Mais le contenu seul n'est pas une bonne pratique de référencement. Vous avez besoin de liens de sites externes faisant autorité qui pointent vers votre site sous la forme d'un lien retour et ces sites externes doivent avoir un bon score d'autorité de domaine.
                          <br><br>
                          En outre, les meilleures pratiques impliquent une optimisation complète de la page, ce qui signifie l'optimisation du méta-contenu, des images et des balises. Enfin, il faut tenir compte de l'aspect technique du référencement : l'architecture de votre site est-elle excellente ? Comment est l'expérience utilisateur (UX) ? Est-il facilement navigable ? Et avez-vous veillé à lier vos pages en interne ?
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
