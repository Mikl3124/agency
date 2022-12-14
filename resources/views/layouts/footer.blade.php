
  <!-- Main Footer -->
  <footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img id="fLogo" src="{{ asset('images') }}/logo-lyneo.png" alt="Logo Lyneo" /></a>
                            </div>
                            <div class="text">L'agence Web et SEO, qui libère votre plein potentiel.</div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="#"><span class="fab fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <h6>Nous Découvrir</h6>
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href=" {{ route('home') }} ">Notre agence</a></li>
                                        <li><a href=" {{ route('website.blog') }} ">Blog</a></li>
                                        <li><a href=" {{ route('website.contact') }} ">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <ul>
                                        <li><a href="{{ route('confidentialite') }}">Politique de confidentialité</a></li>
                                        <li><a href="{{ route('mentions') }}">Mentions légales</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <div class="widget-content">
                            <h6>Contact</h6>
                            <ul class="contact-info">
                                {{-- <li class="address"><span class="icon flaticon-pin-1"></span> 66 Broklyn Street,
                                    New York <br>United States of America</li> --}}
                                <li><span class="icon flaticon-call"></span><a href="tel:0780944646">07 80 94 46 46</a></li>
                                <li><span class="icon flaticon-email-2"></span><a
                                        href="mailto:bonjour@lyneo.fr">bonjour@lyneo.fr</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget newsletter-widget">
                        <div class="widget-content">
                            <h6>Newsletter</h6>
                            <div class="newsletter-form">
                              <form method="post" action="{{ route("newsletter-mail") }}">
                                @csrf
                                @honeypot
                                  <div class="form-group clearfix">
                                    <input type="email" name="email" value="" placeholder="@if (session()->has('success')) Inscrit à la newsletter @else Adresse email @endif"
                                          required>
                                    @if (session()->has('success'))
                                    @else
                                    <button type="submit" class="theme-btn"><span
                                      class="fa fa-envelope"></span></button>
                                    @endif

                                  </div>
                                </form>
                            </div>

                            @if (session()->has('success'))

                            @else
                              <div class="text">Inscrivez-vous pour recevoir nos dernières nouvelles et articles. Nous ne vous enverrons pas de SPAM.</div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
          <div class="row clearfix footer-widget links-widget">
            <div class="col-6">
                <ul>
                    <li><a href="{{ route('marketing-bordeaux') }}">BORDEAUX</a></li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                  <li><a href="{{ route('marketing-perigueux') }}">PERIGUEUX</a></li>
                </ul>
            </div>
        </div>
            <div class="copyright">&copy; Copyright 2022 - Lyneo</div>

        </div>
    </div>

</footer>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


</div>
<!--End pagewrapper-->
<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "En lire plus";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "En lire moins";
      moreText.style.display = "inline";
    }
  }
  </script>
{{-- Google Reviews --}}
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDZEkJ4ml_ns_kNtF_EUrrM9NOvHdl0Y8&libraries=places&callback=initReviews">
</script>
<script>
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
const reviews_total_count = document.getElementById('reviews_total_count');
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
console.log(total_reviews);
reviewboxtotal.innerHTML += stargetter(total_reviews)
reviews_total_count.innerHTML += total_reviews

});
}
</script>
