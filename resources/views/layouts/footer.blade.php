
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
                                <a href="index.html"><img id="fLogo" src="{{ asset('images') }}/logo-lyneo.png" alt="Logo Lyneo" /></a>
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
                                        <li><a href="#">Politique de confidentialité</a></li>
                                        <li><a href="#">Mentions légales</a></li>
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
            <div class="col-md-6 col-sm-12">
                <ul>
                    <li><a href="{{ route('agence-bordeaux') }}">BORDEAUX</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12">
                <ul>
                  <li><a href="#">BERGERAC</a></li>
                </ul>
            </div>
        </div>
            <div class="copyright">&copy; Copyright 2022 - Lyneo Création</div>

        </div>
    </div>

</footer>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


</div>
<!--End pagewrapper-->
