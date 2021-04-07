<!DOCTYPE html>
<html >
<head>
    <link rel = "icon" href ="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" type = "image/x-icon">
    <title>{{getSiteSetting('site_title') != null? getSiteSetting('site_title'): ''}} | {{ isset($pageContent->meta_link)?$pageContent->meta_link:""}}</title>
    <meta charset="utf-8">
    <meta name="description" content="`{{isset($pageContent->meta_description)?$pageContent->meta_description:""}}`">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('web.layouts.style')
    @include('admin.layout.style')
    @stack('styles')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="" style="background: #f5f5f5">
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=386251685274332&autoLogAppEvents=1"></script>
@include('web.layouts.header')
<!-- BEGIN CONTAINER -->

<div class="body">
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="content bg-dark">
        @yield('content')
    </div>
</div>
<!-- END CONTAINER -->
@include('admin.layouts.footer')
<!-- BEGIN PAGE CONTAINER-->
@include('admin.layouts.script')
@stack('scripts')
</body>
</html>
