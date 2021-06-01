
<header>
    <div class="header">
        <div class="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <span><i class="fa fa-book fa-2x"></i> Welcome to house of Books!!</span>
                        @if(\Illuminate\Support\Facades\Auth::user())
                        <img class="authUser" src="{{Auth::user()->getImage()}}" alt="{{Auth::user()->name}}"/>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ4DiWF1rfHjxVUbCFw6kwPer7-oOLxy6pNboJmUHnFEenXKXRQpe01qKqGSAQNH6Hql0&usqp=CAU" height="30" width="30">
                                                                </a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                        @else
                        <a href="{{url("login")}}"><button type="button" class="btn btn-primary btn-round-sm btn-sm float-right " >Login</button></a>
                        <a href="{{url("register/customer")}}"><button type="button" class="btn btn-primary btn-round-sm btn-sm register">Register</button></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-logo row">
                <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12  logo mt-3">
                   <a href="{{url('/')}}"><img src="{{getSiteSetting('logo_image') != null? getSiteSetting('logo_image'): ''}}" alt="House of Books" width="150" height="150"></a>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-12 col-xs-13 form-search" style="margin-top: 25px;">
                    <form action="{{url("search")}}" method="GET" role="search">
                        {{csrf_field()}}
                        <div class="input-group">
                            <input class="form-control" placeholder="Search . . ." name="search" value="{{old('search')}}" id="ed-srch-term" type="text">
                            <div class="input-group-btn">
                                <button type="submit" id="searchbtn">search</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 social-details">
                    <div class="social mt-4">
                        <div class="column">
                            <div class="column">
                                <i class="fa fa-home fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>Shankmul Ward no 31<br>Kathmandu, Nepal</p>
                            </div>
                        </div>

                        <div class="column">
                            <div class="column">
                                <i class="fa fa-phone fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>+977-{{getSiteSetting('social_phone') != null? getSiteSetting('social_phone'): ''}}
                                    <br> +977-9742537210</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="column" >
                                <i class="fa fa-envelope-open fa-2x"></i>
                            </div>
                            <div class="column">
                                <p>info@houseofbooks.com.np <br>houseofbooksnepal@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
    <div class="nav">
        <div class="container-fluid">
                    <nav class="topmenu">
                        <!-- Catalog menu - start -->
                        <div class="topcatalog">
                            <a class="topcatalog-btn" href="{{url('catalog')}}">BROWSE CATEGORIES</a>
                            <ul class="topcatalog-list">
                                <li>
                                    <a href="{{url('/catalog/category/nobel')}}">
                                        Nobel
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="{{url('catalog/nobel/motivational')}}">
                                                Motivational
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('catalog/nobel/skills-knowledge')}}">
                                                Skills and Knowledge
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('catalog/nobel/frictional')}}">
                                                Frictional
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('catalog/nobel/biographies')}}">
                                                Biographies
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url('/catalog/category/coursebook')}}">
                                        Coursebook
                                    </a>
                                    <i class="fa fa-angle-right"></i>
                                    <ul>
                                        <li>
                                            <a href="{{url('/catalog/university/TU')}}">
                                                Tribhuwan University
                                            </a>
                                            <i class="fa fa-angle-right"></i>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        Management
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Science
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('/catalog/university/PU')}}">
                                                Pokhara University
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url('/catalog/university/PBU')}}">
                                                Purbanchal University
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{url("catalog/category/loksewa-examination")}}">
                                        Medical Examination
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url("catalog/category/loksewa-examination")}}">
                                        Loksewa Examination
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url("catalog/category/entrance-examination")}}">
                                        Entrance Examination
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url("catalog/category/question-bank-and-solution")}}">
                                        Question Bank and Solution
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Catalog menu - end -->

                        <!-- Main menu - start -->
                        <button type="button" class="mainmenu-btn">Menu</button>
                        <ul class="mainmenu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">Who we are</a></li>
                            <li><a href="{{url('secondhandbookcatalog')}}">Second hand books</a></li>
                            <li><a href="{{url('sell-book-index')}}">Sell Books</a></li>
                            <li><a href="{{url('blog')}}">Blog</a></li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            <li class="icon"> <a >
                                    <i class="fa fa-arrow-circle-down"></i>
                                </a></li>
                            @if(\Illuminate\Support\Facades\Auth::user())
                                @if(\Illuminate\Support\Facades\Auth::user()->mainRole()->name ==='customer')
{{--                                   <li><a href="{{route('dashboard.products.index')}}">Sell Book</a></li>--}}
                                    <li><a href="{{url('profile')}}">My Profile</a></li>
                                @endif
                            @endif

                        </ul>
                        <!-- Main menu - end -->
                    </nav>
                </div>
        <li> <a href="{{url("cart")}}" style="position: absolute; right: 0;"><button class="btn btn-primary btn-round-sm btn-sm"><i class="fa fa-shopping-cart" style="margin-right: 10px;"></i>@if(\Illuminate\Support\Facades\Auth::user())
                        {{getCartAmount()}}
                    @else
                        0
                    @endif Cart</button></a></li>
     </div>


        </div>

    </div>
    <div class="bottom-nav">
    </div>
</header>

@push('scripts')

    @endpush
