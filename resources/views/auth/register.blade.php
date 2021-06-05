@extends('web.layouts.app')

@section('content')
    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                 <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>
    <div class="container login" id="container" style="min-height: 600px">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('register',[$role]) }}">
                {{ csrf_field() }}
                <h2>Create Account</h2>
                <input id="name" placeholder="Name" type="text"  name="name" value="{{ old('name') }}" required autofocus />
               <span>{{ $errors->has('name') ? ' has-error' : '' }}</span>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->has('name') ? ' has-error' : '' }}</strong>
                    </span>
                @endif

                <input id="email" placeholder="Email" type="email"  name="email" value="{{ old('email') }}" required/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif

                        <input id="address" placeholder="Address" type="text"  name="address" value="{{ old('address') }}" required>
                        <span>{{ $errors->has('address') ? ' has-error' : '' }}</span>

                        <input id="phone_number"placeholder="Phone Number"  pattern="{10}"  type="number"  name="phone_number" value="{{ old('phone_number') }}" required/>
                        <span>{{ $errors->has('phone_number') ? ' has-error' : '' }}</span>

                        <input id="password" placeholder="Password" type="password"  name="password" required/>
                        @if ($errors->has('password'))
                            <p class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                          </p>
                        @endif

                        <input id="password-confirm" placeholder="Confirm Password" type="password"  name="password_confirmation" required>
                                <button type="submit">Register</button>
            </form>
        </div>


        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <div class="logo-holder">
                        <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" width="140px" height="140px" class="mt-4">
                    </div>
                    <h2 style="text-transform: uppercase; font-weight: bold; font-size: 33px;">Welcome  To <br> House of Books</h2>
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
