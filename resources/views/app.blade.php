<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Zagusha Property</title>

        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Main CSS File -->
        <link href="{{ asset('assets/css/sailor.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
        
        @vite('resources/js/app.js')
        @inertiaHead

    </head>
    <body>
        
        <header id="header" class="header fixed-top">

            <div class="branding d-flex align-items-center">

                <div class="container position-relative d-flex align-items-center justify-content-between">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <!-- <img src="assets/img/logo.png" alt=""> -->
                        <h1 class="sitename">Zagusha Property</h1>
                        <span>.</span>
                    </a>

                    <nav id="navmenu" class="navmenu">
                        <ul>
                            <li><a href="#hero" class="active">Home<br></a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#portfolio">Listings</a></li>
                            <li><a href="#services">Our Services</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#recent-posts">Posts</a></li>
                            <li class="dropdown"><a href="#"><span>Properties</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Dropdown 1</a></li>
                                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                                </li>
                                <li><a href="#">Dropdown 2</a></li>
                                <li><a href="#">Dropdown 3</a></li>
                                <li><a href="#">Dropdown 4</a></li>
                            </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </nav>

                </div>

            </div>

        </header>
        
        <main class="main">
            @inertia
        </main>
    
        <footer id="footer" class="footer accent-background">

            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">herosha Property</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="#">የሪል እስቴት ግብይቶችን ማሳለጥ</a></li>
                            <li><a href="#">የንብረት ማስተዳደር</a></li>
                            <li><a href="#">የአክስዮን ግብይቶችን ማሳለጥ</a></li>
                            <li><a href="#">የገበያ ጥናት</a></li>
                            <li><a href="#">የማስታወቅያ ስራ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>Bahir Dar</p>
                        <p class="mt-4"><strong>Phone:</strong> <span>+2519 +++++</span></p>
                        <p><strong>Email:</strong> <span>info@zagushaproperty.com</span></p>
                    </div>

                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Impact</strong> <span>All Rights Reserved</span></p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="#">Saffron</a>
                </div>
            </div>

        </footer>

        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
        <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
        <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

        <!-- <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script> -->

        <!-- Main JS File -->
        <script src="{{ asset('assets/js/sailor.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>

    </body>
</html>
