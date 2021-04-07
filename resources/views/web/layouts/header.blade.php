{{--<!-- Header - start -->--}}
{{--@include('admin.layout.style')--}}
{{--@include('web.layouts.style')--}}
{{--@include('admin.layout.script')--}}
{{--<header class="header">--}}
<!--header-->
<header id="header" class="header header-style-1">
    <div class="container-fluid">
        <div class="row">
            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="{{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: {{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <style>
                                .profile-pic {
                                    display: inline-block;
                                    position: relative;
                                }

                                .profile-pic::after {
                                    content: '';
                                    display: block;
                                    position: absolute;
                                    bottom: 14.8%;
                                    right: 14.8%;
                                    width: 10px;
                                    height: 10px;
                                    background-color: limegreen;
                                    transform: translate(5px, 5px); /* half width and height */
                                    border-radius: 50%;
                                }

                                .profile-pic img {
                                    vertical-align: top;
                                }
                            </style>
                            @if($authUser)
                                <li>
                                    <div class="chat-toggler sm">
                                        <div class="profile-pic">
                                            <img src="{{$authUser->getImage()}}"data-src="{{$authUser->getImage()}}" data-src-retina="{{$authUser->getImage()}}" width="20" height="20"  alt="wishlist"/>
                                            <span class="availability-bubble online"></span>
                                        </div>
                                    </div>
                                </li>

                            @else
                                <li class="menu-item" ><a title="Register or Login" href="{{url("login")}}">Login</a></li>
                                <li class="menu-item" ><a title="Register or Login" href="{{url("register/customer")}}">Register</a></li>
                            @endif

                            <li class="menu-item lang-menu menu-item-has-children parent">
                                <a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="submenu lang" >
                                    <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
                                    <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
                                    <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
                                    <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children parent" >
                                <a title="Rupee (RS)" href="#">Rupee (RS)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">

                    <div class="wrap-logo-top left-section">
                        <a href="index.html" class="link-to-home"><img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" alt="mercado"></a>
                    </div>

                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="#" id="form-search-top" name="form-search-top">
                                <input type="text" name="search" value="" placeholder="Search here...">
                                <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
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
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            <a href="#" class="link-direction">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">0 item</span>
                                    <span class="title">Wishlist</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="{{url('cart')}}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">
                                    @if($authUser)
                                         {{getCartAmount()}}
                                    @else
                                        0
                                    @endif item </span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="nav-section header-sticky">
                <div class="header-nav-section">
                    <div class="container">
                        <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                            <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
                            <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
                        </ul>
                    </div>
                </div>

                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="{{url('/')}}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('catalog')}}" class="link-term mercado-item-title">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('dashboard.products.index')}}" class="link-term mercado-item-title">Add Product</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('contact')}}" class="link-term mercado-item-title">Request For Book</a>
                            </li>
                            @if($authUser)
                                <li class="menu-item">
                                    <a href="{{route('dashboard.users.profile.get')}}" class="link-term mercado-item-title">
                                        {{$authUser->name}} Account
                                    </a>
                                </li>
                            <li class="menu-item">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                                <li class="menu-item">
                                    <a href="#" class="link-term mercado-item-title">
                                         View My Order
                                    </a>
                                </li>
                                @endif

                        </ul>
                        <!-- Main menu - end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


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
{{--<!-- Header - end -->--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        // Single Product Tabs--}}
{{--        $('.prod-tabs li').on('click', 'a', function () {--}}
{{--            if ($(this).hasClass('active') || $(this).attr('data-prodtab') == '')--}}
{{--                return false;--}}
{{--            $(this).parents('.prod-tabs').find('li a').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            // mobile--}}
{{--            $('.prod-tab-mob[data-prodtab-num=' + $(this).data('prodtab-num') + ']').parents('.prod-tab-cont').find('.prod-tab-mob').removeClass('active');--}}
{{--            $('.prod-tab-mob[data-prodtab-num=' + $(this).data('prodtab-num') + ']').addClass('active');--}}

{{--            $($(this).attr('data-prodtab')).parents('.prod-tab-cont').find('.prod-tab').css('height', '0px');--}}
{{--            $($(this).attr('data-prodtab')).css('height', 'auto');--}}
{{--            return false;--}}
{{--        });--}}

{{--        // Single Product Tabs (mobile)--}}
{{--        $('.prod-tab-cont').on('click', '.prod-tab-mob', function () {--}}
{{--            if ($(this).hasClass('active') || $(this).attr('data-prodtab') == '')--}}
{{--                return false;--}}
{{--            $(this).parents('.prod-tab-cont').find('.prod-tab-mob').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            // main--}}
{{--            $('.prod-tabs li a[data-prodtab-num=' + $(this).data('prodtab-num') + ']').parents('.prod-tabs').find('li a').removeClass('active');--}}
{{--            $('.prod-tabs li a[data-prodtab-num=' + $(this).data('prodtab-num') + ']').addClass('active');--}}

{{--            $($(this).attr('data-prodtab')).parents('.prod-tab-cont').find('.prod-tab').css('height', '0px');--}}
{{--            $($(this).attr('data-prodtab')).css('height', 'auto').hide().fadeIn();--}}
{{--            return false;--}}
{{--        });--}}


{{--        // Popular Products Tabs--}}
{{--        $('.fr-pop-tabs li').on('click', 'a', function () {--}}
{{--            if ($(this).hasClass('active') || $(this).attr('data-frpoptab') == '')--}}
{{--                return false;--}}
{{--            $(this).parents('.fr-pop-tabs').find('li a').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            // mobile--}}
{{--            $('.fr-pop-tab-mob[data-frpoptab-num=' + $(this).data('frpoptab-num') + ']').parents('.fr-pop-tab-cont').find('.fr-pop-tab-mob').removeClass('active');--}}
{{--            $('.fr-pop-tab-mob[data-frpoptab-num=' + $(this).data('frpoptab-num') + ']').addClass('active');--}}

{{--            $($(this).attr('data-frpoptab')).parents('.fr-pop-tab-cont').find('.fr-pop-tab').css('height', '0px');--}}
{{--            $($(this).attr('data-frpoptab')).css('height', 'auto').hide().fadeIn();--}}
{{--            return false;--}}
{{--        });--}}

{{--        // Popular Products Tabs (mobile)--}}
{{--        $('.fr-pop-tab-cont').on('click', '.fr-pop-tab-mob', function () {--}}
{{--            if ($(this).hasClass('active') || $(this).attr('data-frpoptab') == '')--}}
{{--                return false;--}}
{{--            $(this).parents('.fr-pop-tab-cont').find('.fr-pop-tab-mob').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            // main--}}
{{--            $('.fr-pop-tabs li a[data-frpoptab-num=' + $(this).data('frpoptab-num') + ']').parents('.fr-pop-tabs').find('li a').removeClass('active');--}}
{{--            $('.fr-pop-tabs li a[data-frpoptab-num=' + $(this).data('frpoptab-num') + ']').addClass('active');--}}

{{--            $($(this).attr('data-frpoptab')).parents('.fr-pop-tab-cont').find('.fr-pop-tab').animate({--}}
{{--                'height': '0px'--}}
{{--            }, 350);--}}
{{--            $($(this).attr('data-frpoptab')).animate({--}}
{{--                'height': $($(this).attr('data-frpoptab')).find('.flex-viewport').outerHeight()+'px'--}}
{{--            }, 350);--}}

{{--            return false;--}}
{{--        });--}}

{{--        // Accordions--}}
{{--        $('.accordion-tab-cont').on('click', '.accordion-tab-mob', function () {--}}
{{--            if ($(this).hasClass('active') || $(this).attr('data-accordion') == '')--}}
{{--                return false;--}}
{{--            $(this).parents('.accordion-tab-cont').find('.accordion-tab-mob').removeClass('active');--}}
{{--            $(this).addClass('active');--}}

{{--            $($(this).attr('data-accordion')).parents('.accordion-tab-cont').find('.accordion-tab').animate({--}}
{{--                'height': '0px'--}}
{{--            }, 350);--}}
{{--            $($(this).attr('data-accordion')).animate({--}}
{{--                'height': $($(this).attr('data-accordion')).find('.accordion-inner').outerHeight()+'px'--}}
{{--            }, 350);--}}

{{--            return false;--}}
{{--        });--}}

{{--        // "All Features" button--}}
{{--        $('.prod-showprops').on('click', function () {--}}
{{--            if ($('.prod-tabs li a.active').attr('data-prodtab') == '#prod-tab-2') {--}}
{{--                $('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);--}}
{{--            } else {--}}
{{--                $('.prod-tabs li a').removeClass('active');--}}
{{--                $('#prod-props').addClass('active');--}}
{{--                $('.prod-tab-cont .prod-tab').css('height', '0px');--}}
{{--                $('#prod-tab-2').css('height', 'auto');--}}
{{--                $('html, body').animate({scrollTop: ($('.prod-tabs-wrap').offset().top - 10)}, 700);--}}
{{--            }--}}
{{--            return false;--}}
{{--        });--}}

{{--        // Sidebar Categories--}}
{{--        $('#section-sb-toggle').on('click', function () {--}}
{{--            $('#section-sb-list').slideToggle();--}}
{{--            if ($(this).hasClass('opened'))--}}
{{--                $(this).removeClass("opened");--}}
{{--            else--}}
{{--                $(this).addClass('opened');--}}
{{--            return false;--}}
{{--        });--}}
{{--        $("#section-sb-list li.has_child").on("click", ".section-sb-toggle", function () {--}}
{{--            $(this).parent().next("ul").slideToggle();--}}
{{--            if ($(this).hasClass('opened'))--}}
{{--                $(this).removeClass("opened");--}}
{{--            else--}}
{{--                $(this).addClass('opened');--}}
{{--            return false;--}}
{{--        });--}}

{{--        // Filter Toggle (mobile)--}}
{{--        $('#section-filter-toggle').on('click', function () {--}}
{{--            $(this).next('.section-filter-cont').slideToggle();--}}
{{--            if ($(this).hasClass('opened')) {--}}
{{--                $(this).removeClass("opened").find('span').text($(this).data("open"));--}}
{{--            }--}}
{{--            else {--}}
{{--                $(this).addClass('opened').find('span').text($(this).data("close"));--}}
{{--            }--}}
{{--            return false;--}}
{{--        });--}}

{{--        // Product Offers (select type)--}}
{{--        $('body').on('click', '.offer-props-select p', function () {--}}
{{--            if ($(this).parent().hasClass('opened'))--}}
{{--                $(this).parent().removeClass('opened');--}}
{{--            else--}}
{{--                $(this).parent().addClass('opened');--}}
{{--            return false;--}}
{{--        });--}}
{{--        $('body').on('click', '.offer-props-select li', function () {--}}
{{--            if ($(this).parent().parent().hasClass('opened'))--}}
{{--                $(this).parent().parent().removeClass('opened');--}}
{{--            else--}}
{{--                $(this).parent().parent().addClass('opened');--}}
{{--        });--}}
{{--        $('body').on('click', '.offer-props-select li', function () {--}}
{{--            $(this).parent().parent().find('p').html($(this).text());--}}
{{--        });--}}

{{--        // Topmenu--}}
{{--        $('.topmenu').on('click', '.mainmenu-btn', function () {--}}
{{--            if ($('body').hasClass('mainmenu-show')) {--}}
{{--                $('body').removeClass('mainmenu-show');--}}
{{--            } else {--}}
{{--                $('body').addClass('mainmenu-show');--}}
{{--            }--}}
{{--            return false;--}}
{{--        });--}}
{{--        $('html').on('click', 'body.mainmenu-show', function () {--}}
{{--            $('body').removeClass('mainmenu-show');--}}
{{--        });--}}
{{--        $('body').on('click', '.mainmenu', function(event){--}}
{{--            event.stopPropagation();--}}
{{--        });--}}

{{--        // Topmenu (mobile)--}}
{{--        if ($(window).width() < 751) {--}}
{{--            $('.topmenu .mainmenu li a .fa').on('click', function () {--}}
{{--                if ($(this).parent().next('.sub-menu').hasClass('opened')) {--}}
{{--                    $(this).parent().next('.sub-menu').removeClass('opened');--}}
{{--                    $(this).parent().next('.sub-menu').slideUp();--}}
{{--                } else {--}}
{{--                    $(this).parent().next('.sub-menu').addClass('opened');--}}
{{--                    $(this).parent().next('.sub-menu').slideDown();--}}
{{--                }--}}
{{--                return false;--}}
{{--            });--}}

{{--            $('.topcatalog').on('click', '.topcatalog-btn', function () {--}}
{{--                if ($('body').hasClass('topcatalog-show')) {--}}
{{--                    $('body').removeClass('topcatalog-show');--}}
{{--                } else {--}}
{{--                    $('body').addClass('topcatalog-show');--}}
{{--                }--}}
{{--                return false;--}}
{{--            });--}}
{{--            $('html').on('click', 'body.topcatalog-show', function () {--}}
{{--                $('body').removeClass('topcatalog-show');--}}
{{--            });--}}
{{--            $('body').on('click', '.topcatalog-list', function(event){--}}
{{--                event.stopPropagation();--}}
{{--            });--}}
{{--            $('.topcatalog li .fa').on('click', function () {--}}
{{--                if ($(this).next('ul').hasClass('opened')) {--}}
{{--                    $(this).next('ul').removeClass('opened');--}}
{{--                    $(this).next('ul').slideUp();--}}
{{--                } else {--}}
{{--                    $(this).next('ul').addClass('opened');--}}
{{--                    $(this).next('ul').slideDown();--}}
{{--                }--}}
{{--                return false;--}}
{{--            });--}}
{{--        }--}}

{{--        // Mainmenu "more" button--}}
{{--        if ($('.mainmenu').length > 0) {--}}
{{--            if ($(window).width() > 751) {--}}
{{--                var menu_sections = $('.mainmenu');--}}
{{--                var menu_width = menu_sections.width();--}}
{{--                var menu_items_width = 0;--}}
{{--                menu_sections.find('> li').each(function () {--}}
{{--                    if (!$(this).hasClass('mainmenu-more')) {--}}
{{--                        menu_items_width = menu_items_width + $(this).outerWidth(true);--}}
{{--                        if (menu_width < menu_items_width) {--}}
{{--                            $(this).addClass('mainmenu-other');--}}
{{--                            $(this).appendTo('.mainmenu-sub');--}}
{{--                        } else if ($(this).hasClass('mainmenu-other')) {--}}
{{--                            $(this).removeClass('mainmenu-other');--}}
{{--                            $(this).prependTo('.mainmenu-sub');--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--                if (menu_width < menu_items_width) {--}}
{{--                    $('.mainmenu-more').show();--}}
{{--                }--}}
{{--            }--}}

{{--            $('.mainmenu').addClass('sections-show');--}}

{{--            $(window).resize(function() {--}}
{{--                var menu_sections = $('.mainmenu');--}}
{{--                var menu_width = menu_sections.width();--}}
{{--                var menu_items_width = 0;--}}
{{--                if ($(window).width() > 751) {--}}
{{--                    menu_sections.find('> li').each(function () {--}}
{{--                        menu_items_width = menu_items_width + ($(this).outerWidth(true) + 4);--}}
{{--                        if (!$(this).hasClass('mainmenu-more')) {--}}
{{--                            if (menu_width < menu_items_width) {--}}
{{--                                $(this).addClass('mainmenu-other');--}}
{{--                                $(this).appendTo('.mainmenu-sub');--}}
{{--                            } else if ($(this).hasClass('mainmenu-other')) {--}}
{{--                                $(this).removeClass('mainmenu-other');--}}
{{--                                $(this).prependTo('.mainmenu-sub');--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                    if (menu_width < menu_items_width) {--}}
{{--                        $('.mainmenu-more').show();--}}
{{--                    }--}}
{{--                } else {--}}
{{--                    menu_sections.find('li.mainmenu-other').insertBefore('.mainmenu-more');--}}
{{--                    menu_sections.find('li.mainmenu-other').removeClass('mainmenu-other');--}}
{{--                }--}}
{{--            });--}}

{{--        }--}}

{{--        // Popular Products "more" button--}}
{{--        if ($('.fr-pop-tabs').length > 0) {--}}
{{--            if ($(window).width() > 751) {--}}
{{--                var menu_sections = $('.fr-pop-tabs');--}}
{{--                var menu_width = menu_sections.width();--}}
{{--                var menu_items_width = 0;--}}
{{--                menu_sections.find('> li').each(function () {--}}
{{--                    if (!$(this).hasClass('fr-pop-tabs-more')) {--}}
{{--                        menu_items_width = menu_items_width + $(this).outerWidth(true);--}}
{{--                        if (menu_width < menu_items_width) {--}}
{{--                            $(this).addClass('fr-pop-tabs-other');--}}
{{--                            $(this).appendTo('.fr-pop-tabs-sub');--}}
{{--                        } else if ($(this).hasClass('fr-pop-tabs-other')) {--}}
{{--                            $(this).removeClass('fr-pop-tabs-other');--}}
{{--                            $(this).prependTo('.fr-pop-tabs-sub');--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}
{{--                if (menu_width < menu_items_width) {--}}
{{--                    $('.fr-pop-tabs-more').show();--}}
{{--                }--}}
{{--            }--}}

{{--            $('.fr-pop-tabs').addClass('sections-show');--}}

{{--            $(window).resize(function() {--}}
{{--                var menu_sections = $('.fr-pop-tabs');--}}
{{--                var menu_width = menu_sections.width();--}}
{{--                var menu_items_width = 0;--}}
{{--                if ($(window).width() > 751) {--}}
{{--                    menu_sections.find('> li').each(function () {--}}
{{--                        menu_items_width = menu_items_width + ($(this).outerWidth(true) + 4);--}}
{{--                        if (!$(this).hasClass('fr-pop-tabs-more')) {--}}
{{--                            if (menu_width < menu_items_width) {--}}
{{--                                $(this).addClass('fr-pop-tabs-other');--}}
{{--                                $(this).appendTo('.fr-pop-tabs-sub');--}}
{{--                            } else if ($(this).hasClass('fr-pop-tabs-other')) {--}}
{{--                                $(this).removeClass('fr-pop-tabs-other');--}}
{{--                                $(this).prependTo('.fr-pop-tabs-sub');--}}
{{--                            }--}}
{{--                        }--}}
{{--                    });--}}
{{--                    if (menu_width < menu_items_width) {--}}
{{--                        $('.fr-pop-tabs-more').show();--}}
{{--                    }--}}
{{--                } else {--}}
{{--                    menu_sections.find('li.fr-pop-tabs-other').insertBefore('.fr-pop-tabs-more');--}}
{{--                    menu_sections.find('li.fr-pop-tabs-other').removeClass('fr-pop-tabs-other');--}}
{{--                }--}}
{{--            });--}}

{{--        }--}}

{{--    });--}}




{{--    $(window).load(function () {--}}

{{--        // Quick View button--}}
{{--        $('.qview-btn').fancybox({--}}
{{--            content: $('.qview-modal'),--}}
{{--            padding: 0,--}}
{{--            helpers : {--}}
{{--                overlay : {--}}
{{--                    locked  : false--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}

{{--        // Product Images Slider--}}
{{--        if ($('.prod-slider-car').length > 0) {--}}
{{--            $('.prod-slider-car').each(function () {--}}
{{--                $(this).bxSlider({--}}
{{--                    pagerCustom: $(this).parents('.prod-slider-wrap').find('.prod-thumbs-car'),--}}
{{--                    adaptiveHeight: true,--}}
{{--                    infiniteLoop: false,--}}
{{--                });--}}
{{--                $(this).parents('.prod-slider-wrap').find('.prod-thumbs-car').bxSlider({--}}
{{--                    slideWidth: 5000,--}}
{{--                    slideMargin: 8,--}}
{{--                    moveSlides: 1,--}}
{{--                    infiniteLoop: false,--}}
{{--                    minSlides: 5,--}}
{{--                    maxSlides: 5,--}}
{{--                    pager: false,--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}

{{--        // Filter--}}
{{--        if ($('.section-filter-ttl').length > 0) {--}}
{{--            $('.section-filter').on('click', '.section-filter-ttl', function () {--}}
{{--                if ($(this).parents('.section-filter-item').hasClass('opened')) {--}}
{{--                    $(this).parents('.section-filter-item').removeClass('opened');--}}

{{--                } else {--}}
{{--                    $(this).parents('.section-filter-item').addClass('opened');--}}
{{--                }--}}
{{--                return false;--}}
{{--            });--}}
{{--        }--}}

{{--    });--}}



{{--    /* PRODUCT V2 - start */--}}
{{--    var fixed_obj = {};--}}
{{--    $(window).load(function () {--}}

{{--        if ($('.prod2-slider-wrap').length > 0) {--}}
{{--            if ($(window).width() >= 975) {--}}
{{--                fixed_on_scroll();--}}
{{--            }--}}
{{--            $(window).scroll(function () {--}}
{{--                if ($(window).width() >= 975) {--}}
{{--                    fixed_on_scroll();--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}

{{--        if ($('.prod2-thumbs-car li a').length > 0) {--}}

{{--            // Scroll to--}}
{{--            $('.prod2-thumbs-car li').on('click', 'a', function () {--}}
{{--                if ($(window).width() >= 975) {--}}
{{--                    var--}}
{{--                        el_index = $(this).attr('data-slide-index'),--}}
{{--                        slide = $('.prod2-slider-car li img').eq(el_index),--}}
{{--                        slide_h = slide.outerHeight(),--}}
{{--                        w_h = $(window).height(),--}}
{{--                        slide_pos = slide.offset().top + slide_h/2 - w_h/2;--}}
{{--                    $('html, body').animate({scrollTop: slide_pos}, 700);--}}
{{--                    return false;--}}
{{--                }--}}
{{--            });--}}

{{--            // Waypoints--}}
{{--            $('.prod2-slider-car li img').each(function (i) {--}}
{{--                var this_img = $(this);--}}
{{--                var inview = new Waypoint.Inview({--}}
{{--                    element: this_img,--}}
{{--                    entered: function(direction) {--}}
{{--                        $('.prod2-thumbs-car li img').removeClass('scroll_active');--}}
{{--                        $('.prod2-thumbs-car li img').eq(i).addClass('scroll_active');--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}





{{--    });--}}
{{--    (jQuery);--}}

{{--</script>--}}
