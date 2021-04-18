
<header>
    <div class="header">
        <div class="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <i class="fa fa-book" style="margin-right: 10px;"></i> <span style="margin-right: 20px;">Welcome to house of Books!!</span>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <img src="{{Auth::user()->getImage()}}" alt="#" style="width:20px; height:20px; border-radius: 50%;">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:#ff682c !important">
                                <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                        @else
                            <a href="{{url("login")}}"><button type="button" class="btn btn-primary btn-round-sm btn-sm float-right " >Login</button></a>
                        <a href="{{url("register/customer")}}"> <button type="button" class="btn btn-primary btn-round-sm btn-sm register">Register</button></a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-xs-2 col-md-2 logo mt-3" style="    max-width: 150px;" >
                    <img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" alt="House of Books" width="125" height="100">
                </div>
                <div class="col-lg-4 col-xs-4 col-md-4" style="margin-top: 32px;">
                    <form action="#" method="#" role="search">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search . . ." name="srch-term" id="ed-srch-term" type="text">
                            <div class="input-group-btn">
                                <button type="submit" id="searchbtn">search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-xs-2 col-md-2 social">
                    <div class="column">
                        <div class="column" style="
                        margin-top: 10px !important;
                        ">
                            <div class="column">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>Shankmul Ward no 31<br>Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="column"
                             style="
                            margin-top: 10px !important;
                            padding-left: 25px;">
                            <div class="column" >
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>{{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}} <br> +977-9742537210</p>
                            </div>
                        </div>
                        <div class="column" style="
                          margin-top: 10px !important;
                          padding-left: 23px;
                          padding-right: 0px;">
                            <div class="column" >
                                <i class="fas fa-envelope-open-text fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>info@houseofbooks.com.np <br>houseofbooksnepal@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="nav">
        <div class="container-fluid">
            <div class="topnav" id="myTopnav" style="margin-left:-13px !important;">
                <a href="{{url('/')}}" class="active">Home</a>
                <a href="{{url('about')}}">Who we are</a>
                <a href="{{url('catalog')}}">Books we deal with</a>
                <a href="{{url('secondhandbookcatalog')}}">Second hand books</a>
                <a href="{{url('contact')}}">Contact Us</a>

                <a href="#offers">Offers</a>
                <a href="{{url("cart")}}" style="position: absolute; right: 0;"><button class="btn btn-primary btn-round-sm btn-sm"><i class="fa fa-shopping-cart" style="margin-right: 10px;"></i>@if(\Illuminate\Support\Facades\Auth::user())
                            {{getCartAmount()}}
                        @else
                            0
                            @endif Cart</button></a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>


        </div>

    </div>
    <div class="bottom-nav">
    </div>
</header>





{{--<!-- Header - start -->--}}
{{--@include('admin.layout.style')--}}
{{--@include('web.layouts.style')--}}
{{--@include('admin.layout.script')--}}
{{--<header class="header">--}}
{{--<!--header-->--}}
{{--<header id="header" class="header header-style-1">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="topbar-menu-area">--}}
{{--                <div class="container">--}}
{{--                    <div class="topbar-menu left-menu">--}}
{{--                        <ul>--}}
{{--                            <li class="menu-item" >--}}
{{--                                <a title="{{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: {{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="topbar-menu right-menu">--}}
{{--                        <ul>--}}
{{--                            <style>--}}
{{--                                .profile-pic {--}}
{{--                                    display: inline-block;--}}
{{--                                    position: relative;--}}
{{--                                }--}}

{{--                                .profile-pic::after {--}}
{{--                                    content: '';--}}
{{--                                    display: block;--}}
{{--                                    position: absolute;--}}
{{--                                    bottom: 14.8%;--}}
{{--                                    right: 14.8%;--}}
{{--                                    width: 10px;--}}
{{--                                    height: 10px;--}}
{{--                                    background-color: limegreen;--}}
{{--                                    transform: translate(5px, 5px); /* half width and height */--}}
{{--                                    border-radius: 50%;--}}
{{--                                }--}}

{{--                                .profile-pic img {--}}
{{--                                    vertical-align: top;--}}
{{--                                }--}}
{{--                            </style>--}}
{{--                            @if($authUser)--}}
{{--                                <li>--}}
{{--                                    <div class="chat-toggler sm">--}}
{{--                                        <div class="profile-pic">--}}
{{--                                            <img src="{{$authUser->getImage()}}"data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="20" height="20"  alt="wishlist"/>--}}
{{--                                            <span class="availability-bubble online"></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}

{{--                            @else--}}
{{--                                <li class="menu-item" ><a title="Register or Login" href="{{url("login")}}">Login</a></li>--}}
{{--                                <li class="menu-item" ><a title="Register or Login" href="{{url("register/customer")}}">Register</a></li>--}}
{{--                            @endif--}}

{{--                            <li class="menu-item lang-menu menu-item-has-children parent">--}}
{{--                                <a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>--}}
{{--                                <ul class="submenu lang" >--}}
{{--                                    <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>--}}
{{--                                    <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>--}}
{{--                                    <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>--}}
{{--                                    <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="menu-item menu-item-has-children parent" >--}}
{{--                                <a title="Rupee (RS)" href="#">Rupee (RS)</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="container">--}}
{{--                <div class="mid-section main-info-area">--}}

{{--                    <div class="wrap-logo-top left-section">--}}
{{--                        <a href="index.html" class="link-to-home"><img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" alt="mercado"></a>--}}
{{--                    </div>--}}

{{--                    <div class="wrap-search center-section">--}}
{{--                        <div class="wrap-search-form">--}}
{{--                            <form action="#" id="form-search-top" name="form-search-top">--}}
{{--                                <input type="text" name="search" value="" placeholder="Search here...">--}}
{{--                                <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>--}}
{{--                                <div class="wrap-list-cate">--}}
{{--                                    <input type="hidden" name="product-cate" value="0" id="product-cate">--}}
{{--                                    <a href="#" class="link-control">All Category</a>--}}
{{--                                    <ul class="list-cate">--}}
{{--                                        <li class="level-0">All Category</li>--}}
{{--                                        <li class="level-1">-Electronics</li>--}}
{{--                                        <li class="level-2">Batteries & Chargens</li>--}}
{{--                                        <li class="level-2">Headphone & Headsets</li>--}}
{{--                                        <li class="level-2">Mp3 Player & Acessories</li>--}}
{{--                                        <li class="level-1">-Smartphone & Table</li>--}}
{{--                                        <li class="level-2">Batteries & Chargens</li>--}}
{{--                                        <li class="level-2">Mp3 Player & Headphones</li>--}}
{{--                                        <li class="level-2">Table & Accessories</li>--}}
{{--                                        <li class="level-1">-Electronics</li>--}}
{{--                                        <li class="level-2">Batteries & Chargens</li>--}}
{{--                                        <li class="level-2">Headphone & Headsets</li>--}}
{{--                                        <li class="level-2">Mp3 Player & Acessories</li>--}}
{{--                                        <li class="level-1">-Smartphone & Table</li>--}}
{{--                                        <li class="level-2">Batteries & Chargens</li>--}}
{{--                                        <li class="level-2">Mp3 Player & Headphones</li>--}}
{{--                                        <li class="level-2">Table & Accessories</li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="wrap-icon right-section">--}}
{{--                        <div class="wrap-icon-section wishlist">--}}
{{--                            <a href="#" class="link-direction">--}}
{{--                                <i class="fa fa-heart" aria-hidden="true"></i>--}}
{{--                                <div class="left-info">--}}
{{--                                    <span class="index">0 item</span>--}}
{{--                                    <span class="title">Wishlist</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="wrap-icon-section minicart">--}}
{{--                            <a href="{{url('cart')}}" class="link-direction">--}}
{{--                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>--}}
{{--                                <div class="left-info">--}}
{{--                                    <span class="index">--}}
{{--                                    @if($authUser)--}}
{{--                                         {{getCartAmount()}}--}}
{{--                                    @else--}}
{{--                                        0--}}
{{--                                    @endif item </span>--}}
{{--                                    <span class="title">CART</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="wrap-icon-section show-up-after-1024">--}}
{{--                            <a href="#" class="mobile-navigation">--}}
{{--                                <span></span>--}}
{{--                                <span></span>--}}
{{--                                <span></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="nav-section header-sticky">--}}
{{--                <div class="header-nav-section">--}}
{{--                    <div class="container">--}}
{{--                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >--}}
{{--                            <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>--}}
{{--                            <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>--}}
{{--                            <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>--}}
{{--                            <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="primary-nav-section">--}}
{{--                    <div class="container">--}}
{{--                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >--}}
{{--                            <li class="menu-item home-icon">--}}
{{--                                <a href="{{url('/')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>--}}
{{--                            </li>--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{url('catalog')}}" class="link-term mercado-item-title">Shop</a>--}}
{{--                            </li>--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{route('dashboard.products.index')}}" class="link-term mercado-item-title">Add Product</a>--}}
{{--                            </li>--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{url('contact')}}" class="link-term mercado-item-title">Request For Book</a>--}}
{{--                            </li>--}}
{{--                            @if($authUser)--}}
{{--                                <li class="menu-item">--}}
{{--                                    <a href="{{route('dashboard.users.profile.get')}}" class="link-term mercado-item-title">--}}
{{--                                        {{$authUser->name}} Account--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            <li class="menu-item">--}}
{{--                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                Logout--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                                <li class="menu-item">--}}
{{--                                    <a href="#" class="link-term mercado-item-title">--}}
{{--                                         View My Order--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                @endif--}}

{{--                        </ul>--}}
{{--                        <!-- Main menu - end -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}


{{--    <!-- Topbar - start -->--}}
{{--    <div class="header_top">--}}
{{--        <div class="container">--}}
{{--            <ul class="contactinfo nav nav-pills">--}}
{{--                <li>--}}
{{--                    <i class='fa fa-phone'></i> {{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <i class="fa fa-envelope"></i> {{getSiteSetting('email') != null? getSiteSetting('email'): ''}}--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <ul>--}}

{{--            </ul>--}}
{{--            <!-- Social links -->--}}
{{--            <ul class="social-icons nav navbar-nav">--}}
{{--                <li>--}}
{{--                    <a href="{{getSiteSetting('social_fb') != null? getSiteSetting('social_fb'): ''}}" rel="nofollow" target="_blank">--}}
{{--                        <i class="fa fa-facebook"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{getSiteSetting('social_google') != null? getSiteSetting('social_google'): ''}}" rel="nofollow" target="_blank">--}}
{{--                        <i class="fa fa-google-plus"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://twitter.com" rel="nofollow" target="_blank">--}}
{{--                        <i class="fa fa-twitter"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="http://vk.com" rel="nofollow" target="_blank">--}}
{{--                        <i class="fa fa-vk"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="{{getSiteSetting('social_instagram') != null? getSiteSetting('social_instagram'): ''}}" rel="nofollow" target="_blank">--}}
{{--                        <i class="fa fa-instagram"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>		</div>--}}
{{--    </div>--}}
{{--    <!-- Topbar - end -->--}}

{{--    <!-- Logo, Shop-menu - start -->--}}
{{--    <div class="header-middle">--}}
{{--        <div class="container header-middle-cont">--}}
{{--            <div class="toplogo">--}}
{{--                <a href="/">--}}
{{--                    <img src="{{getSiteSetting('logo_image',true)?getSiteSetting('logo_image',true):imageNotFound()}}" alt="Shopee">--}}
{{--                </a>--}}


{{--            </div>--}}


{{--            <div class="shop-menu">--}}
{{--                <ul>--}}
{{--                    <li>--}}
{{--                        <a href="wishlist.html">--}}
{{--                            <i class="fa fa-heart fa-lg" alt="wishlist"></i>--}}
{{--                            (<span id="topbar-favorites">1</span>)--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="compare.html">--}}
{{--                            <i class="fa fa-bar-chart fa-lg"></i>--}}
{{--                            <span class="shop-menu-ttl"></span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <div class="h-cart">--}}
{{--                            <a href="{{url('cart')}}">--}}
{{--                                <i class="fa fa-shopping-cart fa-lg"></i>--}}
{{--                                <span class="availability-bubble online"></span>--}}
{{--                                (<b class="text-danger">--}}
{{--                                    @if($authUser)--}}
{{--                                    {{getCartAmount()}}--}}
{{--                                        @else--}}
{{--                                    0--}}
{{--                                        @endif--}}
{{--                                </b>)--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    @if($authUser)--}}
{{--                        <li>--}}
{{--                            <div class="chat-toggler sm">--}}
{{--                                <div class="profile-pic">--}}
{{--                                <img src="{{$authUser->getImage()}}"data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="35" height="35" alt="wishlist"/>--}}
{{--                                <span class="availability-bubble online"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}

{{--                                <li class="quicklinks">--}}
{{--                                    <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">--}}
{{--                                        <i class="fa fa-reorder"></i>--}}
{{--                                    </a>--}}
{{--                                    <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('dashboard.users.profile.get')}}">Update profile</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="divider"></li><br>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                                <i class="fa fa-sign-out"></i>&nbsp; Logout--}}
{{--                                            </a>--}}
{{--                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                                {{ csrf_field() }}--}}
{{--                                            </form>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}


{{--                    @else--}}
{{--                    <li class="topauth">--}}
{{--                        <a href="{{url("register/customer")}}">--}}
{{--                            <i class="fa fa-lock fa-lg"></i>--}}
{{--                            <span class="shop-menu-ttl">Registration</span>--}}
{{--                        </a>--}}
{{--                        <a href="{{url("login")}}">--}}
{{--                            <span class="shop-menu-ttl">Login</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Logo, Shop-menu - end -->--}}

{{--    <!-- Topmenu - start -->--}}
{{--    <div class="header-bottom">--}}
{{--            <nav class="container topmenu">--}}
{{--                <!-- Catalog menu - start -->--}}
{{--                @if($authUser)--}}
{{--                @if($authUser->mainRole()->name=='administrator')--}}
{{--                    <!-- Catalog menu - start -->--}}
{{--                        <div class="topcatalog">--}}
{{--                            <a class="topcatalog-btn" href="#">DashBoard</a>--}}
{{--                            <ul class="topcatalog-list">--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('dashboard.site-settings.index')}}">--}}
{{--                                        Site Setting--}}
{{--                                    </a>--}}
{{--                                <li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        CMS--}}
{{--                                    </a>--}}
{{--                                    <i class="fa fa-angle-right"></i>--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('dashboard.banners.index')}}">--}}
{{--                                                Banners Management--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li><a href="{{route('dashboard.posts.index')}}">Content Management</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.events.index')}}">Events Management</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.pages.index')}}">Pages Management</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.services.index')}}">Services Management</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.testimonials.index')}}">Testimonials Management</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.news.index')}}">Blogs Management</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('dashboard.users.index')}}">--}}
{{--                                        <i class="fa fa-users"></i>--}}
{{--                                        <span class="title">User</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        Auth Setting--}}
{{--                                    </a>--}}
{{--                                    <i class="fa fa-angle-right"></i>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="{{route('dashboard.roles.index')}}">Role</a></li>--}}
{{--                                        <li><a href="{{route('dashboard.permissions.index')}}">Permission</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- Catalog menu - end -->--}}
{{--                    @else--}}
{{--                <div class="topcatalog">--}}
{{--                    <a class="topcatalog-btn" href="{{url("catalog")}}"><span>All</span> catalog</a>--}}
{{--                    <ul class="topcatalog-list">--}}

{{--                    </ul>--}}
{{--                </div>--}}
{{--                @endif--}}
{{--                @endif--}}

{{--            <!-- Catalog menu - end -->--}}

{{--                <!-- Main menu - start -->--}}
{{--                <button type="button" class="mainmenu-btn">Menu</button>--}}

{{--                <ul class="mainmenu">--}}
{{--                    <li>--}}
{{--                        <a href="{{url('/')}}" class="active">--}}
{{--                            Home--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{url('catalog')}}">--}}
{{--                            Catalog--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{route('dashboard.product.index')}}">--}}
{{--                            Add Product </i>--}}
{{--                        </a>--}}

{{--                    </li>--}}

{{--                    <li>--}}
{{--                        <a href="#">--}}
{{--                            Elements--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{url('blog')}}">--}}
{{--                            Blog--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="{{url('contact')}}">--}}
{{--                            Request For Book--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    @if($authUser)--}}
{{--                        <li>--}}
{{--                            <a href="{{route('dashboard.users.profile.get')}}">--}}
{{--                                {{$authUser->name}} Account--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li>--}}
{{--                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--                                <i class="fa fa-sign-out"></i>&nbsp; Logout--}}
{{--                            </a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                {{ csrf_field() }}--}}
{{--                            </form>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                    <li class="menu-item-has-children">--}}
{{--                        <a href="#">--}}
{{--                            Pages <i class="fa fa-angle-down"></i>--}}
{{--                        </a>--}}
{{--                        <ul class="sub-menu">--}}
{{--                            <li>--}}
{{--                                <a href="{{url('contact')}}">--}}
{{--                                   Request For Book--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="cart.html">--}}
{{--                                    Cart--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="auth.html">--}}
{{--                                    Authorization--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="compare.html">--}}
{{--                                    Compare--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="wishlist.html">--}}
{{--                                    Wishlist--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="404.html">--}}
{{--                                    Error 404--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="mainmenu-more">--}}
{{--                        <span>...</span>--}}
{{--                        <ul class="mainmenu-sub"></ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <!-- Main menu - end -->--}}

{{--            </nav>--}}

{{--    </div>--}}
{{--    <!-- Topmenu - end -->--}}

{{--</header>--}}
<!-- Header - end -->
