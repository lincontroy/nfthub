 
 @extends('layouts.main')
 
 @section('content')


    <!-- register form -->
    <div class="login-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="offset-2 col-lg-6 col-md-8 ml_md--0 ml_sm--0 col-sm-12">
                    <div class="form-wrapper-one registration-area">
                        <h4>Login to {{env('APP_NAME')}}</h4>
                        <form method="POST" action="{{url('login')}}">
                           @csrf
                           
                            <div class="mb-5">
                                <label for="exampleInputEmail1" name="email" class="form-label">Email address</label>
                                <input type="email" id="exampleInputEmail1" name="email">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="mb-5">
                                <label for="newPassword" name="password" class="form-label">Enter Password</label>
                                <input type="password" id="newPassword" name="password">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                            <button type="submit" class="btn btn-primary mr--15">Login</button>
                            <a href="/register" class="btn btn-primary-alta">Sign up</a>

                            <br><br>
                            <a href="/forgot-password" style="color:black">Forgot password</a>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <br><br>

    @endsection
    