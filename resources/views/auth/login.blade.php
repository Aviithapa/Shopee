@extends('web.layouts.app')

@section('content')

{{--    <link href="{{asset('asset/css/headerstyle.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{asset('assets/css/register.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <!-- END PLUGIN CSS -->--}}
{{--    <!-- BEGIN CORE CSS FRAMEWORK -->--}}
{{--    <link href="{{asset('webarch/css/webarch.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <!-- END CORE CSS FRAMEWORK -->--}}
{{--    <style>--}}
{{--        .single-colored-widget .content-wrapper.yellow {--}}
{{--            background-color: #f3c319;--}}
{{--        }--}}

{{--        .single-colored-widget .content-wrapper.yellow p {--}}
{{--            color: #835819;--}}
{{--        }--}}

{{--        .text-danger {--}}
{{--            color: red;--}}
{{--        }--}}
{{--        .container{--}}
{{--            color: #0AA5E2;--}}
{{--        }--}}
{{--    </style>--}}
{{--    <body style="background: #fff">--}}
<style>
.block {
display: block;
width: 100%;
border: none;
    margin-top: 10px;
background-color: orangered;
color: white;
padding: 14px 28px;
font-size: 16px;
cursor: pointer;
text-align: center;
}

.block:hover {
background-color: greenyellow;
color: black;
}
</style>

    @stack('styles')
    <!--main area-->
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="#" class="link">home</a></li>
                    <li class="item-link"><span>login</span></li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
                    <div class=" main-content-area">
                        <div class="wrap-login-item ">
                            <div class="login-form form-item form-stl">
                                <form name="frm-login" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}
                                    <fieldset class="wrap-title">
                                        <h3 class="form-title">Log in to your account</h3>
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-uname">Email Address:</label>
                                        <input type="text"  id="login_username" name="user_name" value="{{ old('user_name')}}" placeholder="Type your email address" required>
                                        @if ($errors->has('user_name'))
                                            <span class="help-block text-danger">
                                             <strong>{{ $errors->first('user_name') }}</strong>
                                            </span>
                                        @endif
                                    </fieldset>
                                    <fieldset class="wrap-input">
                                        <label for="frm-login-pass">Password:</label>
                                        <input type="password" id="login_pass" name="password" placeholder="************" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block text-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label class="remember-field">
                                            <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                                        </label>
                                        <a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
                                    </fieldset>
                                    <input type="submit" class="block"  value="Login" name="submit">

                                    <fieldset class="wrap-input">
                                        <a class="link-function left-position" href="{{url("register/customer")}}" title="Sign up Now?">Sign Up Now</a>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div><!--end main products area-->
                </div>
            </div><!--end row-->

        </div><!--end container-->

    </main>
{{--    <!--main area-->--}}
{{--    <div class="container">--}}
{{--        <div class="row login-container animated fadeInUp">--}}
{{--            @if(session()->has('success'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    {{ session()->get('success') }}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <div class="col-md-7 col-md-offset-2 tiles  no-padding">--}}
{{--                <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">--}}
{{--                    <h2 class="normal">--}}
{{--                        Sign in to {{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}}--}}
{{--                    </h2>--}}
{{--                </div>--}}
{{--                <div class="tiles  p-t-20 p-b-20 no-margin text-black tab-content">--}}
{{--                    <div>--}}
{{--                        <form class="animated fadeIn validate" method="POST" action="{{ route('login') }}">--}}
{{--                            {{ csrf_field() }}--}}
{{--                            @if(isset($requestData['school_program_id']))--}}
{{--                            <input type="hidden" name="school_program_id" value="{{$requestData['school_program_id']}}">--}}
{{--                            @endif--}}
{{--                            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">--}}
{{--                                <div class="col-md-6 col-sm-6">--}}
{{--                                    <input class="form-control" id="login_username" name="user_name" placeholder="Email"--}}
{{--                                           type="text" value="{{ old('user_name') }}" required autofocus>--}}
{{--                                    @if ($errors->has('user_name'))--}}
{{--                                        <span class="help-block text-danger">--}}
{{--                                        <strong>{{ $errors->first('user_name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 col-sm-6">--}}
{{--                                    <input class="form-control" id="login_pass" name="password" placeholder="Password"--}}
{{--                                           type="password" required>--}}
{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="help-block text-danger">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">--}}
{{--                                <div class="control-group col-md-12 col-lg-12">--}}
{{--                                    <div class="checkbox checkbox check-success">--}}
{{--                                        <a href="{{ route('password.request') }}">Forgot password!</a>&nbsp;&nbsp;--}}
{{--                                        <input id="checkbox1" type="checkbox"--}}
{{--                                               name="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                        <label for="checkbox1">Keep me reminded</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-12 col-md-12">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        Login--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">--}}
{{--                    <h2 class="normal">--}}
{{--                        New to {{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}} ?--}}
{{--                    </h2>--}}
{{--                    <p class="p-b-20">--}}
{{--                        <a href="#">Sign up Now! for</a> {{ config('app.site_name') }} accounts, it's free..--}}
{{--                    </p>--}}
{{--                    <a href="{{url("register/customer")}}" class="btn btn-primary" >--}}
{{--                         Register Now--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    @include('partials.modal.register')

    @push('scripts')
        @if(request()->has('register'))
            <script>
                $('#js-register-button').trigger('click');
            </script>
        @endif


        <!-- END CONTAINER -->
        <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
        <!-- BEGIN JS DEPENDECENCIES-->
        <script src="{{asset('assets/plugins/jquery/jquery-1.11.3.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-block-ui/jqueryblockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/plugins/bootstrap-select2/select2.min.js')}}" type="text/javascript"></script>
        <!-- END CORE JS DEPENDECENCIES-->
        <!-- BEGIN CORE TEMPLATE JS -->
        <script src="{{asset('webarch/js/webarch.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/js/chat.js')}}" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS -->
        @stack('scripts')
    @endpush

@endsection
