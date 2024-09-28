<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>Tomruk Evler</title>

    <!--Favicon-->
    <link rel="icon" href="{{ asset ('assets/img/favicon.png') }}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{ asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Line Awesome CSS -->
    <link href="{{ asset ('assets/css/line-awesome.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="{{ asset ('assets/css/fontAwesomePro.css') }}" rel="stylesheet">
    <!-- Animate CSS-->
    <link href="{{ asset ('assets/css/animate.css') }}" rel="stylesheet">
    <!-- Bar Filler CSS -->
    <link href="{{ asset ('assets/css/barfiller.css') }}" rel="stylesheet">
    <!-- Magnific Popup Video -->
    <link href="{{ asset ('assets/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Flaticon CSS -->
    <link href="{{ asset ('assets/css/flaticon.css') }}" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="{{ asset ('assets/css/owl.carousel.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ asset ('assets/css/slick.css') }}" rel="stylesheet">
    <!-- Nice Select  -->
    <link href="{{ asset ('assets/css/nice-select.css') }}" rel="stylesheet">
    <!-- Back to Top -->
    <link href="{{ asset ('assets/css/backToTop.css') }}" rel="stylesheet">
    <!-- Metis Menu -->
    <link href="{{ asset ('assets/css/metismenu.css') }}" rel="stylesheet">
    <!-- Odometer CSS -->
    <link href="{{ asset ('assets/css/odometer.min.css') }}" rel="stylesheet">
    <!-- Style CSS -->
    <link href="{{ asset ('assets/css/style.css') }}" rel="stylesheet">


    <!-- jquery -->
    <script src="{{ asset ('assets/js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>

    <!-- Pre-Loader -->
    <div id="loader"></div>

    <!-- Mouse Cursor  -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"><span>Sürükle</span></div>

    <div id="smooth-wrapper">

        <!-- Header Area  -->
        <div class="header-area absolute-header">
            <div id="header-sticky">
                <div class="navigation">
                    <div class="container-fluid">
                        <div class="header-inner-box">

                            <!-- Logo -->
                            <div class="logo">
                                <a class="navbar-brand" href="{{ route ('index')}}"><img src="{{ asset ('assets/img/tomruk/tomruk-logo.png') }}"
                                style="max-width: 150px;" alt="tomruk-house" title="Tomruk House"></a>
                            </div>

                            <!-- Main Menu  -->
                            <div class="main-menu d-none d-lg-block">
                                <ul>
                                    <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('index') }}">Anasayfa</a>
                                    </li>
                                    <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('about') }}">Hakkımızda</a>
                                    </li>
                                    <li class="{{ request()->routeIs('floor.plans') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('floor.plans') }}">Kat Planları</a>
                                    </li>
                                    <li class="{{ request()->routeIs('photos') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('photos') }}">Fotoğraflar</a>
                                    </li>
                                    <li class="{{ request()->routeIs('videos') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('videos') }}">Videolar</a>
                                    </li>
                                    <li class="{{ request()->routeIs('process') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('process') }}">Süreç</a>
                                    </li>
                                    <li class="{{ request()->routeIs('events') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('events') }}">Etkinlikler</a>
                                    </li>
                                    <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                                        <a class="navlink" href="{{ route('contact') }}">İletişim</a>
                                    </li>
                                </ul>

                            </div>
                            <!-- Mobile Menu -->
                            <div class="mobile-nav-bar d-block col-sm-1 col-6 d-lg-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="las la-bars"></i>
                                    </div>
                                    <!-- mobile menu - responsive menu  -->
                                    <div class="mobile-nav">
                                        <button type="button" class="close-nav">
                                            <i class="las la-times-circle"></i>
                                        </button>
                                        <nav class="sidebar-nav">
                                            <ul class="metismenu" id="mobile-menu">
                                                <li><a href="{{ route('index') }}">Anasayfa</a>
                                                </li>
                                                <li><a href="{{ route('about') }}">Hakkımızda</a>
                                                </li>
                                                <li><a href="{{ route('floor.plans') }}">Kat Planları</a>
                                                </li>
                                                <li><a href="{{ route('photos') }}">Fotoğraflar</a>
                                                </li>
                                                <li><a href="{{ route('videos') }}">Videolar</a>
                                                </li>
                                                <li><a href="{{ route('process') }}">Süreç</a>
                                                </li>
                                                <li><a href="{{ route('events') }}">Etkinlikler</a>
                                                </li>
                                                <li><a href="{{ route('contact') }}">İletişim</a></li>

                                            </ul>
                                        </nav>
                                        <div class="action-bar">
                                            <a href="mailto:info@tomrukhouse.com"><i class="las la-envelope"></i>info@tomrukhouse.com</a>
                                            <a href="tel:05425002218"><i class="fal fa-phone"></i>0542 500 22 18</a>
                                            <a href="{{ route('contact') }}" class="theme-btn">Bize Ulaşın</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Dropdown -->
        <div class="search-popup">
            <span class="search-back-drop"></span>

            <div class="search-inner">
                <div class="container">
                    <div class="logo">
                        <a class="navbar-brand" href="{{ route ('index')}}"><img src="assets/img/tomruk/tomruk-logo.png"
                        style="max-width: 150px;" alt="tomruk-house" title="Tomruk House"></a>
                    </div>
                    <button class="close-search"><span class="la la-times"></span></button>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Arama yapiniz.." required="">
                            <button type="submit"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Off-canvas Area-->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="las la-times"></i>
                </button>
            </div>
            <div class="logo-side">
                <div class="logo">
                    <img src="{{ asset ('assets/img/tomruk/tomruk-logo.png') }}" style="max-width: 150px;"
                     alt="tomruk-house" title="Tomruk House">
                </div>
            </div>
            <div class="side-info">
                <div class="contact-list mb-40">
                    <p>StoneMill Log & Timber Homes, 1974'ten beri aile tarafından işletilen bir şirket olarak,
                         nesiller boyu sürecek evler inşa ediyor.</p>
                    <img src="{{ asset ('assets/img/offcanvas-img.jpg') }}" alt="tomruk-house" title="Tomruk House">

                    <div class="mt-30 mb-30">
                        <a href="{{ route('contact') }}" class="theme-btn">İletişime Geçin</a>
                    </div>
                </div>
                <div class="social-area-wrap">
                    <a href="#"><i class="lab la-facebook-f"></i></a>
                    <a href="#"><i class="lab la-instagram"></i></a>
                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                    <a href="#"><i class="lab la-skype"></i></a>
                </div>
            </div>
        </div>

        <div class="offcanvas-overlay"></div>

        <div id="smooth-content">

            @yield('content')

            <!-- Footer Area -->
            <footer class="footer-area">
                <div class="container">
                    <div class="footer-up">
                        <div class="row gy-5">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a href="{{ route ('index')}}" class="logo">
                                    <img src="{{ asset ('assets/img/tomruk/tomruk-logo.png') }}"
                                    style="max-width: 150px;" alt="tomruk-house" title="Tomruk House">
                                </a>
                                <p>1974'ten beri aile değerleriyle inşa ettiğimiz <br>
                                    bungalov evlerimizle, müşterilerimizin <br>
                                    hayallerini gerçeğe dönüştürmeyi hedefliyoruz.<br>
                                    Uzman ekibimizle kaliteli malzemeler kullanarak, <br>
                                    doğayla uyumlu ve sürdürülebilir yapılar <br>
                                    inşa ediyoruz.
                                </p>
                            </div>
                            <div class="col-lg-2 ml-50 col-md-6 com-sm-12">
                                <h5>Sayfalar</h5>
                                <ul>
                                    <li>
                                        <a href="{{ route ('about')}}">Hakkımızda</a>
                                        <a href="{{ route ('floor.plans')}}">Kat Planları</a>
                                        <a href="{{ route ('photos')}}">Fotoğraflar</a>
                                        <a href="{{ route ('events')}}">Etkinlikler</a>
                                        <a href="{{ route ('contact')}}"> İletişim</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h5>Bizi Takip Edin</h5>
                                <ul>
                                    <li>
                                        <div class="social-area">
                                            <a href="#"><i class="lab la-facebook-f"></i>Facebook</a>
                                            <a href="#"><i class="lab la-instagram"></i>Instagram</a>
                                            <a href="#"><i class="lab la-linkedin-in"></i>linkedin</a>
                                            <a href="#"><i class="la la-skype"></i>Skype</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <h5>İletişim</h5>

                                <p>Gümüşdere Yörük sokak
                                    No:14
                                    Sarıyer, Istanbul, Turkey 34450
                                </p>
                                <div class="company-email">
                                    <a href="mailto:info@tomrukhouse.com">info@tomrukhouse.com</a>
                                </div>
                                <div class="phone-number">
                                    <a href="tel:05425002218">
                                        <p>0542 500 22 18</p>
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Footer Bottom Area -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row justify-content-center align-items-center justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <p class="copyright-line">© 2024 Tomruk House. Tüm Hakları Saklıdır.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 text-md-end">
                            <p class="privacy">
                               <a href="{{ route ('privacy')}}" class="text-white">Gizlilik Sözleşmesi |</a>
                                <a href="{{ route ('kvkk')}}" class="text-white">KVKK</a> </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </div>
    </div> -->
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
                </svg>
            </div>

            <!-- Popper JS -->
            <script src="{{ asset ('assets/js/popper.min.js') }}"></script>
            <!-- Bootstrap JS -->
            <script src="{{ asset ('assets/js/bootstrap.min.js') }}"></script>
            <!-- Wow JS -->
            <script src="{{ asset ('assets/js/wow.min.js') }}"></script>
            <!-- Way Points JS -->
            <script src="{{ asset ('assets/js/jquery.waypoints.min.js') }}"></script>
            <!-- Counter Up JS -->
            <script src="{{ asset ('assets/js/jquery.counterup.min.js') }}"></script>
            <!-- Owl Carousel JS -->
            <script src="{{ asset ('assets/js/owl.carousel.min.js') }}"></script>
            <!-- Slick Slider JS -->
            <script src="{{ asset ('assets/js/slick.min.js') }}"></script>
            <!-- Magnific Popup JS -->
            <script src="{{ asset ('assets/js/magnific-popup.min.js') }}"></script>
            <!-- Isotope JS -->
            <script src="{{ asset ('assets/js/isotope-3.0.6-min.js') }}"></script>
            <!-- Nice Select JS -->
            <script src="{{ asset ('assets/js/jquery.nice-select.min.js') }}"></script>
            <!-- Back To Top JS -->
            <script src="{{ asset ('assets/js/backToTop.js') }}"></script>
            <!-- Metis Menu JS -->
            <script src="{{ asset ('assets/js/metismenu.js') }}"></script>
            <!-- Progress Bar JS -->
            <script src="{{ asset ('assets/js/jquery.barfiller.js') }}"></script>
            <!-- Appear JS -->
            <script src="{{ asset ('assets/js/jquery.appear.min.js') }}"></script>
            <!-- Odometer JS -->
            <script src="{{ asset ('assets/js/odometer.min.js') }}"></script>
            <!-- GSAP Animation JS -->
            <script src="{{ asset ('assets/js/gsap.min.js') }}"></script>
            <script src="{{ asset ('assets/js/gsap-scroll-to-plugin.js') }}"></script>
            <script src="{{ asset ('assets/js/SplitText.min.js') }}"></script>
            <script src="{{ asset ('assets/js/ScrollSmoother.min.js') }}"></script>
            <script src="{{ asset ('assets/js/ScrollTrigger.min.js') }}"></script>
            <script src="{{ asset ('assets/js/smoother-script.js') }}"></script>
            <script src="{{ asset ('assets/js/heading-animation.js') }}"></script>
            <script src="{{ asset ('assets/js/paragraph-animation.js') }}"></script>
            <!-- Main JS -->
            <script src="{{ asset ('assets/js/main.js') }}"></script>

</body>

</html>
