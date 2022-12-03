<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name=”robots” content=”noindex,nofollow”>.
    <meta name="description" content="{{ $meta_description }}">

    <!-- Stylesheets -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{ asset('css') }}/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css') }}/fontawesome-all.css" rel="stylesheet">
    <link href="{{ asset('css') }}/owl.css" rel="stylesheet">
    <link href="{{ asset('css') }}/flaticon.css" rel="stylesheet">
    <link href="{{ asset('css') }}/lyneo-icons-2.css" rel="stylesheet">
    <link href="{{ asset('css') }}/animate.css" rel="stylesheet">
    <link href="{{ asset('css') }}/jquery-ui.css" rel="stylesheet">
    <link href="{{ asset('css') }}/jquery.fancybox.min.css" rel="stylesheet">
    <link href="{{ asset('css') }}/hover.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css') }}/jarallax.css">
    <link href="{{ asset('css') }}/custom-animate.css" rel="stylesheet">
    <link href="{{ asset('css') }}/style.css" rel="stylesheet">
    <!-- rtl css -->
    <link href="{{ asset('css') }}/rtl.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('css') }}/responsive.css" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('css') }}/colors/color-default.css">

    <link rel="shortcut icon" href="{{ asset('images') }}/favicon.png" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="{{ asset('images') }}/favicon.png" id="fav-icon" type="image/x-icon">
    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('js') }}/respond.js"></script><![endif]-->

    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-X84BLF2NZQ"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-X84BLF2NZQ');
        </script>

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146702848-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-146702848-3');
        </script>



</head>

<body class="body">
  <div class="page-wrapper">
    @include('layouts.header')
        <!-- Banner Section -->
        <section class="page-banner">
          <div class="image-layer" style="background-image:url({{ asset('images') }}/lyneo-legal.svg)" ></div>
          <div class="shape-1"></div>
          <div class="shape-2"></div>
          <div class="banner-inner">
              <div class="auto-container">
                  <div class="inner-container clearfix">
                      <h1>Politique de confidentialité</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Politique de confidentialite</li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!--End Banner Section -->

    <div class="site-section bg-white">
        <div class="container">
        <div class="row">
            <div class="col-md-12 my-4">
              <h4>
                1-Données Personnelles
              </h4>
              <h5>
                Politique de protection des données.
              </h5>
              <p>
                Chaque service en ligne limite la collecte des données personnelles au strict nécessaire (minimisation des données) et s’accompagne d’une information sur :
              </p>
              <ul>
                <li>
                  - Le responsable du traitement et les objectifs du recueil de ces données (finalités)
                </li>
                <li>
                  - La base juridique du traitement de données
                </li>
                <li>
                  - Le caractère obligatoire ou facultatif du recueil des données pour la gestion de votre demande et le rappel des catégories de données traitées
                </li>
                <li>
                  - La source des données
                </li>
                <li>
                  - Les catégories de personnes concernées
                </li>
                <li>
                  - Les destinataires des données
                </li>
                <li>
                  - La durée de conservation des données
                </li>
                <li>
                  - Les mesures de sécurité
                </li>
                <li>
                  - L’existence éventuelle de transferts de données hors de l’Union européenne
                </li>
                <li>
                  - Vos droits et la façon de les exercer auprès de la CNIL.
                </li>
              </ul>
              <p>
                Les données personnelles recueillies dans le cadre des services proposés sur le site www.lyneo.fr sont traitées selon des protocoles sécurisés et permettent à Lyneo de gérer les demandes reçues dans ses applications informatiques.
              </p>
              <h5>
                Exercer vos droits.
              </h5>
              <p>
                Pour toute information ou exercice de vos droits Informatique et Libertés sur les traitements de données personnelles gérés par Lyneo merci de nous contacter par email (avec copie de votre pièce d’identité en cas d’exercice de vos droits) à l’adresse suivante : mickael@lyneo.fr.
              </p>
              <h4>
                2-A propos des cookies
              </h4>
              <p>
                Nous utilisons différents cookies sur le site pour en améliorer l’interactivité et l’expérience utilisateur.
              </p>
              <h5>
                Qu’est-ce qu’un cookie.
              </h5>
              <p>
                Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez. Il contient plusieurs données :
              </p>
              <ul>
                <li>
                  - Le nom du serveur qui l’a déposée
                </li>
                <li>
                  - Un identifiant sous forme de numéro unique
                </li>
                <li>
                  - Une date d’expiration
                </li>
              </ul>
              <p>
                Ces informations sont parfois stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations.
              </p>
              <h5>
                Usages des cookies présents sur le site.
              </h5>
              <p>
                Les cookies que nous gérons nous permettent d’établir des statistiques de fréquentation, d’adapter nos contenus à vos centres d’intérêt, d’éviter à l’utilisateur concerné de fournir à nouveau des données personnelles qu’il avait antérieurement fournies.
              </p>
              <p>
                En cliquant sur le bandeau présent sur nos pages ou en continuant votre navigation sur ceux-ci, vous acceptez la mise en place de Cookies sur votre Terminal. Le rejet complet des fichiers Cookies vous empêche de profiter pleinement des fonctionnalités des services offerts.
              </p>
              <ul>
                <li>
                  - Les cookies techniques et de navigation sont déposés sur notre site internet. Ils facilitent votre navigation entre les pages de nos sites et expirent automatiquement lorsque vous fermez votre navigateur. Vous pouvez choisir de désactiver ces cookies via votre navigateur internet, sans altérer l’accès à nos services.
                </li>
                <li>
                  - Les cookies de mesure d’audience sont déposés sur notre site internet. Ils permettent de collecter des données statistiques anonymes de fréquentation de notre site afin d’améliorer l’ergonomie et l’expérience utilisateur. Vous pouvez les désactiver.
                </li>
                <li>
                  - Les cookies tiers proviennent de sites extérieurs et permettent notamment de partager des contenus sur les réseaux sociaux, de sécuriser et mesurer les comportements de navigation, et de nous aider à établir des statistiques sur les fréquences et intérêts vis-à-vis d’un contenu ou d’une publicité afin de mieux cibler nos communications. Vous pouvez les désactiver.
                </li>
              </ul>
              <p>
                Nous ne pouvons en revanche contrôler ces cookies et les données récoltées par les médias sociaux. Pour plus d’informations sur ces cookies, nous vous invitons à consulter les politiques de confidentialité propres à chacun de ces sites de médias sociaux.
              </p>
              <h5>
                Effacer les cookies non désirés.
              </h5>
              <p>
                Si vous ne voulez pas recevoir de cookies, vous pouvez régler votre navigateur pour qu’il vous alerte lorsqu’il en reçoit. Si vous le paramétrez pour qu’il refuse automatiquement les cookies, vous pourriez ne plus pouvoir utiliser certaines fonctions du site www.lyneo.fr
              </p>
              <p>
                Vous pouvez utiliser les options de divers services tiers pour maîtriser les informations que vous leur fournissez. Vous pouvez également utiliser un service en ligne qui rassemble les diverses mesures pour protéger votre vie privée, notamment par une gestion personnalisée des cookies.
              </p>
              <h5>
                Que dit la loi.
              </h5>
              <p>
                La réglementation prévoit que les sites internet doivent recueillir votre consentement avant le dépôt de ces cookies, vous indiquer à quoi ils servent et comment vous pouvez vous y opposer. En pratique, un message doit apparaître quand vous vous connectez au site pour la première fois pour vous indiquer comment accepter ou au contraire refuser les cookies.
              </p>
              <p>
                Toutes les informations sont disponibles sur le site de la CNIL : https://www.cnil.fr/
              </p>
              <p>
                Mise à jour 03 décembre 2022
              </p>
            </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')

    <script src="{{ asset('js') }}/jquery.js"></script>
    <script src="{{ asset('js') }}/popper.min.js"></script>
    <script src="{{ asset('js') }}/bootstrap.min.js"></script>
    <script src="{{ asset('js') }}/TweenMax.js"></script>
    <script src="{{ asset('js') }}/jquery-ui.js"></script>
    <script src="{{ asset('js') }}/jquery.fancybox.js"></script>
    <script src="{{ asset('js') }}/owl.js"></script>
    <script src="{{ asset('js') }}/mixitup.js"></script>
    <script src="{{ asset('js') }}/appear.js"></script>
    <script src="{{ asset('js') }}/wow.js"></script>
    <script src="{{ asset('js') }}/jQuery.style.switcher.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js">
    </script>
    <script src="{{ asset('js') }}/jquery.easing.min.js"></script>
    <script src="{{ asset('js') }}/jarallax.min.js"></script>
    <script src="{{ asset('js') }}/custom-script.js"></script>


    <script src="{{ asset('js') }}/lang.js"></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script src="{{ asset('js') }}/color-switcher.js"></script>


</body>
