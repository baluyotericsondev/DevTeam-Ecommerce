<header id="header" class="">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +639 152 234 92</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> devteam@intern.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                           
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-teamspeak"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/"><img src="admin/images/home/logo.png" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">



                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">

                            @auth
                                <li><a href=""><i class="fa fa-user"></i>{{ auth()->user()->name }}</a></li>
                            @else
                                <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
                            @endauth
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="/checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>

                            @auth
                                @if (auth()->user()->user_type == 'admin')
                                    <li><a href="/add-product"><i class="fa-solid fa-square-plus"></i>
                                            Admin Dashboard</a>
                                    </li>
                                @endif
                                {{-- <li><a href="/add-product"><i class="fa-solid fa-square-plus"></i>
                                        Admin Dashboard</a>
                                </li> --}}
                                <li>
                                    <a href="/cart"><i class="fa fa-shopping-cart"></i> Cart</a>
                                </li>
                                <li><a href="{{ route('logout') }}"><i
                                            class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"><i class="fa fa-shopping-cart"></i> Cart</a>
                                </li>
                                <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="/product-details">Product Details</a></li>
                                    <li><a href="/checkout">Checkout</a></li>
                                    <li><a href="/cart">Cart</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/blog-list">Blog List</a></li>
                                    <li><a href="/blog">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="/404">404</a></li>
                            <li><a href="/contact-us">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
