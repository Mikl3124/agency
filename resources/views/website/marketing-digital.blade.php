@extends('layouts.website')

@section('content')

        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/marketing-digital.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Marketing Digital</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Marketing Digital</li>
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
                            <img src="{{ asset('images') }}/marketing-digital-lyneo.svg" alt="marketing digital bordeaux">
                          </div>
                          <div class="text-content">
                              <h3>Développez votre clientèle grâce à des stratégies ciblées et fondées sur les données.</h3>
                              <p>
                                L'agence de marketing Internet Lyneo est une agence de marketing numérique dynamique, polyvalente et proposant un service complet. Lyneo fait confiance à ses propres compétences en matière d'optimisation des moteurs de recherche (SEO) et de marketing pour attirer de nouveaux clients sur son site Web.
                              </p>
                              <p>
                                Nous ne sommes pas une entreprise statique. Nous ne nous limitons pas à des industries spécifiques. Lyneo dispose de l'expérience et des professionnels nécessaires pour créer un site Web personnalisé et utiliser de nombreux services de marketing numérique afin d'aider les entreprises de toute taille et de tout secteur.
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
                                <img src="{{ asset('images') }}/service-marketing-digital.svg" alt="Service marketing digital">
                              </div>
                            </div>
                            <div class="text-col col-md-6 col-sm-12">
                              <div class="inner">
                                <h4>Comment nos services de marketing numérique peuvent favoriser votre croissance ?</h4>
                                  <p>
                                    Les services de marketing numérique offrent aux entreprises de toutes tailles la possibilité de commercialiser leur marque 24 heures sur 24, 7 jours sur 7 et à moindre coût. Qu'il s'agisse de startups, d'entreprises de taille moyenne ou de sociétés implantées sur plusieurs sites, une société de marketing numérique vous aide à étendre la portée de votre marché de niche pour offrir des biens et des services à vos clients cibles, indépendamment du décalage horaire ou du lieu.
                                  </p>
                                  <p>
                                    Engager une agence de marketing internet est l'un des meilleurs moyens d'atteindre vos prospects tout en maintenant une relation solide avec vos clients existants. Tant que votre entreprise a une forte présence numérique, vos clients vous trouveront toujours.
                                  </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <section class="service-section py-5">
                      <div class="sec-title">
                        <h2 class="text-center">Nos services de Marketing Digital<span class="dot">.</span></h2>
                        <div class="subtitle">Développer votre notoriété en ligne et augmenter votre rentabilité</div>
                      </div>
                        <div class="row clearfix">
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/seo-marketing.svg" alt="marketing seo">
                              <p class="service-title"><a href="#">Search Engine Optimization (SEO)</a></p>
                              <p class="service-para">
                                Grâce à une recherche minutieuse de mots-clés et à des pratiques de référencement "white hat"", nous pouvons vous aider à obtenir un meilleur référencement et une visibilité accrue dans les résultats de recherche. Notre société de marketing Internet effectue des recherches approfondies sur les mots clés, procède à une optimisation sur et hors page et suit vos résultats avec Google Search Console.<br>
                                Ces pratiques nous permettent d'attirer des prospects et du trafic de haute qualité et d'augmenter vos conversions dans le cadre de vos solutions de marketing numérique.                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-seo-local.svg" alt="marketing seo local">
                              <p class="service-title"><a href="#">SEO Local</a></p>
                              <p class="service-para">
                                Améliorez votre visibilité en ligne et gagnez plus de trafic grâce aux balises méta qui décrivent efficacement le contenu de votre page aux visiteurs de votre site Web et aux moteurs de recherche. Lyneo effectue le référencement technique pour WordPress, ce qui implique l'analyse et l'optimisation de vos méta-descriptions, balises titres, méta-mots-clés, attributs alt et balises robots.<br>
                                De cette façon, nous nous assurons qu'aucune métadonnée mal utilisée ne pourrait nuire gravement à vos performances de référencement.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-seo-technique.svg" alt="marketing seo technique">
                              <p class="service-title"><a href="#">SEO Technique</a></p>
                              <p class="service-para">
                                Établissez une base en ligne solide grâce à des services de référencement technique et de marketing internet sur mesure. Nos experts en référencement technique produisent des rapports d'erreurs d'exploration, vérifient vos codes d'état HTTPS, optimisent la vitesse de votre site, vérifient les redirections et éliminent le contenu dupliqué. Ce faisant, nous augmentons la capacité d'exploration et l'indexabilité de votre site Web.<br>
                                Nous ajoutons également un balisage de données structuré à votre site Web et facilitons la migration du site, en fonction de vos besoins et exigences.                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-link-building.svg" alt="marketing link-building">
                              <p class="service-title"><a href="#">Link Building</a></p>
                              <p class="service-para">
                                Obtenez un flux régulier de trafic en provenance de sites web de haute autorité et augmentez la confiance de vos clients. Notre agence de marketing Internet tire parti des publicités payantes, des parrainages et des collaborations pour placer le contenu de vos pages là où les personnes influentes les verront.<br>
                                Nous utilisons le guest blogging stratégique, publions un contenu unique et convaincant, distribuons des infographies basées sur des données et stimulons votre engagement dans les médias sociaux. De cette façon, nous créons des liens retour de qualité qui génèrent davantage de ventes.                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-developpement-web.svg" alt="marketing developpement web">
                              <p class="service-title"><a href="#">Développement Web</a></p>
                              <p class="service-para">
                                Lyneo construit des sites web personnalisés, prêts pour les mobiles et optimisés pour les moteurs de recherche, qui vous aident à atteindre vos objectifs commerciaux et à soutenir vos campagnes de marketing numérique. Nous créons une hiérarchie visuelle pour mettre en évidence les éléments importants de votre site et encourager les visiteurs de la page à prendre les mesures souhaitées.<br>
                                Nos experts en conception de sites Web utilisent des appels à l'action (CTA) clairs, simplifient les champs de formulaire et créent du contenu pour votre persona.                              </p>
                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-site-sur-mesure.svg" alt="marketing developpement sur mesure">
                              <p class="service-title"><a href="#">Développement sur-mesure</a></p>
                              <p class="service-para">
                                Captez l'attention de vos publics cibles avec un design web professionnel personnalisé qui met en avant les propositions de valeur uniques de votre entreprise. Notre entreprise de marketing numérique dispose d'une équipe <a href="{{route('wordpress')}}">d'experts WordPress</a> ayant des années d'expérience dans la création de sites Web personnalisés pour des marchés de niche spécifiques.<br>
                                Nous analysons les demandes de votre secteur d'activité, concevons des sites Web conformes aux normes ADA et assurons la maintenance continue du site. Ces services de marketing internet sont conçus pour créer une première impression positive de votre marque.                            </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-reseaux-sociaux.svg" alt="marketing reseaux sociaux">
                              <p class="service-title"><a href="#">Marketing sur les réseaux sociaux</a></p>
                              <p class="service-para">
                                Vous êtes prêt à développer et à commercialiser vos produits auprès de votre public sur les médias sociaux ? Nous élaborons des campagnes sur les médias sociaux pour aider votre entreprise à se développer et à susciter l'intérêt de vos adeptes. Notre agence de marketing numérique identifie vos objectifs, effectue une analyse comparative avec la concurrence et évalue le comportement en ligne de vos clients.<br>
                                À l'aide des données et des analyses, nous élaborons des stratégies personnalisées de gestion de la marque sur les médias sociaux et de publicité payante adaptées à votre entreprise.
                              </p>
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-contenu-redactionnel.svg" alt="marketing contenu redactionnel">
                              <p class="service-title"><a href="#">Contenu rédactionnel</a></p>
                              <p class="service-para">
                                Le contenu de votre site Web est crucial : c'est la base de votre référencement et la raison pour laquelle de nombreuses personnes visitent votre site. Confiez la création de votre contenu à Lyneo, et nous le rédigerons avec précision. Nos spécialistes du contenu se tiennent au courant des dernières nouvelles et des tendances du marché pour s'assurer que nous respectons les normes de Google lors de l'élaboration du contenu.<br>
                                Nous rédigeons des titres percutants, utilisons des mots-clés performants, incorporons des images et structurons vos articles pour en faciliter la lecture.                              </p>
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-reputation-en-ligne.svg" alt="marketing réputation en ligne">
                              <p class="service-title"><a href="#">Réputation en ligne</a></p>
                              <p class="service-para">
                                Vos avis et votre réputation en ligne peuvent faire ou défaire votre succès en ligne. Améliorez votre réputation et récoltez les fruits de vos efforts avec l'aide de notre agence de marketing Internet.<br>
                                Notre équipe utilise un logiciel de gestion de la réputation en ligne à la pointe de la technologie pour rationaliser vos pratiques de gestion de la réputation et obtenir davantage d'avis positifs.
                              </p>
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-6 col-12">
                            <div class="icon-box-service">
                              <img class="service-icon" src="{{ asset('images') }}/marketing-hebergement-web.svg" alt="marketing hebergement web">
                              <p class="service-title"><a href="#">Hébergement web</a></p>
                              <p class="service-para">
                                Vous avez besoin d'une entreprise sûre et digne de confiance pour héberger votre nouveau site Web.<br>
                                Faites confiance à Lyneo et vous n'aurez plus à vous en soucier. Notre agence de marketing numérique assure la surveillance du réseau, la sauvegarde et la restauration du système, la recherche et la suppression des logiciels malveillants, la gestion des fichiers et l'accélération de WordPress.<br>
                          </div>
                        </div>
                      </section>
                      <section class="service-section py-5">
                        <div class="sec-title">
                          <h2 class="text-center">Pourquoi vous devriez utiliser des services de marketing numérique<span class="dot">?</span></h2>
                          <div class="subtitle">Attirez davantage de clients et améliorez votre positionnement sur les moteurs de recherche</div>
                        </div>
                        <div class="text-content">
                          <div class="featured">
                            <div class="row clearfix">
                              <div class="text-col col-md-6 col-sm-12">
                                <div class="inner">
                                    <p>
                                      L'industrie du marketing en ligne connaît une croissance sans précédent. Les entreprises étant de plus en plus nombreuses à investir leur temps et leurs ressources dans le marketing en ligne, il ne suffit pas de s'appuyer sur vos anciennes tactiques publicitaires pour séduire les clients.
                                    </p>
                                    <p>
                                      Augmentez votre volume de ventes et construisez une base numérique solide grâce à des services de marketing internet axés sur la valeur. Le marketing numérique vous aide :
                                    </p>
                                </div>
                              </div>
                              <div class="image-col col-md-6 col-sm-12">
                                <div class="image">
                                  <img src="{{ asset('images') }}/marketing-growth.svg" alt="Pourquoi marketing digital">
                                </div>
                              </div>
                            </div>
                            <div class="service-details">
                              <div class="text-content">
                                <div class="featured">
                                  <div class="row clearfix">
                                    <div class="col-md-6 col-sm-12">
                                      <ul>
                                        <li>Économiser du temps, de l'argent et des ressources</li>
                                        <li>Obtenez un énorme retour sur investissement</li>
                                        <li>Suivez les résultats de votre campagne</li>
                                        <li>Ajustez vos stratégies en fonction des analyses et des données</li>
                                        <li>Tirer parti d'un ciblage précis de l'audience</li>
                                      </ul>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                      <ul>
                                        <li>Renforcer la réputation de votre marque en ligne</li>
                                        <li>Optimiser les différents points de contact avec les clients</li>
                                        <li>Promouvoir un plus grand engagement des consommateurs</li>
                                        <li>Favoriser une croissance rentable à long terme</li>
                                        <li>Améliorez vos taux de conversion</li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                  </div>
              </div>



              <!--FAQ section-->
              <section class="faqs-section mb-5">
                <div class="sec-title centered">
                  <h2>Questions fréquentes sur le marketing digital<span class="dot">.</span></h2>
                </div>
                <div class="text-center mb-5">
                </div>

                <div class="auto-container">
                  <div class="row clearfix">
                    <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                      <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">1.</span> Qu'est ce que le marketing digital?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le marketing digital englobe tous les aspects et activités du marketing d'une organisation, d'une entreprise ou d'une marque sur les canaux numériques de l'internet. Les stratégies et tactiques de marketing numérique sont conçues pour cibler des publics spécifiques en ligne sur une variété d'appareils connectés à Internet.<br>
                                    Le marketing digital comprend l'optimisation sur les moteurs de recherche (comme Google et Bing), la visibilité et l'engagement sur les plateformes de médias sociaux, les communications par courrier électronique, la conception et le développement de sites web et les applications intégrées pour se connecter et s'engager avec les prospects et les clients.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">2.</span> Que fait un spécialiste du marketing digital?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Un spécialiste du marketing digital est un spécialiste du marketing qui comprend comment développer et déployer des stratégies de marketing efficaces en ligne.<br>
                                    Un spécialiste du marketing digital sait comment se connecter à un public en ligne. Il peut veiller à ce que votre marque s'engage auprès de votre consommateur, du premier point de contact au service après-vente.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">3.</span> Est-ce que mon entreprise a besoin d'une startégie de marketing digital?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Toute marque doit avoir une représentation en ligne de son activité. Cependant, votre empreinte numérique n'aura aucun impact si vous ne la commercialisez pas avec succès. Toute entreprise bénéficierait d'une stratégie de marketing numérique continue et complète et du soutien d'une équipe marketing experte.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">4.</span> Quel est le rapport coût-efficacité du marketing digital par rapport au marketing traditionnel?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Le marketing digital est rentable dans la mesure où vous pouvez transmettre votre message directement à votre public idéal. Considérez que le marketing traditionnel jette un large filet sur le grand public. En revanche, le marketing digital adopte une approche ciblée et engage le consommateur avec le bon message au bon moment.<br>
                                    Vous pouvez mesurer vos efforts de marketing digital et les coûts qu'ils impliquent assez facilement et limiter les dépenses inutiles. C'est beaucoup plus difficile avec les campagnes de marketing traditionnelles. De plus, les coûts liés à l'embauche d'une agence de marketing digital dépendent de l'ampleur du projet.
                                  </div>
                              </div>
                          </div>
                        </li>
                        <li class="accordion block">
                          <div class="acc-btn"><span class="count">5.</span> Comment identifier une entreprise de marketing digital performante ?</div>
                          <div class="acc-content">
                              <div class="content">
                                  <div class="text">
                                    Recherchez une entreprise qui prend le temps d'évaluer vos besoins actuels et futurs en matière de marketing. Une agence de marketing digital digne de ce nom ne promet pas de résultats immédiats, car les stratégies digitales mettent du temps à produire des résultats. Mais elle disposera d'une équipe d'experts capables d'identifier les besoins et les lacunes de votre stratégie actuelle.<br>
                                    De plus, elle travaillera avec vous pour établir des résultats, s'aligner sur vos objectifs et proposer des rapports cohérents et transparents. Méfiez-vous des entreprises qui proposent une solution rapide. Choisissez une agence dont les succès sont avérés, qui présente des témoignages de clients et des études de cas et dont les services font l'objet d'excellentes critiques.
                                  </div>
                              </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </section>
            </div>


            <!-- Call To Section -->
            <section class="call-to-section-two alternate">
                <div class="auto-container">
                    <div class="inner clearfix">
                        <h2>Besoin d'une stratégie marketing?<br>Vous avez des questions?</h2>
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
