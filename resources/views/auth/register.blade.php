@extends('web.layouts.app')

@section('content')

    <div class="container login" id="container">

        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('register',[$role]) }}">
                {{ csrf_field() }}
                <h1>Create Account</h1>
                <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->has('name') ? ' has-error' : '' }}</strong>
                                    </span>
                @endif

                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
                <div class="row">
                    <div class="col-6" style="margin-right: 10px">
                        <input id="address" placeholder="Address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                    </div>
                    <div class="col-5">
                        <input id="phone_number"placeholder="Phone Number"  pattern="{10}"  type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required/>
                    </div>

                </div>

                <input id="password" placeholder="Password" type="password" class="form-control" name="password" required/>
                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                <button type="submit">Register</button>
            </form>
        </div>
{{--        <div class="form-container sign-up-container">--}}
{{--            <form method="POST" action="{{ route('login') }}">--}}
{{--                {{ csrf_field() }}--}}
{{--                <h1>Sign in</h1>--}}
{{--                <div class="social-container">--}}
{{--                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>--}}
{{--                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                </div>--}}
{{--                <span>or use your account</span>--}}
{{--                <input type="email"  id="login_username" name="user_name" value="{{ old('user_name')}}" placeholder="Email" required/>--}}
{{--                @if ($errors->has('user_name'))--}}
{{--                    <span class="help-block text-danger">--}}
{{--                                             <strong>{{ $errors->first('user_name') }}</strong>--}}
{{--                                            </span>--}}
{{--                @endif--}}
{{--                <input type="password" id="login_pass" name="password" required placeholder="Password" />--}}

{{--                @if ($errors->has('password'))--}}
{{--                    <span class="help-block text-danger">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                @endif--}}
{{--                <a href="#" style="color: black !important; margin-left: 180px;  margin-bottom: 10px;">Forgot your password?</a>--}}
{{--                <button type="submit" class="block"  value="Login" name="submit">Sign In</button>--}}
{{--            </form>--}}
{{--        </div>--}}

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <div class="logo-holder">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">
                    </div>
                    <h1 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome  To <br> House of Books</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
{{--                <div class="overlay-panel overlay-right">--}}
{{--                    <div class="logo-holder">--}}
{{--                    <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">--}}
{{--                    </div>--}}
{{--                    <h1 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome Back To <br> House of Books</h1>--}}
{{--                    <p style="font-size: 20px;">Enter your personal details and start shopping now</p>--}}
{{--                    <p style="font-size: 20px;">Not a member yet? </p>--}}

{{--                    <button class="ghost" id="signUp">Sign Up</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        const signUpButton = document.getElementById('signUp');--}}
{{--        const signInButton = document.getElementById('signIn');--}}
{{--        const container = document.getElementById('container');--}}

{{--        signUpButton.addEventListener('click', () => {--}}
{{--            container.classList.add("right-panel-active");--}}
{{--        });--}}

{{--        signInButton.addEventListener('click', () => {--}}
{{--            container.classList.remove("right-panel-active");--}}
{{--        });--}}
{{--    </script>--}}

{{--    <link href="{{asset('assets/css/register.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <!-- END PLUGIN CSS -->--}}
{{--    <!-- BEGIN CORE CSS FRAMEWORK -->--}}
{{--    <link href="{{asset('webarch/css/webarch.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <!-- END CORE CSS FRAMEWORK -->--}}
{{--    <body style="background: #fff">--}}
{{--    <div class="container ">--}}
{{--    <div class="row login-container animated fadeInUp" style="margin-top: 5%;">--}}
{{--        <div class="col-md-7 col-md-offset-2 tiles white no-padding">--}}
{{--            <button onclick="goBack()" style="font-size: 25px;" class="close">&bigotimes;</button>--}}


{{--            <div class="tiles grey p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">--}}
{{--                <h2 class="normal">--}}
{{--                    Register  as Event Organizer--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <div class="tiles grey p-t-20 p-b-20 no-margin text-black tab-content">--}}
{{--                <div>--}}
{{--                    <form class="animated fadeIn" method="POST" action="{{ route('register',[$role]) }}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" >--}}
{{--                            <label for="name" class="col-md-4 control-label">Name</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}" >--}}
{{--                            <label for="user_name" class="col-md-4 control-label">User Name</label>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required autofocus>--}}

{{--                                @if ($errors->has('user_name'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('user_name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">Phone Number</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone_number" pattern="{10}"  type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required>--}}

{{--                                @if ($errors->has('phone_number'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('phone_number') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">--}}
{{--                            <label for="mobile_number" class="col-md-4 control-label">Mobile Number (Optional)</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="mobile_number" type="number" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" >--}}

{{--                                @if ($errors->has('mobile_number'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('mobile_number') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">--}}
{{--                            <label for="address" class="col-md-4 control-label">Address</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>--}}

{{--                                @if ($errors->has('address'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('address') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}





{{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                            <label for="password" class="col-md-4 control-label">Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group" >--}}
{{--                            <div class="col-md-6 col-md-offset-4" style="padding-top: 30px">--}}
{{--                                  <button type="submit" class="btn btn-primary  btn-lg">--}}
{{--                                        Register Now--}}
{{--                                    </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
@push('scripts')

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    @endpush
