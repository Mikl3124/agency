
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyneo - L'agence web qui libère votre plein potentiel</title>
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
</head>


<body class="body">
  <div class="page-wrapper">

    @include('layouts.header')

    @yield('content')

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

</html>
  @yield('script')
  </body>
</html>
