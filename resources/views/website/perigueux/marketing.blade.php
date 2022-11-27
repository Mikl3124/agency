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
                      <h1>Agence de marketing digital à <br>Périgueux</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Périgueux - Agence de marketing digital</li>
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
                          <h4 class="text-center">Créez une présence en ligne sur mesure qui donne des résultats.<span class="dot">.</span></h4>
                        </div>
                          <div class="main-image image">
                            <img src="{{ asset('images') }}/marketing-ville.svg" alt="SEO à Perigueux">
                          </div>
                          <div class="text-content">
                            <p>Lyneo est une agence de marketing numérique à Périgueux qui offre des services complets pour que votre entreprise puisse atteindre son plein potentiel.<br><span id="dots">...</span><span id="more"><br>Notre équipe de professionnels du marketing expérimentés sait comment développer et exécuter des stratégies adaptées à chaque entreprise spécifique, afin de générer des prospects et des conversions.<br>
                              Nos sites Web sur mesure sont conçus dans le but d'engager les clients et d'augmenter la visibilité dans les recherches. Nous utilisons une variété de techniques de référencement telles que la recherche de mots-clés, les liens retour, l'optimisation du contenu et plus encore - tout en veillant à ce qu'ils aient un aspect professionnel et moderne en même temps.<br><br>
                              Pour les entreprises qui cherchent à étendre leur portée encore plus loin, les campagnes PPC de Lyneo vous aident à attirer plus d'yeux sur votre marque en utilisant des plateformes populaires comme Google Ads. En outre, notre expertise en matière de médias sociaux peut vous aider à promouvoir vos produits ou services sur différents canaux.<br><br>
                              Si vous envisagez de créer une entreprise à Périgueux, étant donné le dynamisme économique actuel de la ville, c'est certainement une bonne idée. Mais comme pour toute nouvelle entreprise, il est essentiel que vous ayez quelques stratégies innovantes dans votre manche - et il n'y a pas de moyen plus efficace de rendre votre marque visible que par le biais du marketing numérique. Cela dit, assurez-vous de choisir une agence réputée à Périgueux qui vous mettra sur la voie du succès.<br><br>
                              Lyneo est la meilleure agence de marketing digital à Périgueux grâce à notre équipe expérimentée et innovante.Notre compréhension profonde du marketing internet Lyneo est née d'une passion pour voir les entreprises réussir grâce à des campagnes digitales de pointe.Nous ne sommes pas juste une autre tête parlante - notre expérience prouve que nous savons comment obtenir des résultats réels pour nos clients.<br>
                              De la conception et du développement de sites Web à l'optimisation des moteurs de recherche en passant par le marketing des médias sociaux, nos solutions de marketing numérique mettront votre marque sur la carte.
                            </span>
                            <button onclick="myFunction()" id="myBtn">En lire plus</button>
                          </div>
                      </div>
                  </div>

                  @include('layouts.sidebar')

                  <!--Content Side-->
                  <div class="content-side col-lg-12 col-md-12 col-sm-12 pt-5">
                    <div class="sec-title">
                      <h2 class="text-center">Nos services de marketing digital à Périgueux<span class="dot">.</span></h2>
                      <div class="subtitle">Trouvez votre marché cible avec précision en utilisant le message idéal</div>
                    </div>

                    <section class="service-section">
                      <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="how-it-works-card text-center">
                                <div class="how-it-works-card__inner">
                                  <img class="my-5 icon-box-2" src="{{ asset('images') }}/seo-ville.png" alt="SEO Périgeux">
                                    <h3 class="how-it-works-card__title">
                                        <a href="{{ route('seo-perigueux')}}">Search Engine Optimisation - SEO</a>
                                    </h3><!-- /.how-it-works-card__title -->
                                    <p class="mt-3 mx-3">
                                      Nos experts en marketing numérique à Périgueux sont formés pour créer et superviser des campagnes de référencement efficaces.<br>
                                      Nous commençons par auditer votre site web et rechercher des mots-clés pertinents pour votre activité. À partir de là, nous personnalisons toutes nos stratégies pour les aligner sur vos objectifs.
                                    </p><!-- /.how-it-works-card__text -->
                                    <!-- /.how-it-works-card__link -->
                                </div><!-- /.how-it-works-card__inner -->
                            </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/web-dev-ville.png" alt="Developpement web Perigueux">
                                  <h3 class="how-it-works-card__title">
                                      <a href="{{ route('web-perigueux')}}">Développement Web</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Chez Lyneo, nous disposons d'une équipe de développeurs web innovants située à Périgueux.
                                    Ils excellent dans la conception de sites qui sont attrayants et génèrent un trafic qui convertit.
                                    Nous offrons un service complet pour vos projets web, y compris la conception, le développement et la maintenance.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/reseaux-sociaux-ville.png" alt="Reseaux sociaux Périgueux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Marketing de réseaux sociaux</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Laissez-nous vous soulager du poids du marketing des médias sociaux pour que vous puissiez vous concentrer sur des questions plus urgentes.<br>
                                    Notre équipe de professionnels du marketing numérique à Périgueux apprendra à connaître la voix et le message de votre marque pour créer des campagnes de médias sociaux sur mesure mettant en valeur ce qui vous rend unique.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/reputation-en-ligne-ville.png" alt="Reputation en ligne Périgueux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Réputation en ligne</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre service de gestion de la réputation peut vous aider à prendre le contrôle de votre présence en ligne.<br>
                                    Ne laissez pas les avis négatifs tirer votre entreprise vers le bas - nos experts en marketing numérique à Périgueux peuvent vous aider à mettre en avant des clients satisfaits et à construire une identité de marque forte.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/redaction-contenu-ville.png" alt="Redaction de contenu Périgueux">
                                  <h3 class="how-it-works-card__title">
                                      <p>Rédaction de contenu</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Nous proposons des services de rédaction de contenu exceptionnels pour améliorer la présence en ligne de votre entreprise.<br>
                                    Que vous cherchiez à attirer de nouveaux prospects ou à augmenter votre chiffre d'affaires, notre équipe de marketing numérique Périgourdine rédigera un contenu attrayant et convaincant, adapté à vos besoins.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                        <div class="col-md-12 col-lg-6">
                          <div class="how-it-works-card text-center">
                              <div class="how-it-works-card__inner">
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/paiment-par-clic-ville.png" alt="Paiement par clic Périgueux">
                                  <h3 class="how-it-works-card__title">
                                      <a href="{{ route('publicite-en-ligne') }}">Paiement par clic - PPC</a>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Grâce à nos services de gestion PPC, vous pouvez rapidement vous connecter à votre public cible et obtenir des résultats grâce à des tactiques efficaces de paiement par clic.<br>
                                    Nous restons à jour sur les dernières stratégies AdWords et autres plateformes publicitaires afin de générer des conversions pour votre entreprise.
                                  </p><!-- /.how-it-works-card__text -->
                                  <!-- /.how-it-works-card__link -->
                              </div><!-- /.how-it-works-card__inner -->
                          </div><!-- /.how-it-works-card -->
                        </div><!-- /.col-md-12 col-lg-6 -->
                      </div>
                    </section>
                  </div>
                </div>

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title mt-5">
                    <h2 class="text-center">Pourquoi choisir Lyneo pour votre marketing digital à Périgueux<span class="dot">?</span></h2>
                    <div class="subtitle">Grâce à nos puissantes solutions de marketing, vous pouvez atteindre vos objectifs commerciaux.</div>
                  </div>
                  <div class="service-details">
                    <div class="text-content">
                      <div class="featured">
                        <div class="row clearfix">
                          <div class="text-col col-md-7 col-sm-12">
                            <div class="inner">
                              <p>Afin d'établir une relation client-entreprise fructueuse avec une agence de marketing numérique, vous devez vous associer à une agence qui s'engage à comprendre vos objectifs spécifiques.<br>
                                L'agence idéale proposera également ses services pour vous aider à obtenir les résultats que vous souhaitez afin que votre entreprise puisse bénéficier d'un retour sur investissement maximal pour ses dépenses de marketing.
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
                            <p>Il y a toujours un risque lorsque les entreprises investissent dans des campagnes de marketing numérique. Comme il n'y a aucune garantie de succès et que les règles changent constamment, il est facile de comprendre pourquoi certains propriétaires d'entreprise hésitent à faire le grand saut. <br>
                              Cependant, l'agence de marketing numérique Lyneo à Périgueux possède l'expérience et l'expertise nécessaires pour obtenir des résultats exceptionnels pour ses clients. Nous ne mettons en œuvre que des stratégies éprouvées qui ont aidé d'autres entreprises comme la vôtre à atteindre les objectifs souhaités<br>
                              Et si vous n'êtes toujours pas convaincu, voici quelques raisons supplémentaires pour lesquelles Lyneo devrait être votre choix privilégié pour tout ce qui concerne le marketing numérique :
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
                                <img class="my-5 icon-box-2" src="{{ asset('images') }}/experts-marketing-ville.png" alt="Experts marketing Périgueux">
                                <h3 class="how-it-works-card__title">
                                      <p>Nous sommes des experts en marketing digital</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Forte de plusieurs années d'expérience et d'un large éventail de compétences, notre équipe est plus que qualifiée pour prendre en charge vos projets de marketing numérique.<br>
                                    Chez nous, nous n'embauchons que des personnes qui sont au sommet de leur domaine, vous pouvez donc être sûr de recevoir un service de premier ordre.
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
                                      <p>Vous obtenez de véritables résultats</p>
                                  </h3><!-- /.how-it-works-card__title -->
                                  <p class="mt-3 mx-3">
                                    Notre équipe vous fournit des résultats atteignables qui atteignent toujours - et souvent dépassent - vos objectifs commerciaux.<br>
                                    Grâce à nos recherches fondées sur des preuves, nous nous assurons que chaque projet a de bonnes chances de réussir au lieu de s'éteindre et d'être une perte de temps et d'argent.
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
                                    <p>Recherche de l'excellence</p>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Lyneo ne met pas seulement fin à ses services une fois que les objectifs du client ont été atteints.<br>
                                  Nous aidons également nos clients à identifier les domaines potentiels d'amélioration et de développement continu afin qu'ils puissent dépasser leurs attentes. Cet accent mis sur la croissance permet à nos clients de réaliser plus que ce qu'ils pensaient initialement possible.
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
                                    <p>Approchée axée sur le client<p>
                                </h3><!-- /.how-it-works-card__title -->
                                <p class="mt-3 mx-3">
                                  Lyneo donne la priorité à ses clients. Tout ce que nous faisons est basé sur ce qui les aidera à réussir. Nous prenons le temps de comprendre les objectifs commerciaux de nos clients afin de pouvoir créer une stratégie de marketing numérique qui soutiendra ces objectifs.<br>
                                  Nos services sont conçus avec une seule chose en tête : aider nos clients à réaliser leur vision.
                                </p>                                <!-- /.how-it-works-card__link -->
                            </div><!-- /.how-it-works-card__inner -->
                        </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                          <div class="how-it-works-card__inner">
                            <img class="my-5 icon-box-2" src="{{ asset('images') }}/transparence-lyneo.png" alt="transparence de Lyneo">
                              <h3 class="how-it-works-card__title">
                                  <p>Nous sommes tranparents<p>
                              </h3><!-- /.how-it-works-card__title -->
                              <p class="mt-3 mx-3">
                                À notre agence, nous sommes fiers d'être ouverts et honnêtes avec tous nos clients. Nous fournissons des rapports mensuels complets qui comprennent des statistiques de performance issues de Google Analytics ainsi que des rapports détaillés sur le référencement.<br>
                                De cette façon, nos clients sont toujours tenus au courant de tout changement ou mise à jour de leur projet.
                              </p>                                <!-- /.how-it-works-card__link -->
                          </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                      <div class="how-it-works-card text-center">
                        <div class="how-it-works-card__inner">
                          <img class="my-5 icon-box-2" src="{{ asset('images') }}/innovation-lyneo.png" alt="Lyneo innove en permanence">
                            <h3 class="how-it-works-card__title">
                                <p>Nous innovons en permanence</p>
                            </h3><!-- /.how-it-works-card__title -->
                            <p class="mt-3 mx-3">
                              Nous ne croyons pas à la pensée ou aux méthodes conventionnelles. Les membres de notre équipe à Périgueux sont toujours à la recherche d'idées marketing nouvelles et créatives à appliquer à nos campagnes.<br>
                              Nous nous tenons au courant des dernières tendances du secteur et identifions celles qui ont le plus de chances de réussir.
                            </p>                                <!-- /.how-it-works-card__link -->
                        </div><!-- /.how-it-works-card__inner -->
                      </div><!-- /.how-it-works-card -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
              </div><!-- /.auto-container -->

              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="sec-title mt-5">
                  <h2 class="text-center">Lyneo: Agence de marketing digital à Périgueux<span class="dot">.</span></h2>
                </div>
                <div class="service-details">
                  <div class="text-content">
                    <div class="featured">
                      <div class="row clearfix">
                        <div class="text-col col-md-7 col-sm-12">
                          <div class="inner">
                            <p>
                              Lyneo est une agence de marketing numérique expérimentée qui peut aider toute entreprise, marque, association ou institution à créer une campagne de marketing numérique réussie. Basés à Périgueux, nous servons des clients de toute la région.
                            </p>
                            <p>
                              Nous utilisons une technologie de pointe pour aider nos clients à gagner en visibilité, à construire leur image et à commercialiser leurs produits ou services. Notre engagement envers l'excellence nous a valu la certification Google Partner Adwords et Analytics.
                            </p>
                            <p>
                              Notre équipe de professionnels passionnés aux compétences diverses nous permet d'offrir une gamme complète de services de communication numérique.
                            </p>
                          </div>
                        </div>
                        <div class="image-col col-md-4 col-sm-12">
                          <div class="image">
                            <img src="{{ asset('images') }}/localisation.svg" alt="Lyneo agence de marketing digital à Périgueux">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="sec-title mt-5">
                  <h2 class="text-center">Pourquoi est-il nécessaire de faire du marketing digital à Périgueux<span class="dot">?</span></h2>
                </div>
                <div class="service-details">
                  <div class="text-content">
                    <div class="featured">
                      <div class="row clearfix">
                        <div class="image-col col-md-4 col-sm-12">
                          <div class="image">
                            <img src="{{ asset('images') }}/pourquoi-marketing.svg" alt="Pourquoi est-il nécessaire de faire du marketing digital à Périgueux">
                          </div>
                        </div>
                        <div class="text-col col-md-7 col-sm-12">
                          <div class="inner">
                            <p>
                            Parce que de nombreux acheteurs font désormais leurs achats en ligne, il est essentiel pour toute entreprise d'avoir une présence sur le Web. En outre, ces entreprises doivent trouver des moyens d'atteindre et d'engager leurs clients potentiels grâce au marketing numérique. C'est le cœur du webmarketing.
                            </p>
                            <p>
                            Disposer des bons outils de marketing numérique est essentiel à votre réussite. Lyneo, une agence basée en Périgord, peut vous fournir les solutions les plus modernes et les plus efficaces pour vous aider à développer votre entreprise. Notre objectif est d'augmenter votre visibilité, puis de la convertir en clients grâce à nos différents services de webmarketing.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-side col-lg-12 col-md-12 col-sm-12">
                <div class="service-details">
                  <div class="text-content">
                    <div class="featured">
                      <div class="row clearfix">
                        <div class="text-col col-md-7 col-sm-12">
                          <div class="inner">
                            <h4>Les objectifs et la pensée derrière notre agence de marketing numérique à Périgueux.</h4>
                            <p>
                              L'objectif de Lyneo est de vous aider à développer votre entreprise. Pour ce faire, nous commençons par accroître votre visibilité, puis nous la convertissons en opportunités potentielles à court, moyen et long terme.
                            </p>
                            <p>
                              Avec notre équipe de professionnels compétents, nous vous aiderons à atteindre les objectifs de performance que vous souhaitez. Nous pensons qu'investir dans la communication numérique est crucial pour toute entreprise désireuse de réussir.
                            </p>
                            <h4>
                              Développer des stratégies numériques
                            </h4>
                            <p>
                              Sans stratégie numérique, il est difficile de tirer le meilleur parti des opportunités du web. Vos actions numériques doivent avoir un but et être cohérentes avec vos objectifs web.
                            </p>
                            <p>
                              Lyneo est une agence de marketing numérique qui s'efforce de fournir à ses clients les meilleurs outils pour réussir. Nous tenons compte de vos objectifs, de vos cibles et de votre budget lorsque nous concevons une stratégie numérique afin d'améliorer votre visibilité de la manière la plus efficace possible.
                            </p>

                          </div>
                        </div>
                        <div class="image-col col-md-4 col-sm-12">
                          <div class="image">
                            <img src="{{ asset('images') }}/objectif.svg" alt="Objectif et philosophie agence marketing digital à Périgueux">
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
                            <div class="acc-btn"><span class="count">1.</span> Comment définir une bonne stratégie digitale ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      Votre stratégie numérique doit s'articuler autour de vos buts et objectifs commerciaux. Gardez à l'esprit votre public cible, votre budget et vos ressources lorsque vous la planifiez. Enfin, veillez à faire preuve de souplesse afin de pouvoir modifier les choses si le marché ou le secteur évolue au fil du temps.
                                    </div>
                                </div>
                            </div>
                          </li>
                          <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Pourquoi recourir à une agence marketing digital à Périgueux ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      Il existe de nombreuses raisons d'engager une agence de marketing numérique à Périgueux. En créant une forte présence en ligne pour votre entreprise, vous pouvez augmenter le trafic sur votre site Web et les taux de conversion.<br>
                                      De plus, une agence de marketing numérique peut vous aider à optimiser votre site Web pour le classement dans les moteurs de recherche afin que les clients potentiels puissent vous trouver facilement en ligne. Une agence de marketing numérique peut vous aider à atteindre votre marché cible en utilisant les bons mots-clés et le bon contenu. En outre, elle mesure votre succès afin que vous sachiez toujours comment améliorer votre stratégie de marketing en ligne.
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
                  <h2>Besoin d'une agence pour votre <br> Marketing Digital?</h2>
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


