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
                      <h1>Mentions Légales</h1>
                      <div class="page-nav">
                          <ul class="bread-crumb clearfix">
                              <li><a href="{{ route("home") }}">Accueil</a></li>
                              <li class="active">Mentions légales</li>
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
              <h3>1 – Édition du site</h3>
              <p>
                En vertu de l’article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l’économie numérique, il est précisé aux utilisateurs du site internet https://lyneo.fr/ l’identité des différents intervenants dans le cadre de sa réalisation et de son suivi:
              </p>
              <p>
                Propriétaire du site : ARCHIMBAULT Mickael – Contact : mickael@lyneo.fr 07 80 94 46 46 – Adresse : Place Grands Hommes 33000 Bordeaux.
              </p>
              <p>
                Identification de l’entreprise : Affaire personnelle commerçant ARCHIMBAULT Mickael au capital social de 1000€ – SIREN : 829306419 – RCS ou RM : Bordeaux – Adresse postale : Place Grands Hommes 33000 Bordeaux.
              </p>
              <p>
                Directeur de la publication : ARCHIMBAULT Mickael – Contact : mickael@lyneo.fr.
              </p>
              <p>
                Hébergeur : OVH SAS – 2 rue Kellermann – BP 80157 – 59053 Roubaix Cedex 1 – Téléphone : 1007Mise sur orbite
              </p>
              <p>
                Délégué à la protection des données : ARCHIMBAULT Mickael– mickael@lyneo.fr
              </p>

            <h3>
              2 – Propriété intellectuelle et contrefaçons.
            </h3>
            <p>
              ARCHIMBAULT Mickael est propriétaire des droits de propriété intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur le site internet, notamment les textes, images, graphismes, logos, vidéos, architecture, icônes et sons.
            </p>
            <p>
              Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de ARCHIMBAULT Mickael.
            </p>
            <p>
              Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
            </p>
            <h3>
              3 – Limitations de responsabilité.
            </h3>
            <p>
              ARCHIMBAULT Mickael ne pourra être tenu pour responsable des dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès au site https://lyneo.fr/.
            </p>
            <p>
              ARCHIMBAULT Mickael décline toute responsabilité quant à l’utilisation qui pourrait être faite des informations et contenus présents sur https://lyneo.fr/.
            </p>
            <p>
              ARCHIMBAULT Mickael s’engage à sécuriser au mieux le site https://lyneo.fr/, cependant sa responsabilité ne pourra être mise en cause si des données indésirables sont importées et installées sur son site à son insu.
            </p>
            <p>
              Des espaces interactifs (espace contact ou commentaires) sont à la disposition des utilisateurs. ARCHIMBAULT Mickael se réserve le droit de supprimer, sans mise en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la législation applicable en France, en particulier aux dispositions relatives à la protection des données.
            </p>
            <p>
              Le cas échéant, ARCHIMBAULT Mickael se réserve également la possibilité de mettre en cause la responsabilité civile et/ou pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux, diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie …).
            </p>
            <h3>
              4 – CNIL et gestion des données personnelles.
            </h3>
            <p>
              Conformément aux dispositions de la loi 78-17 du 6 janvier 1978 modifiée, l’utilisateur du site https://lyneo.fr/ dispose d’un droit d’accès, de modification et de suppression des informations collectées. Pour exercer ce droit, envoyez un message à notre Délégué à la Protection des Données : ARCHIMBAULT Mickael – mickael@lyneo.fr.
            </p>
            <p>
              Pour plus d’informations sur la façon dont nous traitons vos données (type de données, finalité, destinataire…), lisez notre <a href="{{ route('confidentialite' )}}">Politique de confidentialité</a>.
            </p>
            <h3>
              5 – Liens hypertextes et cookies
            </h3>
            <p>
              Le site https://lyneo.fr/ contient des liens hypertextes vers d’autres sites et dégage toute responsabilité à propos de ces liens externes ou des liens créés par d’autres sites vers https://lyneo.fr/.
            </p>
            <p>
              La navigation sur le site https://lyneo.fr/ est susceptible de provoquer l’installation de cookie(s) sur l’ordinateur de l’utilisateur.
            </p>
            <p>
              Un « cookie » est un fichier de petite taille qui enregistre des informations relatives à la navigation d’un utilisateur sur un site. Les données ainsi obtenues permettent d’obtenir des mesures de fréquentation, par exemple.
            </p>
            <p>
              Vous avez la possibilité d’accepter ou de refuser les cookies en modifiant les paramètres de votre navigateur. Aucun cookie ne sera déposé sans votre consentement.
            </p>
            <p>
              Les cookies sont enregistrés pour une durée maximale de mois.
            </p>
            <p>
              Pour plus d’informations sur la façon dont nous faisons usage des cookies, lisez notre https://lyneo.fr/politique-confidentialite/. [Consignes : ajoutez ici le lien hypertexte vers votre politique de confidentialité ou vers votre politique de cookies si vous en avez une (c’est le cas si vous utilisez Complianz)]
            </p>
            <h3>
              6 – Droit applicable et attribution de juridiction.
            </h3>
            <p>
              Tout litige en relation avec l’utilisation du site https://lyneo.fr/ est soumis au droit français. En dehors des cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux tribunaux compétents de Bordeaux.
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
