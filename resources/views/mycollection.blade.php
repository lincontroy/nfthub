@extends('layouts.main')

@section('content')



<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);

  

    #u_0_v {
        width: auto;
        margin: 0 auto;
    }

    .lightui1 {
        border: 1px solid;
        border-color: #bdbdbd;
        border-radius: 2px;
        padding: 20px;
        background: #13131d;
    }

    .lightui1-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #d8d8d8;
        background-image: linear-gradient(to right, #d8d8d8 0%, #bdbdbd 20%, #d8d8d8 40%, #d8d8d8 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 200px;
        position: relative
    }

    .lightui1-shimmer div {
        background: #13131d;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .lightui1b-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #f0f0f0;
        background-image: linear-gradient(to right, #f0f0f0 0%, #d8d8d8 20%, #f0f0f0 40%, #f0f0f0 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 200px;
        position: relative
    }

    .lightui1b-shimmer div {
        background: #ffffff;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .lightui2 {
        border: 1px solid;
        border-color: #bdbdbd;
        border-radius: 2px;
        padding: 20px;
        background: #ffffff;
    }

    .lightui2-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #d8d8d8;
        background-image: linear-gradient(to right, #d8d8d8 0%, #bdbdbd 20%, #d8d8d8 40%, #d8d8d8 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 200px;
        position: relative
    }

    .lightui2-shimmer div {
        background: #ffffff;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .lightui2b-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #bdbdbd;
        background-image: linear-gradient(to right, #bdbdbd 0%, #999999 20%, #bdbdbd 40%, #bdbdbd 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 104px;
        position: relative
    }

    .lightui2b-shimmer div {
        background: #ffffff;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }



    .darkui1 {
        border: 1px solid;
        border-color: #656871;
        border-radius: 2px;
        padding: 20px;
        background: #414247;
    }

    .darkui1-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #656871;
        background-image: linear-gradient(to right, #656871 0%, #888b94 20%, #656871 40%, #656871 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 104px;
        position: relative
    }

    .darkui1-shimmer div {
        background: #414247;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .darkui2 {
        border: 1px solid;
        border-color: #656871;
        border-radius: 2px;
        padding: 20px;
        background: #313236;
    }

    .darkui2-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #50535a;
        background-image: linear-gradient(to right, #50535a 0%, #656871 20%, #50535a 40%, #50535a 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 104px;
        position: relative
    }

    .darkui2-shimmer div {
        background: #313236;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .highcontrast1 {
        border: 1px solid;
        border-color: #5c5c5c;
        border-radius: 2px;
        padding: 20px;
        background: #d8d8d8;
    }

    .highcontrast1-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #999999;
        background-image: linear-gradient(to right, #999999 0%, #737373 20%, #999999 40%, #999999 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 104px;
        position: relative
    }

    .highcontrast1-shimmer div {
        background: #d8d8d8;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }


    .highcontrast2 {
        border: 1px solid;
        border-color: #5c5c5c;
        border-radius: 2px;
        padding: 20px;
        background: #bdbdbd;
    }

    .highcontrast2-shimmer {
        -webkit-animation-duration: 1s;
        -webkit-animation-fill-mode: forwards;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-name: placeHolderShimmer;
        -webkit-animation-timing-function: linear;
        background: #737373;
        background-image: linear-gradient(to right, #737373 0%, #454545 20%, #737373 40%, #737373 100%);
        background-repeat: no-repeat;
        background-size: 800px 104px;
        height: 104px;
        position: relative
    }

    .highcontrast2-shimmer div {
        background: #bdbdbd;
        height: 6px;
        left: 0;
        position: absolute;
        right: 0
    }



    ._2iwo {
        height: 200px;
        padding: 12px
    }

    .__z8 {
        height: 150px;
        padding: 12px
    }

    div._2iwr {
        height: 40px;
        left: 40px;
        right: auto;
        top: 0;
        width: 8px;
    }

    div._2iws {
        height: 8px;
        left: 48px;
        top: 0
    }

    div._2iwt {
        left: 136px;
        top: 8px
    }

    div._2iwu {
        height: 12px;
        left: 48px;
        top: 14px
    }

    div._2iwv {
        left: 100px;
        top: 26px
    }

    div._2iww {
        height: 10px;
        left: 48px;
        top: 32px
    }

    div._2iwx {
        height: 20px;
        top: 40px
    }

    div._2iwy {
        left: 410px;
        top: 60px
    }

    div._2iwz {
        height: 13px;
        top: 66px
    }

    div._2iw- {
        left: 440px;
        top: 79px
    }

    div._2iw_ {
        height: 13px;
        top: 85px
    }

    div._2ix0 {
        left: 178px;
        top: 98px
    }

    @-webkit-keyframes placeHolderShimmer {
        0% {
            background-position: -468px 0
        }

        100% {
            background-position: 468px 0
        }
    }

    @-webkit-keyframes prideShimmer {
        from {
            background-position: top left
        }

        to {
            background-position: top right
        }
    }

    ._4-u5 {
        background-color: #ffffff
    }

    ._4-u7 {
        background-color: #ffffff
    }

    ._57d8 {
        background-color: #ffffff
    }

    ._4-u8 {
        background-color: #ffffff
    }
</style>


<div class="rn-new-items rn-section-gapTop">
    <div class="container">
        <div class="row mb--50 align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">My Collection</h3>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                    <a class="btn-transparent" href="#">Balance: USD @if(Auth::user()){{Auth::user()->wallet}}@else<p>0</p>@endif</a>
                </div>
            </div>
        </div>
        <div class="row g-5">

            @if($mycollections->count()>0)

     

            @foreach($mycollections as $mycollection)
            <div data-sal="slide-up" id="mp" style="display:none" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-style-one no-overlay">
                    <div class="card-thumbnail">
                        <a href="{{url('nfts')}}/{{$mycollection->ref}}"><img src="{{url('public/nfts')}}/{{$mycollection->img}}" alt="NFT_portfolio"></a>
                    </div>
                    <div class="product-share-wrapper">
                        <div class="profile-share">
                            <a href="author.html" class="avatar" data-tooltip="Jone lee"><img src="assets/images/client/client-1.png" alt="Nft_Profile"></a>
                            <a href="author.html" class="avatar" data-tooltip="Jone Due"><img src="assets/images/client/client-2.png" alt="Nft_Profile"></a>
                            <a href="author.html" class="avatar" data-tooltip="Nisat Tara"><img src="assets/images/client/client-3.png" alt="Nft_Profile"></a>
                            <a class="more-author-text" href="#">9+ endorsement</a>
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
                    <a href="nft/{{$mycollection->ref}}"><span class="product-name">{{$mycollection->name}}</span></a>
                    <span class="latest-bid">Highest bid 1/20</span>
                    <div class="bid-react-area">
                        <div class="last-bid">USDT {{$mycollection->price}}</div>
                        <div class="react-area">
                            <img src="{{url('/public/nfts/usdt.png')}}" height="20" width="20">
                            <span class="number">{{$mycollection->likes}}</span>
                        </div>
                    </div>
                </div>
            </div>
            

            <script type="text/javascript">
                window.onload = function() {
                    document.getElementById("u_0_v").style.display = 'none';
                    document.getElementById("mp").style.display = 'block';
                };
            </script>
            @endforeach
            @else
            <div data-sal="slide-up">
                <div class="product-style-one no-overlay">
                    <table class="table">
                        <thead>
                            <a href="{{url('/#mp')}}" class="btn btn-info">Buy nft</a>
                            <tr>

                                <th scope="col">Nft</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>No NFTS Available</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>

                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>




            @endif
        </div>
    </div>
</div>

<br>

<script type="text/javascript">
    window.onload = function(){
      document.getElementById("u_0_v").style.display='none';
      document.getElementById("mp").style.display='block';
    };

</script>
@endsection