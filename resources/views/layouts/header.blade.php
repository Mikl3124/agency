

  <!-- Main Header -->
  <header class="main-header header-style-one">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="/" title="Lyneo - L'agence qui libère votre plein potentiel"><img
                            src="{{ asset('images') }}/logo-lyneo.png" id="thm-logo" alt="Lyneo - L'agence qui libère votre plein potentiel"
                            title="Lyneo - L'agence qui libère votre plein potentiel"></a></div>
            </div>
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                        class="txt">Menu</span></div>

                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li class="dropdown {{ (request()->is('/')) ? 'active' : '' }}">
                                <a href="{{ route('home') }}">L'agence</a>
                            </li>
                            <li class="dropdown {{ (request()->is('developpement-web/*')) || (request()->is('developpement-web')) ? 'current' : '' }}"><a href="{{ route('developpement') }}">Développement Web</a>
                              <ul>
                                  <li><a href="{{ route('wordpress') }}">Site Wordpress</a></li>
                                  <li><a href="{{ route('custom') }}">Site sur-mesure</a></li>
                                  <li><a href="{{ route('commerce') }}">Site E-commerce</a></li>

                              </ul>
                          </li>
                            <li class="dropdown {{ (request()->is('marketing-digital/*'))  || (request()->is('marketing-digital'))  ? 'current' : '' }}"><a href="{{ route('marketing-digital') }}">Marketing Digital</a>
                                <ul>
                                    <li><a href="{{ route('seo') }}">SEO</a></li>
                                    <li><a href="{{ route('seo-local') }}">SEO Local</a></li>
                                    <li><a href="{{ route('seo-technique') }}">SEO Technique</a></li>
                                    <li><a href="{{ route('publicite-en-ligne') }}">Publicité en ligne</a></li>
                                </ul>
                            </li>
                            <li class="{{ (request()->is('blog/*')) || (request()->is('blog'))  ? 'current' : '' }}">
                              <a href="{{ route('website.blog') }}">Blog</a>
                            </li>
                            <li class="">
                              <a href="{{ route('website.contact') }}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="other-links clearfix">
                <!--Search Btn-->
                <div class="search-btn">
                    <button type="button" class="theme-btn search-toggler"><span
                            class="flaticon-loupe"></span></button>
                </div>
                <div class="link-box">
                    <div class="call-us">
                        <a class="link" href="tel:0780944646">
                            <span class="icon"></span>
                            <span class="sub-text">Nous contacter</span>
                            <span class="number">07 80 94 46 46</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--End Header Upper-->

</header>
<!-- End Main Header -->

<!--Mobile Menu-->
<div class="side-menu__block">


    <div class="side-menu__block-overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.side-menu__block-overlay -->
    <div class="side-menu__block-inner ">
        <div class="side-menu__top justify-content-end">

            <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ asset('images') }}/icons/close-1-1.png"
                    alt=""></a>
        </div><!-- /.side-menu__top -->


        <nav class="mobile-nav__container">
            <!-- content is loading via js -->
        </nav>
        <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
        <div class="side-menu__content">
            <p>Lyneo Création, l'agence Web et SEO à Bordeaux, qui libère votre plein potentiel.</p>
            <p><a href="mailto:bonjour@lyneo.fr">bonjour@lyneo.fr</a> <br> <a href="tel:0780944646">07 80 94 46 46</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div><!-- /.side-menu__content -->
    </div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->

<!--Search Popup-->
<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div><!-- /.search-popup__inner -->
</div><!-- /.search-popup -->

