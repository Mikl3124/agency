@extends('layouts.website')
@section('content')


        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/ecommerce-lyneo.png)" ></div>
            <div class="shape-1"></div>
              <div class="shape-2"></div>
                <div class="banner-inner">
                  <div class="auto-container">
                    <div class="inner-container clearfix">
                      <h1>Sites E-commerce</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="index-main.html">Home</a></li>
                              <li><a href="services.html">Services</a></li>
                              <li class="active">Website Development</li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--End Banner Section -->

      <div class="sidebar-page-container">
        <div class="auto-container">
          <div class="row clearfix">
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
              <div class="service-details">
                <div class="main-image image">
                  <img src="{{ asset('images') }}/developpement e-commerce.png" alt="site ecommerce à bordeaux">
                </div>
                  <div class="text-content">
                    <h3>Notre expertise des sites E-commerce à votre service</h3>
                        Situés à Bordeaux, nous utilisons des idées novatrices et des stratégies éprouvées pour développer des sites E-commerce performants.<br>
                        Une boutique en ligne réussie doit offrir une expérience utilisateur de premier ordre, disposer de toutes les fonctionnalités permettant aux utilisateurs de naviguer facilement et de trouver les caractéristiques du produit qui faciliteront la décision d'achat de l'utilisateur.<br>
                        Cependant, si votre site est lent, l'interface utilisateur confuse ou qui manque de fonctionnalités cruciales, celà entraînera une réduction de vos ventes.<br>
                        Ainsi, que vous souhaitiez créer une toute nouvelle boutique en ligne, ou que vous cherchiez à apporter des modifications à votre e-commerce, notre équipe a une solution pour répondre à vos besoins.
                  </div>
                </div>
            </div>

            @include('layouts.sidebar')

          </div>
          <div class="featured mb-5">
            <div class="row clearfix">
              <div class="image-col col-md-6 col-sm-12">
                <div class="image">
                  <img src="{{ asset('images') }}/shopping-web.png" alt="shopping">
                </div>
              </div>
              <div class="text-col col-md-6 col-sm-12">
                <div class="inner">
                  <h4>Expertise & Qualité</h4>
                  <p>Nous nous associons à nos clients pour leur fournir une boutique en ligne hautement fonctionnelle qui génère plus de ventes, est facile à gérer, adaptées au mobiles, prête pour le référencement et évolutive.</p>
                  <p>
                    Nous permettons à nos clients de commerce électronique de Bordeaux d'échapper à l'ordinaire et de développer leurs activités. Le développement de sites de commerce électronique est notre spécialité. En tant qu'équipe de commerce électronique de premier ordre de Bordeaux, nous nous assurons d'être en avance sur toutes les innovations du secteur du commerce électronique, qu'il s'agisse de la conception et du développement de sites Web, des meilleures pratiques en matière d'interface utilisateur et de marketing numérique.
                  </p>
                </div>
              </div>
              <p>
                Nous disposons d'une équipe de spécialistes du marketing, chacun se spécialisant dans sa propre tactique pour former des stratégies cohérentes et globales. Avec des experts dans des domaines tels que le marketing et l'optimisation des moteurs de recherche, le paiement par clic, le marketing par courriel, le marketing organique et payant des médias sociaux, nous avons les compétences et les ressources nécessaires pour fournir une stratégie de marketing axée sur les résultats et adaptée à vos besoins.
              </p>
            </div>
          </div>


        <section class="faqs-section mb-5">
          <div class="sec-title centered">
            <h2>Des questions<span class="dot">?</span></h2>
            <h6>"Ce son les question que vous nous posez le plus souvent, lorsque nous parlons d'un site E-commerce"</h6>
          </div>
          <div class="auto-container">
            <div class="row clearfix">
              <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                <ul class="accordion-box clearfix">
                  <!--Block-->
                  <li class="accordion block">
                    <div class="acc-btn">
                      <span class="count">1.</span> Combien coûte un site E-commerce?
                    </div>
                      <div class="acc-content">
                        <div class="content">
                          <div class="text">
                            <p>C'est la question qui revient le plus souvent, et la réponse rapide est : ça dépend.<br>
                              Les exigences en matière de conception et de fonctionnalité pour un projet de conception de site E-commerce peuvent varier considérablement d'une entreprise à l'autre, en fonction du secteur et des objectifs.<br>
                              Dès que nous entamons la discussion sur votre projet, nous recueillons des informations sur les exigences et les objectifs de votre entreprise et préparons ainsi le devis pour le projet.<br>
                              Vous pouvez nous soumettre une demande de devis pour obtenir un devis gratuit et sans engagement pour votre projet. N'hésitez pas.
                            </p>
                          </div>
                        </div>
                      </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">2.</span> Comment se déroule le développement d'un site E-commerce?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  Un site E-commerce est plus complexe qu'un site Web vitrine, il faut donc plus de temps pour mener à bien le projet.<br>
                                  Pour un projet typique de développement d'un site de commerce électronique, nous estimons que le délai moyen se situe entre six à douze semaines.<br>
                                  Cependant, nous fixons le rythme en fonction de nos clients et nous ne précipitons jamais le projet.<br>
                                  Dès le début du projet, nous planifions et vous donnons un aperçu de la préparation des informations pour votre site Web, telles que le contenu, les informations et les photos des produits, et d'autres détails tels que l'expédition, les informations fiscales, etc...<br>
                                  Ainsi, pendant que nous préparons votre nouvelle boutique en ligne, vous pouvez préparer le contenu et les informations dont nous avons besoin pour créer votre boutique en ligne.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">3.</span> Quelle est la meilleure solution E-commerce pour mon projet?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  Le choix de la solution e-commerce, dépendra de la taille, de l'échelle et des fonctionnalités nécessaires en fonction des besoins de votre entreprise.<br>
                                  Nous travaillons avec une variété de solutions e-commerce telles que <a href="https://www.shopify.com/fr">SHOPIFY</a>, <a href="https://woocommerce.com/">WOOCOMMERCE</a>, <a href="https://laravel.com/">LARAVEL</a>.<br>
                                  Si vous mettez en place une nouvelle boutique en ligne ou si vous avez un nombre d'articles limités, nous vous suggérons d'opter pour WooCommerce ou Shopify.<br>
                                  En revanche, si vous avez accès à un vaste catalogue, nous vous recommandons d'opter pour une solution LARAVEL.<br>
                                  Vous pouvez discuter avec notre expert en développement e-commerce des meilleures solutions pour votre projet.
                                </div>
                            </div>
                        </div>
                    </li>

                    <!--Block-->
                    <li class="accordion block">
                        <div class="acc-btn"><span class="count">4.</span> Dois-je habiter à Bordeaux pour travailler avec vous?</div>
                        <div class="acc-content">
                            <div class="content">
                                <div class="text">
                                  Pas du tout. Nous travaillons avec des clients de la France entière, et avons réalisé avec succès leur projet de boutique ecommerce.<br>
                                  Nous utilisons les appels vidéo, les appels téléphonique, les emails... pour faciliter la communication sur votre projet et en faciliter l'exécution.<br>
                                  Ainsi, que vous soyez à Bordeaux, en Aquitaine, ou dans une autre ville Française, notre équipe travaille efficacement pour mener à bien votre projet.
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">5.</span> Serais-je capable de gérer moi-même ma boutique en ligne?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Oui. Votre site e-commerce sera doté d'un tableau de bord complet avec des outils et des fonctionnalités permettant de gérer les produits, les commandes, les clients, et bien plus encore.<br>
                                À la fin du projet, nous vous proposerons une session de formation pour vous aider à naviguer et à gérer votre boutique en ligne.<br>
                                Comme tous les autres clients, vous vous sentirez en confiance pour gérer votre boutique en ligne par vous-même.<br>
                                Toutefois, si vous avez des questions ou si vous avez besoin d'une aide supplémentaire, nous restons toujours disponibles pour vous.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">6.</span> Maintenez-vous les boutiques en ligne?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Oui, absolument. De nombreux clients choisissent de travailler avec notre équipe pour la maintenance et l'entretien permanents de leur boutique en ligne.<br>
                                Notre équipe prend en charge diverses tâches telles que la gestion régulière des produits et du contenu, la mise à jour du logiciel du site et d'autres tâches de maintenance générale de votre boutique en ligne.<br>
                                Vous pouvez consulter la section maintenance de site web pour plus de détails.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">7.</span> Ma boutique sera-t-elle adaptée aux téléphones portables?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Avec plus de deux tiers du trafic en ligne provenant d'appareils mobiles, la réactivité mobile est au cœur des boutiques en ligne que nous créons.<br>
                                Nous procédons à une analyse de qualité approfondie de chaque site Web sur une variété d'appareils mobiles afin de nous assurer que votre boutique en ligne s'affiche parfaitement sur tous les appareils.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">8.</span> Quelles sont vos conditions de paiement?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Une site E-commerce représente un investissement important, et nous en sommes conscients.<br>
                                C'est pourquoi nous discutons avec nos clients pour planifier les dépenses et proposer des plans de paiement flexibles adaptés à leur situation.<br>
                                Nous acceptons les paiements par carte de crédit, PayPal, ou virements bancaires.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">9.</span> Pouvez-vous m'aider pour le téléchargement/ajout de produits sur ma boutique en ligne?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Oui, bien sûr! Nous vous guiderons, et vous formerons sur l'ajout de produit sur votre site e-commerce.<br>
                                Toutefois, si vous souhaitez que nous importions les produits du catalogue de votre fournisseur, ou que nous saisissions manuellement les produits dans votre boutique en ligne, vous pouvez nous contacter pour obtenir un devis personnalisé.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">10.</span> Quel hébergeur me recommandez-vous?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Un site de e-commerce nécessite plus de ressources qu'un site vitrine.<br>
                                Vous avez donc besoin d'un hébergement robuste pour votre boutique en ligne. Nous vous recommandons vivement de choisir un plan d'hébergement doté d'une puissance de traitement suffisante et de ne pas le choisir uniquement en fonction du prix.<br>
                                Nous travaillons avec beaucoup de fournisseurs d'hébergement. Nous sommes en mesure de vous conseiller au mieux sur ce point, et vous proposer l'hébergement adéquate à vos besoins.
                              </div>
                          </div>
                      </div>
                    </li>
                      <!--Block-->
                      <li class="accordion block">
                      <div class="acc-btn"><span class="count">11.</span> Proposez vous une solution de boutique en ligne, pour les petits budgets?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Une boutique en ligne est un investissement important, et toutes les entreprises ne sont pas prêtes pour un site e-commerce personnalisé.<br>
                                Ainsi, contactez-nous si vous avez un budget limité, et nous pourrons discuter avec vous des options de développement de sites de boutique en ligne à bas prix.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">12.</span> Pouvez-vous m'aider à gérer ma boutique en ligne?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Oui, nous pouvons vous aider.<br>
                                Vous pouvez faire appel à nos services de maintenance de sites e-commerce pour des mises à jour occasionnelles ou vous inscrire à des plans permanents.
                                Vous pouvez consulter nos plans de maintenance pour plus d'informations.
                              </div>
                          </div>
                      </div>
                    </li>
                    <!--Block-->
                    <li class="accordion block">
                      <div class="acc-btn"><span class="count">13.</span> Je suis prêr à commencer, que faisons-nous?</div>
                      <div class="acc-content">
                          <div class="content">
                              <div class="text">
                                Très bien. Veuillez remplir le formulaire de demande de devis en ligne ou appelez-nous au 07 80 94 46 46.<br>
                                Après ce premier contact, nous vous recontacterons dans les 24 heures ouvrables pour discuter du projet avec vous.<br>
                                Une fois que nous aurons recueilli vos attentes et spécificités du projet, nous vous préparerons une proposition détaillée et la partagerons avec vous dès que possible.
                              </div>
                          </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>
          <section class="process-one">
            <div class="auto-container">
              <div class="sec-title centered pb-5 mb-5">
                <h2>Les étapes de conception de votre site E-commerce<span class="dot">?</span></h2>
              </div>
                <div class="row mt-5">
                    <div class="col-md-12 col-lg-6 process-one__image__column">
                        <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/research-website.png" alt="Recherche E-commerce">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Recherche <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">
                              Toute bonne solution commence par une recherche approfondie.<br>
                              Nous nous plongerons dans l'identité de votre marque, définirons votre marché cible et étudierons vos concurrents, afin de déterminer ce qui fonctionne et ce qui ne fonctionne pas, de définir votre valeur ajoutée et de trouver la meilleure stratégie à utiliser pour votre entreprise.
                            </p><!-- /.process-one__summery -->

                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 process-one__image__column">
                        <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/website-prototype.png" alt="prototype e-commerce">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Prototype <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">Pour s'assurer que les produits livrables finaux répondent aux exigences, nous devons d'abord nous assurer que nous sommes sur la même longueur d'onde et que notre solution est parfaitement alignée sur vos objectifs.
                            </p><!-- /.process-one__summery -->
                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-md-12 col-lg-6 process-one__image__column">
                        <div class="process-one__image wow fadeInRight" data-wow-duration="1500ms">
                          <img src="{{ asset('images') }}/website-design.png" alt="design e-commerce">
                        </div><!-- /.process-one__image -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                    <div class="col-md-12 col-lg-6">
                        <div class="process-one__content">
                            <div class="sec-title">
                                <h2>Design <span class="dot">.</span><!-- /.dot -->
                                </h2>
                            </div><!-- /.sec-title -->
                            <p class="process-one__summery">Après avoir obtenu le feu vert pour l'architecture du site, nous ajouterons des éléments visuels qui donneront à nos développeurs tout ce dont ils ont besoin pour concevoir votre e-commerce.<br>
                              Nous concevons tous nos projets en respectant les meilleures pratiques et directives E-commerce. En tant qu'agence experte E-commerce à Bordeaux, nous sommes toujours à la pointe de l'innovation pour nous assurer que nous fournissons le service optimal à tous nos clients de boutique à ligne à Bordeaux</p><!-- /.process-one__summery -->
                        </div><!-- /.process-one__content -->
                    </div><!-- /.col-md-12 col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12 col-lg-6 process-one__image__column">
                      <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/developpement-ecommerce.png" alt="developpement e-commerce">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Développement <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Nos développeurs back-end et front-end construiront pour vous un produit personnalisé qui répondra aux exigences prédéfinies et à votre analyse de rentabilité.<br>
                            Notez que même si tout sera construit sur mesure, vous pourrez modifier votre site Web à tout moment.
                          </p><!-- /.process-one__summery -->
                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
                <div class="row">
                  <div class="col-md-12 col-lg-6 process-one__image__column">
                      <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('images') }}/lancement-ecommerce.png" alt="lancement e-commerce">
                      </div><!-- /.process-one__image -->
                  </div><!-- /.col-md-12 col-lg-6 -->
                  <div class="col-md-12 col-lg-6">
                      <div class="process-one__content">
                          <div class="sec-title">
                              <h2>Lancement <span class="dot">.</span><!-- /.dot -->
                              </h2>
                          </div><!-- /.sec-title -->
                          <p class="process-one__summery">
                            Une fois que tout est prêt, nous lançons le site Web et configurons les analyses pour vous donner un aperçu détaillé de vos performances, que vous pouvez utiliser pour tester et optimiser les éléments et les offres de votre site Web.<br>
                            En tant qu'agence experte e-commerce à Bordeaux, vous êtes sûr que votre site web réponde aux critères nécessaires pour que son référencement soit optimal, et ainsi augmenter vos ventes.
                          </p><!-- /.process-one__summery -->
                      </div><!-- /.process-one__content -->
                  </div><!-- /.col-md-12 col-lg-6 -->
              </div><!-- /.row -->
            <div class="row">
              <div class="col-md-12 col-lg-6 process-one__image__column">
                  <div class="process-one__image wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{ asset('images') }}/support-ecommerce.png" alt="support e-commerce">
                  </div><!-- /.process-one__image -->
              </div><!-- /.col-md-12 col-lg-6 -->
              <div class="col-md-12 col-lg-6">
                  <div class="process-one__content">
                      <div class="sec-title">
                          <h2>Support <span class="dot">.</span><!-- /.dot -->
                          </h2>
                      </div><!-- /.sec-title -->
                      <p class="process-one__summery">
                        En tant qu'agence experte E-commerceà Bordeaux, nous offrons un support premium pour nous assurer que votre site web ne rencontre jamais de problème.<br>
                        Nous donnons à tous nos clients une garantie sur leur boutique web, selon l'ampleur du projet.<br>
                        De plus, nous deviendrons des partenaires pour la vie et nous serons là pour vous offrir un coup de main pour tout ce dont vous aurez besoin à l'avenir.                      </p><!-- /.process-one__summery -->
                  </div><!-- /.process-one__content -->
              </div><!-- /.col-md-12 col-lg-6 -->
          </div><!-- /.row -->

        </div><!-- /.auto-container -->
        </section><!-- /.process-one -->
        </div>
        <div class="sec-title centered">
          <h5>"Choisissez un partenaire de commerce électronique qui peut non seulement augmenter vos ventes en ligne - mais aussi vous aider à multiplier vos revenus pour la prochaine décennie."</h5>
        </div>
        <p></p>
      </div>
          <!-- Call To Section -->
          <section class="call-to-section-two alternate">
            <div class="auto-container">
              <div class="inner clearfix">
                <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                <div class="link-box">
                  <a class="theme-btn btn-style-two" href="about.html">
                    <i class="btn-curve"></i>
                    <span class="btn-title">Contact with us</span>
                  </a>
                </div>
              </div>
            </div>
          </section>


@endsection
