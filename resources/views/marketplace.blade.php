<!-- Explore Style Carousel -->

<?php
$nfts=App\Models\Marketplace::all();
?>

<style>



</style>

<div class="rn-live-bidding-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title mb--0 live-bidding-title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Marketplace</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-one-slick slick-activation-03 slick-arrow-style-one rn-slick-dot-style slick-gutter-15">
                        <!-- start single product -->
                        @foreach($nfts as $nft)

                      


                       
                        <div class="single-slide-product">
                            <div class="product-style-one">
                                <div class="card-thumbnail">
                                    <a href="{{url('buynft')}}/<?php $singleitems=App\Models\Nft::where('id',$nft->nftref)->first();
                                 echo $singleitems->ref;?>"><img src="nfts/<?php 
                                    $singleitems=App\Models\Marketplace::where('nftref',$nft->nftref)->first();
                                    echo $singleitems->image;?>" height="400" width="200" class="shimmer" alt="NFT_portfolio"></a>
                                    <div class="countdown" data-date="2022-11-09">
                                        <div class="countdown-container days">
                                            <span class="countdown-value">87</span>
                                            <span class="countdown-heading">D's</span>
                                        </div>
                                        <div class="countdown-container hours">
                                            <span class="countdown-value">23</span>
                                            <span class="countdown-heading">H's</span>
                                        </div>
                                        <div class="countdown-container minutes">
                                            <span class="countdown-value">38</span>
                                            <span class="countdown-heading">Min's</span>
                                        </div>
                                        <div class="countdown-container seconds">
                                            <span class="countdown-value">27</span>
                                            <span class="countdown-heading">Sec</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-share-wrapper">
                                    <div class="profile-share">
                                        <a href="" class="avatar" data-tooltip="Mark JOrdan"><img src="assets/images/client/client-2.png" alt="Nft_Profile"></a>
                                        <a href="" class="avatar" data-tooltip="Mark"><img src="assets/images/client/client-3.png" alt="Nft_Profile"></a>
                                        <a href="" class="avatar" data-tooltip="Jordan"><img src="assets/images/client/client-5.png" alt="Nft_Profile"></a>
                                        <a class="more-author-text" href="#">20+ Place Bit.</a>
                                    </div>
                                    <div class="share-btn share-btn-activation dropdown">
                                        <button class="icon" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                            </svg>
                                        </button>

                                        <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                            <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                                Share
                                            </button>
                                            <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                                Report
                                            </button>
                                        </div>

                                    </div>

                                </div>
                                <a href="{{url('buynft')}}/<?php $singleitems=App\Models\Nft::where('id',$nft->nftref)->first();
                                 echo $singleitems->ref;?>"><span class="product-name">
                            
                                <?php 
                                    $singleitems=App\Models\Nft::where('id',$nft->nftref)->first();
                                    echo $singleitems->name;?>
                                </span></a>
                                <span class="latest-bid">Highest bid 1/20</span>
                                <div class="bid-react-area">
                                    <div class="last-bid">USD {{$nft->price}}</div>
                                    <div class="react-area">
                                        <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                            <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                        </svg>
                                        <span class="number">322</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                       
                        @endforeach
                        

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    