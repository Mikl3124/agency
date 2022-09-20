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
      </section>
      <!--End Banner Section -->

      <div class="sidebar-page-container">
          <div class="auto-container">
              <div class="row clearfix">

                  <!--Content Side-->
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
                              Ainsi, que vous souhaitiez créer une toute nouvelle boutique en ligne, ou que vous cherchiez à apporter des modifications à votre e-commerce, notre équipe a une solution pour répondre à vos besoins.<br>
                              <div class="featured">
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
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!--Sidebar Side-->
                  <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                      <aside class="sidebar blog-sidebar">

                          <div class="sidebar-widget services">
                              <div class="widget-inner">
                                  <div class="sidebar-title">
                                      <h4>All Services</h4>
                                  </div>
                                  <ul>
                                      <li class="active"><a href="web-development.html">Website Development test</a></li>
                                      <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                      <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                      <li><a href="seo.html">SEO & Content Writting</a></li>
                                      <li><a href="app-development.html">App Development</a></li>
                                      <li><a href="ui-designing.html">UI/UX Designing</a></li>
                                  </ul>
                              </div>
                          </div>

                          <div class="sidebar-widget call-up">
                              <div class="widget-inner">
                                  <div class="sidebar-title">
                                      <h4>need Linoor help?</h4>
                                  </div>
                                  <div class="text">Prefer speaking with a human to filling out a form? call corporate
                                      office and we will connect you with a team member who can help.</div>
                                  <div class="phone"><a href="tel:666888000"><span
                                              class="icon flaticon-call"></span>666 888 000</a></div>
                              </div>
                          </div>


                      </aside>
                  </div>

              </div>
          </div>
      </div>

      <section class="faqs-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="faq-block col-lg-12 col-md-12 col-sm-12">
                    <ul class="accordion-box clearfix">
                        <!--Block-->
                        <li class="accordion block active-block">
                            <div class="acc-btn active"><span class="count">1.</span> Combien coûte un site E-commerce?</div>
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
