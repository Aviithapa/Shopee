@switch($authUser->mainRole()->name)
@case('administrator')

    <!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title> {{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="Abhishek Thapa" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('admin.layout.style')
    @stack('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
@include('admin.layout.header')
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid" style="background: black">
    @include('admin.sidebar.administrator')


<!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="content bg-dark">
            @yield('content')
        </div>
    </div>
</div>
<!-- END CONTAINER -->
@include('admin.layout.script')
@include('admin.layout.notification')
@stack('scripts')
</body>
</html>

@break
@case("customer")
@include('web.layouts.app')
@include('admin.layout.script')
@include('admin.layout.notification')
@stack('scripts')
@break

@case("finance")

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title> {{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="Abhishek Thapa" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('admin.layout.style')
    @stack('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="">
@include('admin.layout.header')
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid" style="background: black">
@include('admin.sidebar.finance')


<!-- BEGIN PAGE CONTAINER-->
    <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="content bg-dark">
            @yield('content')
        </div>
    </div>
</div>
<!-- END CONTAINER -->
@include('admin.layout.script')
@include('admin.layout.notification')
@stack('scripts')
</body>
</html>

@break
@default
@include('admin.sidebar.default')
@endswitch

