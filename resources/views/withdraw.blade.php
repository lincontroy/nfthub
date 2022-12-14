@extends('layouts.main')
 
@section('content')


   <!-- login form -->
   <div class="login-area message-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                    <div class="form-wrapper-one registration-area">
                        <h3 class="mb--30">Withdraw usdt</h3>
                        <!-- <marquee>Please make sure you transfer assets to that address before clicking the "I have tranfered" Button</marquee> -->
                        <form class=""  method="POST" action="{{url('withdraw/post')}}">
                            @csrf
                            <div class="mb-5">
                                <label for="contact-name" class="form-label">Please enter a wallet address to send funds to</label>
                                
                                <input name="wallet" id="contact-name" value="" type="text" >
                                
                            </div>
                            <div class="mb-5">
                                <label for="contact-email" class="form-label">Enter amount in usdt to withdraw</label>
                                <input id="contact-email" type="text" name="amount" required>
                            </div>
                           
                            
                            
                            <button name="submit" type="submit" class="btn btn-primary">Withdraw</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login form end -->

@endsection