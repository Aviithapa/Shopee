@extends('web.layouts.app')

@section('content')

    <div class="container login" id="container">

        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('register',[$role]) }}">
                {{ csrf_field() }}
                <h1>Create Account</h1>
                <input id="name" placeholder="Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus />
               <span>{{ $errors->has('name') ? ' has-error' : '' }}</span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->has('name') ? ' has-error' : '' }}</strong>
                    </span>
                @endif

                <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                <span>{{ $errors->has('email') ? ' has-error' : '' }}</span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                <input id="user_name" placeholder="User Name" type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" required autofocus>
                <span>{{ $errors->has('user_name') ? ' has-error' : '' }}</span>
                @if ($errors->has('user_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user_name') }}</strong>
                    </span>
                @endif

                <div class="row">
                    <div class="col-6" style="margin-right: 10px">
                        <input id="address" placeholder="Address" type="text" class="form-control" name="address" value="{{ old('address') }}" required>
                        <span>{{ $errors->has('address') ? ' has-error' : '' }}</span>
                    </div>
                    <div class="col-5">
                        <input id="phone_number"placeholder="Phone Number"  pattern="{10}"  type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}" required/>
                        <span>{{ $errors->has('phone_number') ? ' has-error' : '' }}</span>
                    </div>

                </div>

                <div class="row">
                    <div class="col-6"{{ $errors->has('password') ? ' has-error' : '' }} style="margin-right: 10px">
                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required/>
                        @if ($errors->has('password'))
                            <p class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                          </p>
                        @endif
                    </div>
                    <div class="col-5">
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                    </div>

                </div>

                <button type="submit">Register</button>
            </form>
        </div>


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <div class="logo-holder">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">
                    </div>
                    <h1 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome  To <br> House of Books</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <a href="{{url("login")}}"><button class="ghost" id="signIn">Sign In</button></a>
                </div>

            </div>
        </div>
    </div>

@endsection
@push('scripts')

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    @endpush
