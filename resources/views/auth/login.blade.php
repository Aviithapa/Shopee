@extends('web.layouts.app')

@section('content')


    <div class="container login" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register','customer') }}">
                {{ csrf_field() }}
                <h1>Create Account</h1>
                <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
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
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required/>
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}


                <input type="email"  id="login_username" name="user_name" value="{{ old('user_name')}}" placeholder="Email" required/>
                @if ($errors->has('user_name'))
                    <span class="help-block text-danger">
                                             <strong>{{ $errors->first('user_name') }}</strong>
                                            </span>
                @endif
                <input type="password" id="login_pass" name="password" required placeholder="Password" />

                @if ($errors->has('password'))
                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <a href="{{ route('password.request') }}" style="color: black !important; margin-left: 180px;  margin-bottom: 10px;">Forgot your password?</a>
                <button type="submit" class="block"  value="Login" name="submit">Sign In</button>

            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="logo-holder">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">
                    </div>
                    <h1 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome  To <br> House of Books</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <div class="logo-holder">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">
                    </div>
                    <h1 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome Back To <br> House of Books</h1>
                    <p style="font-size: 20px;">Enter your personal details and start shopping now</p>
                    <p style="font-size: 20px;">Not a member yet? </p>

                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

    @stack('styles')

    @include('partials.modal.register')

    @push('scripts')
        @if(request()->has('register'))
            <script>
                $('#js-register-button').trigger('click');
            </script>
        @endif


        @stack('scripts')
    @endpush

@endsection
