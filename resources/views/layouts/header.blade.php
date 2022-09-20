

  <!-- Main Header -->
  <header class="main-header header-style-one">

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="inner-container clearfix">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="/" title="Lyneo - L'agence qui libère votre plein potentiel"><img
                            src="{{ asset('images') }}/logo lyneo.png" id="thm-logo" alt="Lyneo - L'agence qui libère votre plein potentiel"
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
                            <li class="dropdown {{ Route::is('home') ? 'current' : '' }}">
                                <a href="{{ route('home') }}">L'agence</a>
                            </li>
                            <li class="dropdown {{ (request()->is('developpement-web*')) ? 'current' : '' }}"><a href="{{ route('developpement') }}">Développement Web</a>
                              <ul>
                                  <li><a href="{{ route('vitrine') }}">Site Vitrine</a></li>
                                  <li><a href="{{ route('commerce') }}">Site E-commerce</a></li>

                              </ul>
                          </li>
                            <li class="dropdown"><a href="services.html">Référencement</a>
                                <ul>
                                    <li><a href="services.html">All Services</a></li>
                                    <li><a href="services-2.html">Services Two</a></li>
                                    <li><a href="web-development.html">Website Development</a></li>
                                    <li><a href="graphic-designing.html">Graphic Designing</a></li>
                                    <li><a href="digital-marketing.html">Digital Marketing</a></li>
                                    <li><a href="seo.html">SEO & Content Writting</a></li>
                                    <li><a href="app-development.html">App Development</a></li>
                                    <li><a href="ui-designing.html">UI/UX Designing</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="portfolio.html">Portfolio</a>
                                <ul>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li><a href="portfolio-2-columns.html">Portfolio 2 Col <span>new</span></a>
                                    </li>
                                    <li><a href="portfolio-4-columns.html">Portfolio 4 Col <span>new</span></a>
                                    </li>
                                    <li><a href="portfolio-masonary.html">Portfolio Masonary
                                            <span>new</span></a></li>
                                    <li><a href="portfolio-single.html">Portfolio Single 01</a></li>
                                    <li><a href="portfolio-single-2.html">Portfolio Single 02</a></li>
                                    <li><a href="portfolio-single-3.html">Portfolio Single 03
                                        </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="shop.html">Shop</a>
                                <ul>
                                    <li><a href="shop.html">Shop Page</a></li>
                                    <li><a href="product-details.html">Product Details</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Checkout Page</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="{{ route('website.blog') }}">Blog</a>
                                <ul>
              <li><a href="blog.html">Blog Right Sidebar</a></li>
              <li><a href="blog-left.html">Blog Left Sidebar <span>new</span></a></li>
              <li><a href="blog-grid.html">Blog Grid View</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
            </ul>
                            </li>
                            <li class="dropdown">
                                <a href="contact.html">Contact</a>
                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02 <span>New</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="other-links clearfix">
                <!-- cart btn -->
                <div class="cart-btn">
                    <a href="cart.html" class="theme-btn cart-toggler"><span
                            class="flaticon-shopping-cart"></span></a>
                </div>
                <!--Search Btn-->
                <div class="search-btn">
                    <button type="button" class="theme-btn search-toggler"><span
                            class="flaticon-loupe"></span></button>
                </div>
                <div class="link-box">
                    <div class="call-us">
                        <a class="link" href="tel:6668880000">
                            <span class="icon"></span>
                            <span class="sub-text">Nous contacter</span>
                            <span class="number">666 888 0000</span>
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
            <p><a href="mailto:bonjour@lyneo.fr">bonjour@lyneo.fr</a> <br> <a href="tel:888-999-0000">888
                    999 0000</a></p>
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

