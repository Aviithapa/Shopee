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
                    <a class="topcatalog-btn" href="{{url("catalog")}}"><span>All</span> catalog</a>
                    <ul class="topcatalog-list">
                        <li>
                            <a href="catalog-list.html">
                                SEE
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Nepali
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Math
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="catalog-list.html">
                                NEB XI
                            </a>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li>
                                    <a href="catalog-list.html">
                                        English
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Nepali
                                    </a>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        SCIENCE
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Physics
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Chemistry
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Biology
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Computer
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="catalog-list.html">
                                        Management
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="catalog-list.html">
                                                Account
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Business Study
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Shirts
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Outerwear
                                            </a>
                                        </li>
                                        <li>
                                            <a href="catalog-list.html">
                                                Swimwear
                                            </a>
                                        </li>
                                    </ul>
                                </li>
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
                        <a href="{{route('dashboard.product.index')}}">
                            Product <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('dashboard.product.index')}}">
                                    Add Product
                                </a>
                            </li>
                            <li>
                                <a href="product-2.html">
                                    Product - Style 2 (Scroll)
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Elements
                        </a>
                    </li>
                    <li>
                        <a href="{{url('blog')}}">
                            Blog
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="contacts.html">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a href="cart.html">
                                    Cart
                                </a>
                            </li>
                            <li>
                                <a href="auth.html">
                                    Authorization
                                </a>
                            </li>
                            <li>
                                <a href="compare.html">
                                    Compare
                                </a>
                            </li>
                            <li>
                                <a href="wishlist.html">
                                    Wishlist
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    Error 404
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>
                <!-- Main menu - end -->

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
    <!-- Topmenu - end -->

</header>
<!-- Header - end -->
