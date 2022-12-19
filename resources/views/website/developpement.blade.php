@extends('layouts.website')
@section('content')
        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/developpement-web.png)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Développement Web</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route('home')}}">Accueil</a></li>
                              <li class="active">Développement</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--End Banner Section -->


      <section class="process-one">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/strategie-entreprise.png" alt="Strategie entreprise">
                    </div><!-- /.process-one__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="process-one__content">
                        <div class="sec-title">
                            <h2>Stratégie d'entreprise <span class="dot">.</span><!-- /.dot -->
                            </h2>
                        </div><!-- /.sec-title -->
                        <p class="process-one__summery">Votre site web est le principal outil de la présence numérique de votre entreprise. Il doit être conçu et développé pour vous servir de la meilleure façon possible, tant d'un point de vue fonctionnel que marketing.<br>
                          Vous avez peut-être besoin d'un endroit où les clients peuvent facilement découvrir les services que vous proposez, ou peut-être d'un site facile à mettre à jour en quelques clics?<br>
                          Dans cette phase, nous découvrons exactement comment votre site Web servira votre entreprise.</p><!-- /.process-one__summery -->
                    </div><!-- /.process-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/web-architecture.png" alt="architecture web">
                    </div><!-- /.process-one__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="process-one__content">
                        <div class="sec-title">
                            <h2>Architecture de l'information <span class="dot">.</span><!-- /.dot -->
                            </h2>
                        </div><!-- /.sec-title -->
                        <p class="process-one__summery">Une bonne architecture d'information est la base de tout projet de conception Web. Elle détermine la manière dont les utilisateurs percevront le contenu du site et interagiront avec lui, ce qu'ils trouveront lorsqu'ils l'exploreront et comment vous pourrez les amener à s'engager plus profondément. C'est pourquoi, dans notre <a href="{{ route('web_cible') }}">agence web</a> nous accordons tant d'importance à cette phase du projet : une architecture informationnelle conditionne la réussite ou l'échec de tout le reste !</p><!-- /.process-one__summery -->
                    </div><!-- /.process-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/maquette-web.png" alt="maquette web">
                    </div><!-- /.process-one__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="process-one__content">
                        <div class="sec-title">
                            <h2>Maquettes <span class="dot">.</span><!-- /.dot -->
                            </h2>
                        </div><!-- /.sec-title -->
                        <p class="process-one__summery">Les maquettes sont un excellent moyen de se faire une idée de l'apparence de votre site Web. Elles présentent des images qui simulent la mise en page, la conception et les options de marque du site, afin que vous sachiez à quoi il ressemblera lorsqu'il sera opérationnel ! Une maquette bien conçue n'est pas seulement esthétique, elle permet aussi de communiquer avec les clients sur des aspects de leur activité tels que la rédaction ou l'attrait visuel.
                          <br>
                          Si vous avez déjà réalisé des maquettes et que vous souhaitez simplement que nous développions votre site, nous pouvons sauter cette étape !</p><!-- /.process-one__summery -->

                    </div><!-- /.process-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 process-one__image__column">
                    <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/copyright.png" alt="redaction web">
                    </div><!-- /.process-one__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="process-one__content">
                        <div class="sec-title">
                            <h2>Rédaction <span class="dot">.</span><!-- /.dot -->
                            </h2>
                        </div><!-- /.sec-title -->
                        <p class="process-one__summery">Un site Web de qualité attire l'attention de vos utilisateurs, mais sans mots ni contenu, il n'est qu'une coquille vide. Le contenu d'un site doit faire l'objet de recherches approfondies afin d'offrir une perspective unique qui résout les problèmes des utilisateurs. Ainsi, ces derniers ne se contenteront pas de trouver ce qu'ils recherchent sur votre page Web, mais ils y resteront.</p><!-- /.process-one__summery -->
                    </div><!-- /.process-one__content -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
              <div class="col-md-12 col-lg-6 process-one__image__column">
                  <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                      <img src="{{ asset('images') }}/web-developpement.png" alt="web developpement">
                  </div><!-- /.process-one__image -->
              </div><!-- /.col-md-12 col-lg-6 -->
              <div class="col-md-12 col-lg-6">
                  <div class="process-one__content">
                      <div class="sec-title">
                          <h2>Développement <span class="dot">.</span><!-- /.dot -->
                          </h2>
                      </div><!-- /.sec-title -->
                      <p class="process-one__summery">Avec notre équipe de <a href="{{ route('custom') }}">développement personnalisé</a>, vous pourrez être sûr que chaque détail de votre site Web est exactement comme vous le souhaitiez. Cela inclut la réalisation de toutes les maquettes et leur intégration dans un site fonctionnel.
                        <br>
                        Notre CMS/plateforme dépend des besoins individuels du projet, mais nous aimons généralement travailler avec <a href="{{ route('wordpress') }}">WORDPRESS</a>  parce qu'il nous offre une flexibilité de conception totale, sans nous faire perdre de temps à réécrire du code à la main.
                        <br>
                        Les services personnalisés offerts par notre équipe de développement garantissent que chaque élément de votre produit - depuis les détails esthétiques jusqu'aux fonctions sous-jacentes - correspond exactement à vos attentes.</p><!-- /.process-one__summery -->

                  </div><!-- /.process-one__content -->
              </div><!-- /.col-md-12 col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.auto-container -->
    </section><!-- /.process-one -->


      <section class="faqs-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><span class="count">1.</span> Agence de développement web  - Comment la choisir?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      <h5>Lorsque vous choisissez une société de conception de sites Web , nous vous conseillons de prêter aux 8 éléments suivants : </h5>
                                      <ol>
                                        <li>1- Le nombre d'années d'existence de l'entreprise sur le marché</li>
                                        <li>2- Aux types de projets sur lesquels la société de conception de sites Web a travaillé</li>
                                        <li>3- La qualité de conception du sont site internet</li>
                                        <li>4- Le niveau de qualification du responsable lors de la discussion de votre projet</li>
                                        <li>5- Existe-t-il un suivi du site web pendant et après la vente</li>
                                        <li>6- L'entreprise vous propose t'elle un service de maintenance?</li>
                                        <li>7- L'entreprise fournit-elle des services de promotion du site web (Référencement Naturel SEO, payant SEA ...)?</li>
                                        <li>8- Coût total de la création d'un site web</li>
                                      </ol>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">2.</span> Développeurs de sites web à - Que font-ils ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      <h5>Lors du développement d'un site web, un concepteur de sites web effectue les tâches suivantes :</h5>
                                      <h6>1- Enquête auprès des clients</h6>
                                      <p>Pour comprendre les principaux buts et objectifs du futur site. Elle aide le concepteur de sites Web à déterminer le public cible et la stratégie de développement du site.</p>
                                      <h6>2- Élaboration d'un prototype de conception de site web</h6>
                                      <p>Sur la base d'une enquête, la société de conception de sites Web crée un prototype du futur site. Le prototype de conception comprend une structure schématique de chaque page, ce qui permet au client de voir la logique de la présentation des informations.</p>
                                      <h6>3- Développement de la conception des pages du site</h6>
                                      <p>Après l'approbation du prototype par le client, l'agence web développe le design de chaque page du futur site.<br>
                                      La structure classique du site web de l'entreprise :<br>
                                      Page principale, à propos de l'entreprise, services, actualités, catalogue de produits, contacts...<br>
                                      Le design de chaque page est envoyé au client pour approbation.</p>
                                      <h6>4- Création du site test</h6>
                                      <p>Après avoir approuvé l'apparence des pages, la partie programmation commence. Au cours de cette phase, les tâches suivantes seront effectuées:
                                        <ul>
                                          <li>- Création d'un site de test</li>
                                          <li>- Si le choix d'un CMS (Content Management System - Wordpress) a été retenu, celui-ci est configuré. Pour que le client puisse facilement gérer les informations</li>
                                          <li>- Le design est intégré sur le site web de test</li>
                                          <li>- Le site est rempli d'informations textuelles et visuelles sur le client</li>
                                          <li>- L'affichage du site est testé sur tous les appareils (ordinateurs, tablettes, téléphones)</li>
                                        </ul>
                                      Après la phase de test - un site de test est envoyé au client pour approbation.</p>
                                      <h6>5- Lancement du site web</h6>
                                      <p>Après l'approbation du site de test, il est transféré vers un domaine réel. L'accès au site est envoyé au client.</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">3.</span> Que comprend le service de création de sit web de Nyleo?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      <p>Notre service de développement de site web inclus:</p>
                                      <ul>
                                        <li>- Le briefing client</li>
                                        <li>- La présentation d'un prototype</li>
                                        <li>- La création du design du site web</li>
                                        <li>- Les tests de conception du site web</li>
                                        <li>- Les tests visuels du site web sur tous les appareils</li>
                                        <li>- Le lancement du sitee internet</li>
                                      </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"><span class="count">4.</span> Conception d'un site Web - Quel est le prix ?</div>
                            <div class="acc-content">
                                <div class="content">
                                    <div class="text">
                                      <h5>Combien coûte la création d'un site web ?</h5>
                                      <p>Il n'est pas facile de répondre de façon précise à cette question. En effet, le prix de la conception d'un site Web dépend des qualifications du concepteur, de la taille du site (nombre de pages à créer et temps nécessaire).
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
                  <h2>Besoin d'un site Web? <br>Vous avez des questions?</h2>
                  <div class="link-box">
                      <a class="theme-btn btn-style-two" href="{{ route("website.contact") }}">
                          <i class="btn-curve"></i>
                          <span class="btn-title">Parlons-en</span>
                      </a>
                  </div>
              </div>
          </div>
      </section>


@endsection
