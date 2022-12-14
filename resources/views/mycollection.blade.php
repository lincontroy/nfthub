@extends('layouts.main')

@section('content')




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
            <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-5 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="product-style-one no-overlay">
                    <div class="card-thumbnail">
                        <a href="{{url('nft')}}/{{$mycollection->ref}}"><img src="{{url('public/storage/nfts')}}/{{$mycollection->img}}" alt="NFT_portfolio"></a>
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
                        <div class="last-bid">USD {{$mycollection->price}}</div>
                        <div class="react-area">
                        <img src="{{url('public/nfts/usdt.png')}}" height="20" width="20">
                            <span class="number">{{$mycollection->likes}}</span>
                        </div>
                    </div>
                </div>
            </div>
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
@endsection