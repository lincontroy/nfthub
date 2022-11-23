<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || {{env('App_name')}} - NFT Marketplace</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="theme-style-mode" content="1"> <!-- 0 == light, 1 == dark -->

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/feature.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/vendor/odometer.css')}}">
    @notifyCss
    <!-- Style css -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
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

        @keyframes loading {
            from {
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
                        <h5 class="logo-light">
                            <!-- <img src="assets/images/logo/logo-white.png" alt="nft-logo"> -->
                            {{env('App_name')}}
                        </h5>
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
                                    <a href="{{url('/#mp')}}">Marketplace</a>

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
                            <button class="btn btn-primary-alta btn-small" onclick="copyURI(event)" title="click here to copy" href="{{url('register')}}/{{Auth::user()->referal_code}}">Referal code</button>
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
                            <a id="connectbtn" class="btn btn-primary-alta btn-small" href="/login">Wallet connect</a>
                        </div>
                    </div>
                    @endif





                    <div class="header_admin" id="header_admin">
                        <div class="setting-option rn-icon-list user-account">
                            <div class="icon-box">
                                <a href="author.html"><img src="{{url('assets/images/icons/boy-avater.png')}}" alt="Images"></a>
                                <div class="rn-dropdown">
                                    <div class="rn-inner-top">
                                        <h4 class="title"><a href="product-details.html">Christopher William</a></h4>
                                        <span><a href="#">Set Display Name</a></span>
                                    </div>
                                    <div class="rn-product-inner">
                                        <ul class="product-list">
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img src="assets/images/portfolio/portfolio-07.jpg" alt="Nft Product Images"></a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="product-details.html">Balance</a></h6>
                                                    <span class="price">25 ETH</span>
                                                </div>
                                                <div class="button"></div>
                                            </li>
                                            <li class="single-product-list">
                                                <div class="thumbnail">
                                                    <a href="product-details.html"><img src="assets/images/portfolio/portfolio-01.jpg" alt="Nft Product Images"></a>
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
                                        <a class="btn btn-primary-alta w-100" href="connect.html">Add Your More Funds</a>
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
                                    <img class="sun-image" src="{{url('assets/images/icons/sun-01.svg')}}" alt="Sun images">
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                    <img class="Victor Image" src="{{url('assets/images/icons/vector.svg')}}" alt="Vector Images">
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
                    <a class="logo-light" href="index.html"><img src="assets/images/logo/logo-white.png" alt="nft-logo"></a>
                    <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a>
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
                    <li class="has-droupdown">
                        <a class="nav-link its_new" href="#">Home</a>
                        <ul class="submenu">
                            <li><a href="index.html">Home page - 01 <i class="feather-home"></i></a></li>
                            <li><a href="index-two.html">Home page - 02<i class="feather-home"></i></a></li>
                            <li><a href="index-three.html">Home page - 03<i class="feather-home"></i></a></li>
                            <li><a href="index-four.html">Home page - 04<i class="feather-home"></i></a></li>
                            <li><a href="index-five.html">Home page - 05<i class="feather-home"></i></a></li>
                            <li><a href="index-six.html">Home page - 06<i class="feather-home"></i></a></li>
                            <li><a href="index-seven.html">Home page - 07<i class="feather-home"></i></a></li>
                            <li><a href="index-eight.html">Home page - 08<i class="feather-home"></i></a></li>
                            <li><a href="index-nine.html">Home page - 09<i class="feather-home"></i></a></li>
                            <li><a href="index-ten.html">Home page - 10<i class="feather-home"></i></a></li>
                            <li><a href="index-eleven.html">Home page - 11<i class="feather-home"></i></a></li>
                            <li><a href="index-twelve.html">Home page - 12<i class="feather-home"></i></a></li>
                            <li><a href="index-thirteen.html">Home page - 13<i class="feather-home"></i></a></li>
                            <li><a href="index-fourteen.html">Home page - 14<i class="feather-home"></i></a></li>
                            <li><a href="index-fifteen.html">Home page - 15<i class="feather-home"></i></a></li>
                            <li><a href="index-sixteen.html">Home page - 16<i class="feather-home"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a>
                    </li>
                    <li class="has-droupdown">
                        <a class="nav-link its_new" href="#">Explore</a>
                        <ul class="submenu">
                            <li><a href="explore-one.html">Explore Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-two.html">Explore Isotop<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-three.html">Explore Carousel<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-four.html">Explore Simple<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-five.html">Explore Place Bid<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-six.html">Place Bid With Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-seven.html">Place Bid With Isotop<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-eight.html">Place Bid With Carousel<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-list-style.html">Explore Style List<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-list-column-two.html">Explore List Col-Two<i class="feather-fast-forward"></i></a></li>
                            <li><a href="explore-left-filter.html">Explore Left Filter<i class="feather-fast-forward"></i></a></li>
                            <li><a class="live-expo" href="explore-live.html">Live Explore</a></li>
                            <li><a class="live-expo" href="explore-live-two.html">Live Explore Carousel</a></li>
                            <li><a class="live-expo" href="explore-live-three.html">Live With Place Bid</a></li>
                        </ul>
                    </li>
                    <li class="with-megamenu">
                        <a class="nav-link its_new" href="#">Pages</a>
                        <div class="rn-megamenu">
                            <div class="wrapper">
                                <div class="row row--0">
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li>
                                                <a href="create.html">Create NFT<i data-feather="file-plus"></i></a>
                                            </li>
                                            <li>
                                                <a href="upload-variants.html">Upload Type<i data-feather="layers"></i></a>
                                            </li>
                                            <li><a href="/">Activity<i data-feather="activity"></i></a></li>
                                            <li>
                                                <a href="creator.html">Creators<i data-feather="users"></i></a>
                                            </li>
                                            <li><a href="collection.html">Our Collection<i data-feather="package"></i></a></li>
                                            <li><a href="upcoming_projects.html">Upcoming Projects<i data-feather="loader"></i></a></li>
                                            <li><a href="create-collection.html">Create Collection<i data-feather="edit-3"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="login.html">Log In <i data-feather="log-in"></i></a></li>
                                            <li><a href="sign-up.html">Registration <i data-feather="user-plus"></i></a></li>
                                            <li><a href="forget.html">Forget Password <i data-feather="key"></i></a></li>
                                            <li>
                                                <a href="author.html">Author/Profile(User) <i data-feather="user"></i></a>
                                            </li>
                                            <li>
                                                <a href="connect.html">Connect to Wallet <i data-feather="pocket"></i></a>
                                            </li>
                                            <li><a href="privacy-policy.html">Privacy Policy <i data-feather="file-text"></i></a></li>
                                            <li><a href="newsletter.html">Newsletter<i data-feather="book-open"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">

                                            <li><a href="product.html">Product<i data-feather="folder"></i></a></li>
                                            <li><a href="product-details.html">Product Details <i data-feather="layout"></i></a></li>
                                            <li><a href="ranking.html">NFT Ranking<i data-feather="trending-up"></i></a></li>
                                            <li><a href="blog.html">Our News <i data-feather="message-square"></i></a></li>
                                            <li><a href="blog-details.html">Blog Details<i data-feather="book-open"></i></a></li>
                                            <li><a href="404.html">404 <i data-feather="alert-triangle"></i></a></li>
                                            <li><a href="forum-community.html">Forum & Community<i data-feather="message-circle"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 single-mega-item">
                                        <ul class="mega-menu-item">
                                            <li><a href="about.html">About Us<i data-feather="award"></i></a></li>
                                            <li><a href="contact.html">Contact <i data-feather="headphones"></i></a></li>
                                            <li><a href="support.html">Support/FAQ <i data-feather="help-circle"></i></a></li>
                                            <li><a href="terms-condition.html">Terms & Condition <i data-feather="list"></i></a></li>
                                            <li><a href="coming-soon.html">Coming Soon <i data-feather="clock"></i></a></li>
                                            <li><a href="maintenance.html">Maintenance <i data-feather="cpu"></i></a></li>
                                            <li><a href="forum-details.html">Forum Details <i data-feather="message-circle"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="has-droupdown has-menu-child-item">
                        <a class="nav-link its_new" href="blog.html">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-single-col.html">Blog Single Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-col-two.html">Blog Two Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-col-three.html">Blog Three Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog.html">Blog Four Column<i class="feather-fast-forward"></i></a></li>
                            <li><a href="blog-details.html">Blog Details<i class="feather-fast-forward"></i></a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
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
                        <span>©2022 Nuron, Inc. All rights reserved.</span>
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
    <script src="{{url('assets/js/vendor/jquery.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{url('assets/js/vendor/modernizer.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/feather.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/sal.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/particles.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.style.swicher.js')}}"></script>
    <script src="{{url('assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{url('assets/js/vendor/count-down.js')}}"></script>
    <script src="{{url('assets/js/vendor/isotop.js')}}"></script>
    <script src="{{url('assets/js/vendor/imageloaded.js')}}"></script>
    <script src="{{url('assets/js/vendor/backtoTop.js')}}"></script>
    <script src="{{url('assets/js/vendor/odometer.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery-appear.js')}}"></script>
    <script src="{{url('assets/js/vendor/scrolltrigger.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.custom-file-input.js')}}"></script>
    <script src="{{url('assets/js/vendor/savePopup.js')}}"></script>
    <script src="{{url('assets/js/vendor/vanilla.tilt.js')}}"></script>

    <!-- main JS -->
    <script src="{{url('assets/js/main.js')}}"></script>
    <!-- Meta Mask  -->
    <script src="{{url('assets/js/vendor/web3.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/maralis.js')}}"></script>
    <script src="{{url('assets/js/vendor/nft.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @notifyJs
    <script>
        $(document).ready(function() {
            $("#lineload").hide();
        });
    </script>
</body>

</html>