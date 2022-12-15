
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="canonical" href="{{ url()->current() }}">
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

    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDZEkJ4ml_ns_kNtF_EUrrM9NOvHdl0Y8&libraries=places&callback=initReviews"></script>

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


    <script type="text/javascript">
      //doublemarvellous get google reviews show stars
      function initReviews() {

      const stargetter = function(starso){
      if(starso === 5){
      return '<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>'
      } else if (starso === 4){
      return '<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>'
      } else if (starso === 3){
      return '<span>&#9733;</span>&nbsp;<span>&#9733;</span>&nbsp;<span>&#9733;</span>'
      } else if (starso === 2){
      return '<span>&#9733;</span>&nbsp;<span>&#9733;</span>'
      } else if (starso === 1){
      return '&#9734'
      } else if (starso === 0){
      return '&nbsp;'
      } else {
      return
      }
      };
      const reviewbox 			= document.getElementById('reviews');
      const reviewboxtotal 		= document.getElementById('reviews_count');
      const reviewcount 		= document.getElementById('reviews_count_2');

      const map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -33.866, lng: 151.196},
      zoom: 15
      });
      //
      const request = {
      placeId: 'ChIJU01VQjCJ_0cRykQilQ5XlY4',
      fields: ['name', 'formatted_address', 'place_id', 'geometry', 'reviews']
      };
      //
      var service = new google.maps.places.PlacesService(map);
      //
      service.getDetails(request, function(place, status) {

      //
      let i;
      let reviewsall = 0 ;
      for (i = 0; i < place.reviews.length; i++) {
        //console.log(place.reviews[i].rating);
      //reviewbox.innerHTML += '<div class="column is-one-third reviewcard"><div class="reviewtext matchy">'+place.reviews[i].text + '</div><div class="stars">'+
      //stargetter(place.reviews[i].rating)
      //+'</div><div class="reviewauthor"><p class="authortitle">'+place.reviews[i].author_name + ' <a class="tag" href="'+place.reviews[i].author_url + '"><span>Read Review</span></a></p></div></div>';
      reviewsall += place.reviews[i].rating;
      }
      let total_reviews = reviewsall/place.reviews.length;
      let number_reviews = place.reviews.length;
      console.log(place.reviews.length);
      $('#reviews_count').attr('data-rating',total_reviews)
      reviewcount.innerHTML = number_reviews
      reviews_total_count.innerHTML += total_reviews.toFixed(1)
      number_reviews.innerHTML += total_reviews.toFixed(1)

       $(".my-rating-4").starRating({
      totalStars: 5,
      starShape: 'rounded',
      starSize: 20,
      readOnly: true,
      emptyColor: 'lightgray',
      hoverColor: 'salmon',
      activeColor: 'gold',
      useGradient: false
    });

      });
      }
    </script>

    <script
    src="https://nashio.github.io/star-rating-svg/src/jquery.star-rating-svg.js"></script>
    <link rel="stylesheet" href="https://nashio.github.io/star-rating-svg/src/css/star-rating-svg.css" />



</body>

</html>
  @yield('script')

  </body>
</html>
