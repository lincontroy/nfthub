@extends('layouts.main')

@section('content')

  <!-- start banner area -->
  <div class="slider-one rn-section-gapTop">
        <div class="container">
            <div class="row row-reverce-sm align-items-center">
                <div class="col-lg-5 col-md-6 col-sm-12 mt_sm--50">
                    <h2 class="title" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">Discover Digital Art, Collect and Sell Your Specific NFTs.</h2>
                    <p class="slide-disc" data-sal-delay="300" data-sal="slide-up" data-sal-duration="800">Partner with one of the world’s largest retailers to showcase your brand and
                        products.</p>
                    <div class="button-group">
                        <a class="btn btn-large btn-primary" href="{{url('register')}}" data-sal-delay="400" data-sal="slide-up" data-sal-duration="800">Get Started</a>
                        <a class="btn btn-large btn-primary-alta" href="{{url('register')}}" data-sal-delay="500" data-sal="slide-up" data-sal-duration="800">Create Account</a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 offset-lg-1">
                    <div class="slider-thumbnail">
                        <img src="assets/images/slider/slider-1.png" alt="Slider Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End banner area -->

    @include('marketplace');

    <!-- start service area -->
    <div class="rn-service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12 mb--50">
                    <h3 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800"> Buy and sell your NFTs</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="rn-service-one color-shape-7">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-7.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-01</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Create an Account</a></h4>
                                <p class="description">Create your free {{env('APP_NAME')}} account and obtain a wallet address for all Your
                                    transactions
                                </p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="rn-service-one color-shape-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-1.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-02</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Buy Nft</a></h4>
                                <p class="description">Purchase Nfts from the marketplace to increase your earnings. Nfts are classified according to tiers from 1,2 and 3</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="rn-service-one color-shape-5">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-5.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-03</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Sell your NFT's</a></h4>
                                <p class="description">Sell your nfts on the marketplace to earn from the sale</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
               
                <!-- End single service -->
            </div>
        </div>
    </div>
    <!-- End service area -->
    <!-- New items Start -->
  
    <!-- New items End -->
    <!-- top top-seller start -->
   
    <!-- top top-seller end -->
    <!-- Start product area -->
   
    <!-- end product area -->
    <!-- collection area Start -->
    <div class="rn-collection-area rn-section-gapTop"> 
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Top Collection</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                      
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-01.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-01.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-02.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-15.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Cubic Trad</h6>
                                <span class="items">27 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-03.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-04.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-05.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-06.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-12.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Diamond Dog</h6>
                                <span class="items">20 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-02.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-07.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-08.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-09.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-13.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Morgan11</h6>
                                <span class="items">15 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
                <!-- start single collention -->
                <div data-sal="slide-up" data-sal-delay="350" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <img src="assets/images/collection/collection-lg-04.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collenction-small-thumbnail">
                                <img src="assets/images/collection/collection-sm-10.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-11.jpg" alt="Nft_Profile">
                                <img src="assets/images/collection/collection-sm-12.jpg" alt="Nft_Profile">
                            </div>
                            <div class="collection-profile">
                                <img src="assets/images/client/client-14.png" alt="Nft_Profile">
                            </div>
                            <div class="collection-deg">
                                <h6 class="title">Orthogon#720</h6>
                                <span class="items">10 Items</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- End single collention -->
            </div>
        </div>
    </div> 
    <!-- collection area End -->
    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Share this NFT</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">Why are you reporting?
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Describe why you think this item should be removed from marketplace</p>
                    <div class="report-form-box">
                        <h6 class="title">Message</h6>
                        <textarea name="message" placeholder="Write issues"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">Report</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
    <div class="rn-footer-one rn-section-gap bg-color--1 mt--100 mt_md--80 mt_sm--80">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="widget-content-wrapper">
                        <div class="footer-left">
                            <div class="logo-thumbnail logo-custom-css">
                                <a class="logo-light" href="index.html"><img src="assets/images/logo/logo-white.png" alt="nft-logo"></a>
                                <a class="logo-dark" href="index.html"><img src="assets/images/logo/logo-dark.png" alt="nft-logo"></a>
                            </div>
                            <p class="rn-footer-describe">
                                Created with the collaboration of over 60 of the world's best {{env('APP_NAME')}} Artists.
                            </p>
                        </div>
                        <div class="widget-bottom mt--40 pt--40">
                            <h6 class="title">Get The Latest {{env('APP_NAME')}} Updates </h6>
                            <div class="input-group">
                                <input type="text" class="form-control bg-color--2" placeholder="Your username" aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary-alta btn-outline-secondary" type="button">Subscribe</button>
                                </div>
                            </div>
                            <div class="newsletter-dsc">
                                <p>Email is safe. We don't spam.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_mobile--40">
                    <div class="footer-widget widget-quicklink">
                        <h6 class="widget-title">{{env('APP_NAME')}}</h6>
                        <ul class="footer-list-one">
                            <li class="single-list"><a href="#">Protocol Explore</a></li>
                            <li class="single-list"><a href="#">System Token</a></li>
                            <li class="single-list"><a href="#">Otimize Time</a></li>
                            <li class="single-list"><a href="#">Visual Checking</a></li>
                            <li class="single-list"><a href="#">Fadeup System</a></li>
                            <li class="single-list"><a href="#">Activity Log</a></li>
                            <li class="single-list"><a href="#">System Auto Since</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget widget-information">
                        <h6 class="widget-title">Information</h6>
                        <ul class="footer-list-one">
                            <li class="single-list"><a href="#">Market Explore</a></li>
                            <li class="single-list"><a href="#">Ready Token</a></li>
                            <li class="single-list"><a href="#">Main Option</a></li>
                            <li class="single-list"><a href="#">Product Checking</a></li>
                            <li class="single-list"><a href="blog.html">Blog Grid</a></li>
                            <li class="single-list"><a href="about.html">About Us</a></li>
                            <li class="single-list"><a href="#">Fix Bug </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                    <div class="footer-widget">
                        <h6 class="widget-title">Recent Sold Out</h6>
                        <ul class="footer-recent-post">
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/images/portfolio/portfolio-01.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="">#21 The Wonder</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.244wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/images/portfolio/portfolio-02.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="">Diamond Dog</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.022wETH</span>
                                </div>
                            </li>
                            <li class="recent-post">
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="assets/images/portfolio/portfolio-03.jpg" alt="Product Images">
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="">Morgan11</a></h6>
                                    <p>Highest bid 1/20</p>
                                    <span class="price">0.892wETH</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection