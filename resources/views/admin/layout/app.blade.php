<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title> {{ config('app.site_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta content="" name="description"/>
    <meta content="Abhishek Thapa" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="">
@switch($authUser->mainRole()->name)
    @case('administrator')
    @include('admin.layout.admin')
    @break
    @case("customer")
    @include('admin.layouts.app')
    @break
    @case("donor")
    @include('admin.sidebar.donor')
    @break
    @default
    @include('admin.sidebar.default')
@endswitch



<!-- END CONTAINER -->
@include('admin.layout.script')
@include('admin.layout.notification')
@stack('scripts')
</body>
</html>
