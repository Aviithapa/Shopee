<!-- Header - start -->

@include('web.layouts.style')
<header class="header">

    <!-- Topbar - start -->
    <div class="header_top" style="background-color:orangered; color:white;">
        <div class="container-fluid">
            <ul class="contactinfo nav nav-pills">
                <li>
                    <i class='fa fa-phone'></i> 9867739191
                </li>
                <li>
                    <i class="fa fa-envelope"></i> abhishekthapa115@gmail.com
                </li>
            </ul>
            <!-- Social links -->
            <ul class="social-icons nav navbar-nav">
                <li>
                    <a href="http://facebook.com" rel="nofollow" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="http://google.com" rel="nofollow" target="_blank">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com" rel="nofollow" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://vk.com" rel="nofollow" target="_blank">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="http://instagram.com" rel="nofollow" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>		</div>
    </div>
    <!-- Topbar - end -->

    <!-- Logo, Shop-menu - start -->
    <div class="header-middle">
        <div class="container header-middle-cont">
            <div class="toplogo">
                <a href="index.html">
                    <img src="img/logo.png" alt="Shopee">
                </a>
            </div>
            <div class="shop-menu">
                <ul>

                    <li>
                        <a href="wishlist.html">
                            <i class="fa fa-heart fa-lg" alt="wishlist"></i>
                            (<span id="topbar-favorites">1</span>)
                        </a>
                    </li>

                    <li>
                        <a href="compare.html">
                            <i class="fa fa-bar-chart fa-lg"></i>
                            <span class="shop-menu-ttl"></span>
                        </a>
                    </li>
                    <li>
                        <div class="h-cart">
                            <a href="{{url('cart')}}">
                                <i class="fa fa-shopping-cart fa-lg"></i>
                                <span class="availability-bubble online"></span>
                                (<b class="text-danger">{{getCartAmount()}}</b>)
                            </a>
                        </div>
                    </li>
                    @if($authUser)
                        <li>
                            <div class="chat-toggler sm">
                                <div class="profile-pic">
                                    <img src="{{$authUser->getImage()}}"data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="35" height="35" alt="wishlist"/>
                                    <span class="availability-bubble online"></span>
                                </div>
                            </div>
                        </li>

                        <li class="quicklinks">
                            <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                                <i class="fa fa-reorder"></i>
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <li>
                                    <a href="{{route('dashboard.users.profile.get')}}">Update profile</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="material-icons">power_settings_new</i>&nbsp; Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>


                    @else
                        <li class="topauth">
                            <a href="{{url("register/customer")}}">
                                <i class="fa fa-lock fa-lg"></i>
                                <span class="shop-menu-ttl">Registration</span>
                            </a>
                            <a href="{{url("login")}}">
                                <span class="shop-menu-ttl">Login</span>
                            </a>
                        </li>
                    @endif



                </ul>
            </div>
        </div>
    </div>
    <!-- Logo, Shop-menu - end -->

    <!-- Topmenu - start -->
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">

                <!-- Catalog menu - start -->
                <div class="topcatalog">
                    <a class="topcatalog-btn" href="#">DashBoard</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="{{route('dashboard.site-settings.index')}}">
                                Site Setting
                            </a>
                        <li>
                        <li>
                            <a href="#">
                                CMS
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="{{route('dashboard.banners.index')}}">
                                        Banners Management
                                    </a>
                                </li>
                                <li><a href="{{route('dashboard.posts.index')}}">Content Management</a></li>
                                <li><a href="{{route('dashboard.events.index')}}">Events Management</a></li>
                                <li><a href="{{route('dashboard.pages.index')}}">Pages Management</a></li>
                                <li><a href="{{route('dashboard.services.index')}}">Services Management</a></li>
                                <li><a href="{{route('dashboard.testimonials.index')}}">Testimonials Management</a></li>
                                <li><a href="{{route('dashboard.news.index')}}">Blogs Management</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('dashboard.users.index')}}">
                                <i class="fa fa-users"></i>
                                <span class="title">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Auth Setting
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li><a href="{{route('dashboard.roles.index')}}">Role</a></li>
                                <li><a href="{{route('dashboard.permissions.index')}}">Permission</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Catalog menu - end -->

                <!-- Main menu - start -->
                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <a href="{{url('/')}}" class="active">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{url('catalog')}}">
                            Catalog
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('dashboard.products.index')}}">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                    </li>
                    <li><a href="{{route('dashboard.category.index')}}">Category</a></li>
                    <li>
                        <a href="{{url('blog')}}">
                            Blog
                        </a>
                    </li>
                    @if($authUser)
                        <li>
                            <a href="{{route('dashboard.users.profile.get')}}">
                                {{$authUser->name}} Account
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="material-icons">power_settings_new</i>&nbsp; Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->






{{--<!-- BEGIN HEADER -->--}}
{{--<div class="header navbar navbar-inverse ">--}}
{{--    <!-- BEGIN TOP NAVIGATION BAR -->--}}
{{--    <div class="navbar-inner">--}}
{{--        <div class="header-seperation">--}}
{{--            <ul class="nav pull-left notifcation-center visible-xs visible-sm">--}}
{{--                <li class="dropdown">--}}
{{--                    <a href="#main-menu" data-webarch="toggle-left-side">--}}
{{--                        <i class="material-icons">menu</i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <!-- BEGIN LOGO -->--}}
{{--            <a href="{{route('dashboard.index')}}">--}}
{{--                <h1 class="text-center"> {{ config('app.site_name') }}</h1>--}}
{{--                --}}{{--<img src="{{asset('assets/img/logo-b.png')}}" class="logo" alt="" data-src="{{asset('assets/img/logo-b.png')}}" data-src-retina="{{asset('assets/img/logo-b2x.png')}}" width="106" height="21" />--}}
{{--            </a>--}}
{{--            <!-- END LOGO -->--}}
{{--        </div>--}}
{{--        <!-- END RESPONSIVE MENU TOGGLER -->--}}
{{--        <div class="header-quick-nav">--}}
{{--            <!-- BEGIN TOP NAVIGATION MENU -->--}}
{{--            <div class="pull-left">--}}
{{--                <ul class="nav quick-section">--}}
{{--                    <li class="quicklinks">--}}
{{--                        <a href="javascript:void(0)" class="" id="layout-condensed-toggle">--}}
{{--                            <i class="material-icons">menu</i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="nav quick-section">--}}
{{--                    <li class="quicklinks  m-r-10">--}}
{{--                        <a href="javascript:window.location.reload();" class="">--}}
{{--                            <i class="material-icons">refresh</i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--             <!-- END TOP NAVIGATION MENU -->--}}
{{--            <!-- BEGIN CHAT TOGGLER -->--}}
{{--            <div class="pull-right">--}}
{{--                <div class="chat-toggler sm">--}}
{{--                    <div class="profile-pic">--}}
{{--                        <img src="{{$authUser->getImage()}}" alt="" data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="35" height="35" />--}}
{{--                        <div class="availability-bubble online"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <ul class="nav quick-section ">--}}
{{--                    <li class="quicklinks">--}}
{{--                        <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">--}}
{{--                            <i class="material-icons">tune</i>--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">--}}
{{--                            <li>--}}
{{--                                <a href="{{route('dashboard.users.profile.get')}}">Update profile</a>--}}
{{--                            </li>--}}
{{--                            <li class="divider"></li>--}}
{{--                            <li>--}}
{{--                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                    <i class="material-icons">power_settings_new</i>&nbsp; Logout--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- END CHAT TOGGLER -->--}}
{{--        </div>--}}
{{--        <!-- END TOP NAVIGATION MENU -->--}}
{{--    </div>--}}
{{--    <!-- END TOP NAVIGATION BAR -->--}}
{{--</div>--}}
{{--<!-- END HEADER -->--}}


