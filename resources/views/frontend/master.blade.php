<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Kumo- Fashion eCommerce HTML Template</title>

    <!-- Custom CSS -->
    <link href="{{ asset('frontend/css/plugins/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/iconfont.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/ion.rangeSlider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/light-box.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/snackbar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/plugins/themify.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('frontend/css/styles.css') }}" rel="stylesheet">

</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader"></div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->

        <div class="headd-sty header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="headd-sty-wrap d-flex align-items-center justify-content-between py-3">
                            <div class="headd-sty-left d-flex align-items-center">
                                <div class="headd-sty-01">
                                    <a class="py-0" href="{{ url('/') }}">
                                        <H1>BLOGSITE</H1>
                                    </a>
                                </div>
                                <div class="headd-sty-02 ml-3">
                                    <form class="bg-white rounded-md border-bold">
                                        <div class="input-group">
                                            <input type="text" class="form-control custom-height b-0"
                                                placeholder="Search for blog posts..." />
                                            <div class="input-group-append">
                                                <div class="input-group-text"><button
                                                        class="btn bg-white text-danger custom-height rounded px-3"
                                                        type="button"><i class="fas fa-search"></i></button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="headd-sty-last">

                                <div class="currency-selector dropdown js-dropdown float-right mr-3">
                                    @auth('bloggerAuth')
                                        <div class="dropdown">
                                            <p type="button" class="font-weight-bold" style="cursor: pointer"
                                                data-toggle="dropdown">
                                                <i class="far fa-user mr-1"></i>
                                                {{ Auth::guard('bloggerAuth')->user()->name }} <i
                                                    class="fas fa-caret-down ml-1"></i>
                                            </p>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Profile</a>
                                                <a class="dropdown-item" href="{{ route('blogger.logout') }}">Log Out</a>
                                            </div>
                                        </div>
                                    @else
                                        <a href="{{ route('blogger.reg') }}" class="text-muted medium"><i
                                                class="lni lni-user mr-1"></i>Login / Register</a>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navigation -->
        <div class="headerd header-dark head-style-2">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <div class="nav-toggle"></div>
                        <div class="nav-menus-wrapper">
                            <ul class="nav-menu">
                                <li><a href="{{ url('/') }}" class="pl-0">Home</a></li>
                                <li><a href="{{ url('/') }}">Blogs</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->

        @yield('content')

        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer style-2">
            <div class="footer-middle">
                <div class="container">
                    <div class="row">

                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <h1 class="text-light">BLOGS</h1>

                                <div class="address mt-3">
                                    3298 Grant Street Longview, TX<br>United Kingdom 75601
                                </div>
                                <div class="address mt-3">
                                    1-202-555-0106<br>help@shopper.com
                                </div>
                                <div class="address mt-3">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-youtube"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-instagram-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="lni lni-linkedin-original"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Supports</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">About Page</a></li>
                                    <li><a href="#">Blogs</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Company</h4>
                                <ul class="footer-menu">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="{{ route('blogger.reg') }}">Login</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-xl-5 col-lg-5 col-md-3 col-sm-12">
                            <div class="footer_widget">
                                <h4 class="widget_title">Subscribe</h4>
                                <p>Receive updates, hot deals, discounts sent straignt in your inbox daily</p>
                                <div class="foot-news-last">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <div class="input-group-append">
                                            <button type="button" class="input-group-text b-0 text-light"><i
                                                    class="lni lni-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <p class="mb-0">© 2021 Blogs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->


    </div>

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/js/slider-bg.js') }}"></script>
    <script src="{{ asset('frontend/js/lightbox.js') }}"></script>
    <script src="{{ asset('frontend/js/smoothproducts.js') }}"></script>
    <script src="{{ asset('frontend/js/snackbar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.js') }}"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   


    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

    @yield('footer_body')




</body>

</html>
