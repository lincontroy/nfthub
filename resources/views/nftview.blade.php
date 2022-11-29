 @extends('layouts.main')

 @section('content')

 <script src="https://kit.fontawesome.com/704ff50790.js" 
        crossorigin="anonymous">
    </script>

 <div class="rn-breadcrumb-inner ptb--30">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-6 col-md-6 col-12">
                 <h5 class="title text-center text-md-start">Product Details</h5>
             </div>
             <div class="col-lg-6 col-md-6 col-12">
                 <ul class="breadcrumb-list">
                     <li class="item"><a href="index.html">Home</a></li>
                     <li class="separator"><i class="feather-chevron-right"></i></li>
                     <li class="item current">Product Details</li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
 <!-- end page title area -->


 <?php

    //get the code of the nft
    $code = Request()->ref;

    //get the iformation concerning that nft

    $collection = App\Models\Nft::where('ref', $code)->first();

    // dd($collection);

    ?>

 <!-- start product details area -->
 <div class="product-details-area rn-section-gapTop">
     <div class="container">
         <div class="row g-5">
             <!-- product image area -->

             <div class="col-lg-7 col-md-12 col-sm-12">
                 <div class="product-tab-wrapper rbt-sticky-top-adjust">
                     <div class="pd-tab-inner">



                         <div class="rn-pd-thumbnail">
                             <img src="{{url('public/nfts')}}/{{$collection->img}}" alt="{{$collection->name}}">
                         </div>




                     </div>
                 </div>
             </div>
             <!-- product image area end -->

             <div class="col-lg-5 col-md-12 col-sm-12 mt_md--50 mt_sm--60">
                 <div class="rn-pd-content-area">
                     <div class="pd-title-area">
                         <h4 class="title">{{$collection->name}}</h4>
                         <div class="pd-react-area">
                             <div class="heart-count">
                                 <i data-feather="heart"></i>
                                 <span>{{$collection->likes}}</span>
                             </div>
                             <div class="count">
                                 <div class="share-btn share-btn-activation dropdown">
                                     <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                         </div>
                     </div>
                     <span class="bid">Height bid <span class="price">{{$collection->price}}</span></span>
                     <h6 class="title-name">
                         #22 Portal , Info {{$collection->ref}}
                     </h6>
                     <div class="catagory-collection">
                         <div class="catagory">
                             <span>Catagory <span class="color-body">
                                     10% royalties</span></span>
                             <div class="top-seller-inner-one">
                                 <div class="top-seller-wrapper">
                                     <div class="thumbnail">
                                         <a href="#"><img src="{{url('/public/nfts')}}/{{$collection->img}}" alt="Nft_Profile"></a>
                                     </div>
                                     <div class="top-seller-content">
                                         <a href="#">
                                             <h6 class="name">Sig</h6>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="collection">
                             <span>Collections</span>
                             <div class="top-seller-inner-one">
                                 <div class="top-seller-wrapper">
                                     <div class="thumbnail">
                                         <a href="#"><img src="{{url('assets/images/client/client-2.png')}}" alt="Nft_Profile"></a>
                                     </div>
                                     <div class="top-seller-content">
                                         <a href="#">
                                             <h6 class="name">Weight</h6>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <a class="btn btn-primary-alta" href="#">Unlockable content included</a>
                     <div class="rn-bid-details">
                         <div class="tab-wrapper-one">
                             <nav class="tab-button-one">
                                 <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                     <button class="nav-link" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Bids</button>
                                     <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Details</button>
                                     <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">History</button>
                                 </div>
                             </nav>
                             <div class="tab-content rn-bid-content" id="nav-tabContent">
                                 <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                     <!-- single creator -->

                                 </div>
                                 <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                     <!-- single -->
                                     <div class="rn-pd-bd-wrapper">
                                         <div class="top-seller-inner-one">
                                             <!-- <p class="disc">Lorem ipsum dolor, sit amet consectetur adipisicing
                                                    elit. Doloribus debitis nemo deserunt.</p> -->
                                             <h6 class="name-title">
                                                 Owner
                                             </h6>
                                             <div class="top-seller-wrapper">
                                                 <div class="thumbnail">
                                                     <a href="#"><img src="{{url('assets/images/client/client-1.png')}}" alt="Nft_Profile"></a>
                                                 </div>
                                                 <div class="top-seller-content">
                                                     <a href="#">
                                                         <h6 class="name"><?php
                                                                            $user = App\Models\User::where('id', $collection->owner)->first();
                                                                            echo $user->name;

                                                                            ?></h6>
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- single -->
                                         <div class="rn-pd-sm-property-wrapper">
                                             <h6 class="pd-property-title">
                                                 Property
                                             </h6>
                                             <div class="property-wrapper">
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">HYPE TYPE</span>
                                                     <span class="color-white value">CALM AF (STILL)</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">BASTARDNESS</span>
                                                     <span class="color-white value">C00LIO BASTARD</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">TYPE</span>
                                                     <span class="color-white value">APE</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">ASTARDNESS</span>
                                                     <span class="color-white value">BASTARD</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">BAD HABIT(S)</span>
                                                     <span class="color-white value">PIPE</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">BID</span>
                                                     <span class="color-white value">BPEYti</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">ASTRAGENAKAR</span>
                                                     <span class="color-white value">BASTARD</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">CITY</span>
                                                     <span class="color-white value">TOKYO</span>
                                                 </div>
                                                 <!-- single property End -->
                                             </div>
                                         </div>
                                         <!-- single -->
                                         <!-- single -->
                                         <div class="rn-pd-sm-property-wrapper">
                                             <h6 class="pd-property-title">
                                                 Catagory
                                             </h6>
                                             <div class="catagory-wrapper">
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">ZARY</span>
                                                     <span class="color-white value">APP</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">SOMALIAN</span>
                                                     <span class="color-white value">TRIBUTE</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">TUNA</span>
                                                     <span class="color-white value">PIPE</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">BID</span>
                                                     <span class="color-white value">BPEYti</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">ASTRAGENAKAR</span>
                                                     <span class="color-white value">BASTARD</span>
                                                 </div>
                                                 <!-- single property End -->
                                                 <!-- single property -->
                                                 <div class="pd-property-inner">
                                                     <span class="color-body type">CITY</span>
                                                     <span class="color-white value">TOKYO</span>
                                                 </div>
                                                 <!-- single property End -->
                                             </div>
                                         </div>
                                         <!-- single -->
                                     </div>
                                     <!-- single -->
                                 </div>
                                 <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                     <!-- single creator -->

                                     <!-- single creator -->
                                 </div>
                             </div>
                         </div>
                         @if($collection->status==0 && Auth::user()->id==$collection->owner)
                         <div class="place-bet-area">

                             <!-- <a class="btn btn-primary-alta mt--30" href="#">Place a Bid</a> -->
                             
                             <button type="button" class="btn btn-primary-alta mt--30" data-bs-toggle="modal" data-bs-target="#exampleModal">Sell nft</button>
                             <br>
                             <button class="btn btn-primary-alta mt--30">Share

                             <i class="far fa-share-square"></i>
                             </button>
                             <br>
                           

                         </div>
                         <style>
                             .modal-backdrop {
                                 background-color: black;
                             }
                         </style>

                         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <form action="{{url('startselling')}}" method="post">
                                 <div class="modal-dialog">

                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Sell your nft</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">

                                             @csrf
                                             <input type="hidden" value="{{$collection->id}}" name="nftid">
                                             <div class="mb-3">
                                                 <label for="recipient-name" class="col-form-label">Price:</label>
                                                 <input readonly type="text" name="price" class="form-control" id="recipient-name" value="{{$collection->price}}">
                                             </div>
                                             <div class="mb-3">
                                                 <label for="message-text" class="col-form-label">Duration: This will appear in the timer on the Marketplace</label>
                                                 <input type="date" name="duration" class="form-control" id="message-text" value="">
                                             </div>

                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                             <button type="submit" class="btn btn-primary">Start selling</button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                             @else
                             <div class="place-bet-area">
                                 <!-- <a class="btn btn-primary-alta mt--30" href="#">Place a Bid</a> -->
                                 <button type="button" class="btn btn-primary-alta mt--30" data-bs-toggle="modal" data-bs-target="#placebidModal">Start selling</button>
                             </div>
                             @endif
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>


     <!-- modal section -->

     @endsection
     <!-- End product details area -->