<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || {{ env('APP_NAME') }} - NFT Marketplace</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/feature.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/plugins/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/vendor/odometer.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css"
        integrity="sha512-giQeaPns4lQTBMRpOOHsYnGw1tGVzbAIHUyHRgn7+6FmiEgGGjaG0T2LZJmAPMzRCl+Cug0ItQ2xDZpTmEc+CQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @notifyCss
        <!-- Style css -->
        <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
        <style>
            .load-bar {
                position: relative;
                margin-top: 0px;
                width: 100%;
                height: 6px;
                background-color: #fdba2c;
            }

            .bar {
                content: "";
                display: inline;
                position: absolute;
                width: 0;
                height: 100%;
                left: 50%;
                text-align: center;
            }

            .bar:nth-child(1) {
                background-color: #da4733;
                animation: loading 3s linear infinite;
            }

            .bar:nth-child(2) {
                background-color: #3b78e7;
                animation: loading 3s linear 1s infinite;
            }

            .bar:nth-child(3) {
                background-color: #fdba2c;
                animation: loading 3s linear 2s infinite;
            }

            <blade keyframes|%20loading%20%7B%0D>from {
                left: 0;
                width: 0;
                z-index: 100;
            }

            33.3333% {
                left: 0;
                width: 100%;
                z-index: 10;
            }

            to {
                left: 0;
                width: 100%;
            }
            }

        </style>

</head>

<body class="template-color-1 nft-body-connect">
    <!-- start header area -->
    <!-- Start Header -->

    <div class="load-bar" id="lineload">
        <div class="bar"></div>
    </div>


    <header class="rn-header haeder-default header--sticky">
        <div class="container">
            <div class="header-inner">
                <div class="header-left">
                    <div class="logo-thumbnail logo-custom-css">
                        <h6 class="logo-light">
                            <!-- <img src="assets/images/logo/logo-white.png" alt="nft-logo"> -->
                            <!-- {{ env('APP_NAME') }} -->
                        </h6>
                        <!-- <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a> -->
                    </div>
                    <div class="mainmenu-wrapper">
                        <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                            <!-- Start Mainmanu Nav -->
                            <ul class="mainmenu">
                                <li class="has-menu-child-item">
                                    <a href="/">Home</a>

                                </li>

                                <li class="has-menu-child-item">
                                    <a href="{{ url('/#mp') }}">Marketplace</a>

                                </li>
                                <li class="has-menu-child-item">
                                    <a href="/home">My collection</a>
                                </li>

                                <li class=" has-menu-child-item">
                                    <a href="/settings">Settings</a>

                                </li>

                                <li class=" has-menu-child-item">
                                    <a href="/profile">Profile</a>

                                </li>



                            </ul>
                            <!-- End Mainmanu Nav -->
                        </nav>
                    </div>
                </div>
                <div class="header-right">
                    <div class="setting-option d-none d-lg-block">

                    </div>
                    <div class="setting-option rn-icon-list d-block d-lg-none">
                        <div class="icon-box search-mobile-icon">
                            <button><i class="feather-search"></i></button>
                        </div>
                        <form id="header-search-1" action="#" method="GET" class="large-mobile-blog-search">
                            <div class="rn-search-mobile form-group">
                                <button type="submit" class="search-button"><i class="feather-search"></i></button>
                                <input type="text" placeholder="Search ...">
                            </div>
                        </form>
                    </div>

                    @if(Auth::check())
                        <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                            <!-- <div class="icon-box">
                            <a  class="btn btn-primary-alta btn-small" href="/home">Dashboard</a>
                        </div><br> -->
                            <div class="icon-box">
                                <button class="btn btn-primary-alta btn-small" onclick="copyURI(event)"
                                    title="click here to copy"
                                    href="{{ url('register') }}/{{ Auth::user()->referal_code }}">Referal
                                    code</button>
                            </div>

                            <script>
                                function copyURI(evt) {
                                    evt.preventDefault();
                                    navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
                                        /* clipboard successfully set */
                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'success',
                                            title: 'Referal code copied',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    }, () => {
                                        /* clipboard write failed */
                                        Swal.fire({
                                            position: 'top-end',
                                            icon: 'error',
                                            title: 'Failed to copy',
                                            showConfirmButton: false,
                                            timer: 1500
                                        })
                                    });
                                }

                            </script>
                        </div>
                    @else
                        <div class="setting-option header-btn rbt-site-header" id="rbt-site-header">
                            <div class="icon-box">
                                <a id="connectbtn" class="btn btn-primary-alta btn-small" href="/login">Wallet
                                    connect</a>
                            </div>
                        </div>
                    @endif





                    <div class="header_admin" id="header_admin">
                        <div class="setting-option rn-icon-list user-account">
                            <div class="icon-box">
                                <a href="author.html"><img
                                        src="{{ url('assets/images/icons/boy-avater.png') }}"
                                        alt="Images"></a>
                                <div class="rn-dropdown">
                                    <div class="rn-inner-top">
                                        <h4 class="title"><a href="product-details.html">Christopher William</a></h4>
                                        <span><a href="#">Set Display Name</a></span>
                                    </div>
                                    <div class="rn-product-inner">
                                        <ul class="product-list">
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img
                                                            src="assets/images/portfolio/portfolio-07.jpg"
                                                            alt="Nft Product Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="product-details.html">Balance</a></h6>
                                                    <span class="price">25 ETH</span>
                                                </div>
                                                <div class="button"></div>
                                            </li>
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img
                                                            src="assets/images/portfolio/portfolio-01.jpg"
                                                            alt="Nft Product Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="product-details.html">Balance</a></h6>
                                                    <span class="price">25 ETH</span>
                                                </div>
                                                <div class="button"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="add-fund-button mt--20 pb--20">
                                        <a class="btn btn-primary-alta w-100" href="connect.html">Add Your More
                                            Funds</a>
                                    </div>
                                    <ul class="list-inner">
                                        <li><a href="author.html">My Profile</a></li>
                                        <li><a href="edit-profile.html">Edit Profile</a></li>
                                        <li><a href="connect.html">Manage funds</a></li>
                                        <li><a href="login.html">Sign Out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="setting-option mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>

                    <div id="my_switcher" class="my_switcher setting-option">
                        <ul>
                            <li>
                                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                    <img class="sun-image"
                                        src="{{ url('assets/images/icons/sun-01.svg') }}"
                                        alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image"
                                        src="{{ url('assets/images/icons/vector.svg') }}"
                                        alt="Vector Images">
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo logo-custom-css">
                    <a class="logo-light" href="">{{ env('APP_NAME') }}</a>
                    <a class="logo-dark" href="">{{ env('APP_NAME') }}</a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
            <nav>
                <!-- Start Mainmanu Nav -->
                <ul class="mainmenu">
                    <li class="has-menu-child-item">
                        <a href="/">Home</a>

                    </li>


                    <li class="has-menu-child-item">
                        <a href="{{ url('deposit') }}">Deposit</a>
                    </li>

                    <li class="has-menu-child-item">
                        <a href="{{ url('withdraw') }}">Withdraw</a>
                    </li>

                    <li class="has-menu-child-item">
                        <a href="{{ url('home') }}">My collection</a>
                    </li>
                    <li class="has-menu-child-item">
                        <a href="{{ url('/#mp') }}">Marketplace</a>

                    </li>

                    <li class=" has-menu-child-item">
                        <a href="/settings">Settings</a>

                    </li>

                    <li class=" has-menu-child-item">
                        <a href="{{ url('profile') }}">Profile</a>

                    </li>

                    @if(Auth::check())

                        <li class=" has-menu-child-item">
                            <a href="{{ url('logout') }}">Logout</a>

                        </li>
                    @else

                        <li class=" has-menu-child-item">
                            <a href="{{ url('register') }}">Register</a>

                        </li>
                        <li class=" has-menu-child-item">
                            <a href="{{ url('login') }}">Login</a>

                        </li>



                    @endif


                </ul>
                <!-- End Mainmanu Nav -->
            </nav>
        </div>
    </div>
    <!-- ENd Header Area -->


    @yield('content')
    <!-- End Footer Area -->
    <!-- Start Footer Area -->
    <x:notify-messages />


    </div>
    <div class="copy-right-one ptb--20 bg-color--1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-left">
                        <span>2019-<script>
                                document.write(/\d{4}/.exec(Date())[0])

                            </script> {{ env('APP_NAME') }}, Inc. All rights reserved.</span>
                        <ul class="privacy">
                            <li><a href="terms-condition.html">Terms</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright-right">
                        <ul class="social-copyright">
                            <li><a href="#"><i data-feather="facebook"></i></a></li>
                            <li><a href="#"><i data-feather="twitter"></i></a></li>
                            <li><a href="#"><i data-feather="instagram"></i></a></li>
                            <li><a href="#"><i data-feather="linkedin"></i></a></li>
                            <li><a href="#"><i data-feather="mail"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Start Top To Bottom Area  -->
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    <script src="{{ url('assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-ui.js') }}"></script>
    <script src="{{ url('assets/js/vendor/modernizer.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/feather.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/slick.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/sal.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/particles.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery.style.swicher.js') }}"></script>
    <script src="{{ url('assets/js/vendor/js.cookie.js') }}"></script>
    <script src="{{ url('assets/js/vendor/count-down.js') }}"></script>
    <script src="{{ url('assets/js/vendor/isotop.js') }}"></script>
    <script src="{{ url('assets/js/vendor/imageloaded.js') }}"></script>
    <script src="{{ url('assets/js/vendor/backtoTop.js') }}"></script>
    <script src="{{ url('assets/js/vendor/odometer.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery-appear.js') }}"></script>
    <script src="{{ url('assets/js/vendor/scrolltrigger.js') }}"></script>
    <script src="{{ url('assets/js/vendor/jquery.custom-file-input.js') }}"></script>
    <script src="{{ url('assets/js/vendor/savePopup.js') }}"></script>
    <script src="{{ url('assets/js/vendor/vanilla.tilt.js') }}"></script>

    <!-- main JS -->
    <script src="{{ url('assets/js/main.js') }}"></script>
    <!-- Meta Mask  -->
    <script src="{{ url('assets/js/vendor/web3.min.js') }}"></script>
    <script src="{{ url('assets/js/vendor/maralis.js') }}"></script>
    <script src="{{ url('assets/js/vendor/nft.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @notifyJs
        <script>
            $(document).ready(function () {
                $("#lineload").hide();
            });

        </script>
</body>

</html>
