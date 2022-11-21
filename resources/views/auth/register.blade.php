 
 @extends('layouts.main')
 
 @section('content')


    <!-- register form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-6 col-md-8 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>Sign up to {{env('APP_NAME')}}</h4>
                        <form method="POST" action="{{route('register')}}">
                            @csrf
                            <div class="mb-5">
                                <label for="sastName" class="form-label">Username</label>
                                <input type="text" style="color:white" id="sastName" name="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" style="color:white" id="exampleInputEmail1" name="email" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Referal code</label>
                                <input type="text" style="color:white" id="exampleInputEmail1" name="ref" class="form-control @error('email') is-invalid @enderror">
                                @error('ref')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="newPassword" class="form-label">Create Password</label>
                                <input type="password" style="color:white" id="newPassword" name="password" class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-5">
                                <label for="exampleInputPassword1" class="form-label">Renter Password</label>
                                <input type="password" style="color:white" id="exampleInputPassword1" name="password_confirmation">
                            </div>
                            <div class="mb-5 rn-check-box">
                                <input type="checkbox" style="color:white" class="rn-check-box-input" id="exampleCheck1">
                                <label class="rn-check-box-label" for="exampleCheck1">Allow to all terms &
                                    condition</label>
                            </div>
                            <button type="submit" class="btn btn-primary mr--15">Sign Up</button>
                            <a href="/login" class="btn btn-primary-alta">Log In</a>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <br><br>

    @endsection
    