@extends('layouts.main')
 
@section('content')


   <!-- login form -->
   <div class="login-area message-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                <div class="form-wrapper-one registration-area">
                        <h3 class="mb--30">Instructions</h3>
                        <!-- <marquee>Please make sure you transfer assets to that address before clicking the "I have tranfered" Button</marquee> -->
                        <p>1.Ensure you have the desired amount of usdt in your Binance wallet.</p>
                        <p>2.Copy the wallet address on the right and send the usdt to it using Tron network. Ensure the desired amount is the value of usdt after gas fee.</p>
                        <p>3.Complete the transfer in your exchange and paste the transaction hash.</p>
                        <p>4.Click the complete transfer button on success transfer of assets.</p>
                    </div>
                   
                </div>

                <div class="col-lg-6" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                
                    <div class="form-wrapper-one registration-area">
                        <h3 class="mb--30">Deposit usdt</h3>
                        <marquee>Please read the instructions before completing the transfer</marquee>
                        <form class=""  method="POST" action="{{url('deposit/post')}}">
                            @csrf
                            <div class="mb-5">
                                <label for="contact-name" class="form-label">Wallet address (Tron network)</label>
                                <input name="contact-name" id="contact-name" value="{{env('USDT_ADDRESS')}}" type="text" readonly>          
                            </div>
                            <div class="mb-5">
                                <label for="contact-email" class="form-label">Enter amount in usdt</label>
                                <input id="contact-email" type="text" name="amount" required>
                            </div>

                            <div class="mb-5">
                                <label for="contact-email" class="form-label">Enter transaction hash</label>
                                <input id="contact-email" type="text" name="hash" required>
                            </div>
                           
                            
                            
                            <button name="submit" type="submit" class="btn btn-primary">I have transfered</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- login form end -->

@endsection