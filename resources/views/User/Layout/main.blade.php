<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ asset("User/images/favicon.ico") }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset("User/css/bootstrap.min.css") }}" />

        <link type="text/css" rel="stylesheet" href="{{ asset("User/css/plugins.css") }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset("User/css/color.css") }}" />
        <link type="text/css" rel="stylesheet" href="{{ asset("User/css/slick.css") }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset("User/css/slick-theme.css") }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset("User/css/style.css") }}" />

        <style>
            .error{
                color: red !important;
            }
        </style>
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            <!-- header -->
            <header class="main-header">
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <!-- logo holder  -->
                        <a href="" class="logo-holder"><img src="{{ asset("User/images/life-logo-wh.png") }}" alt="" /></a>
                        <!-- logo holder end -->
                        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
                        @guest
                            <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</div>
                        @else
                        <div class="srf_btn htact"><i class="fal fa-user"></i> <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="header-tooltip">{{ __('Logout') }}</span>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></span></div>
                            
                        @endguest
                        <!-- header-search-wrap -->
                        <div class="header-search-wrap novis_sarch">
                            <div class="widget-inner">
                                <form action="#">
                                    <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- header-search-wrap end -->
                        <!-- header-cart_wrap  -->
                        <div class="header-cart_wrap novis_cart">
                            <div class="header-cart_title">
                                Your Cart <span><strong>2</strong> items</span>
                            </div>
                            <div class="header-cart_wrap_container fl-wrap">
                                <div class="box-widget-content">
                                    <div class="widget-posts fl-wrap">
                                        <ol>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="{{ asset("User/images/shop/1.jpg") }}" class="respimg" alt="" /></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Awesome Merch Wallet</a>
                                                    <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                                </div>
                                                <div class="clear-cart_button"><i class="far fa-times"></i></div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="{{ asset("User/images/shop/2.jpg") }}" class="respimg" alt="" /></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Gmag Merch Wallet</a>
                                                    <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                                </div>
                                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="header-cart_wrap_total fl-wrap">
                                <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                            </div>
                            <div class="header-cart_wrap_footer fl-wrap">
                                <a href="#"> View Cart</a>
                                <a href="#"> Checkout</a>
                            </div>
                        </div>
                        <!-- header-cart_wrap end  -->
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button"><span></span><span></span><span></span></div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index') }}" class="act-link">Home</a></li>
                                    <li><a href="{{ route("aboutUs") }}" class="act-link">About Us</a></li>
                                    <li><a href="{{ route('serviceWeOffer') }}" class="act-link">Services We Offer</a></li>
                                    <li><a href="#" class="act-link">Us Vs Competitors</a></li>
                                    <li><a href="{{ route('contactUs') }}" class="act-link">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                    </div>
                </div>
            </header>
            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                   {{--  push the content here--}}
                   @yield('content')
                   {{-- push the content end --}}
                </div>
                <!-- content  end-->
                <!-- footer -->
                <footer class="fl-wrap main-footer">
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-content">
                                            <a href="" class="footer-logo"><img src="{{ asset("User/images/life-logo-wh.png") }}" alt="" /></a>
                                            <p>Don't be intimidated with the process on getting your website developed. All you guys have to do is provide us with your ideas and we'll do the rest! Don't hesitate to give us a call.</p>
                                            <div class="footer-social fl-wrap">
                                                <ul>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-vk"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Categories</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li><a href="#"> Food & Drinks </a></li>
                                                    <li><a href="#"> Garage Sale </a></li>
                                                    <li><a href="#"> Business & Services </a></li>
                                                    <li><a href="#"> Entertainment & Events </a></li>
                                                    <li><a href="#"> Ethnic Food, Stores</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Quick links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li><a href="#">Home</a></li>
                                                    <li><a href="#">About Us</a></li>
                                                    <li><a href="#">Contact Us</a></li>
                                                    <li><a href="#">Services We Offer</a></li>
                                                    <li><a href="#">Us Vs Competitors</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text" />
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send</button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                    </div>
                    <div class="footer-bottom fl-wrap">
                        <div class="container">
                            <div class="copyright"><span> Copyright &#169; Life Innovations Business Solutions Inc</span> . All rights reserved.</div>
                            <div class="to-top"><i class="fas fa-caret-up"></i></div>
                            <div class="subfooter-nav">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->
            </div>
            <!-- wrapper end -->
            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem" data-bg="{{ asset("User/images/bg/1.jpg") }}"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="{{ asset("User/images/life-logo-wh.png") }}" alt="" /></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current">
                                    <a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a>
                                </li>
                                <li>
                                    <a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a>
                                </li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" action="{{ route('login') }}">
                                                @csrf
                                                <label>Username or Email Address <span>*</span> </label>
                                                <input name="email" type="text" value="" />
                                                @error('email')
                                                    <span class="invalid-feedback error" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label>Password <span>*</span> </label>
                                                <input name="password" type="password" value="" />
                                                @error('password')
                                                    <span class="invalid-feedback error" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="lost_password">
                                                    <a href="#">Lost Your Password?</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-2" class="tab-content">
                                            <div class="custom-form">
                                                <form method="POST" action="{{ route('register') }}"  class="main-register-form" id="main-register-form2">
                                                    @csrf
                                                    <label>Full Name <span>*</span> </label>
                                                    <input name="name" type="text"  />
                                                    @error('name')
                                                        <span class="invalid-feedback error" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label>Email Address <span>*</span></label>
                                                    <input name="email" type="text"  />
                                                    @error('email')
                                                        <span class="invalid-feedback error" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label>Password <span>*</span></label>
                                                    <input name="password" type="password"  />
                                                    @error('password')
                                                        <span class="invalid-feedback error" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                </div>
                                <!--tabs end -->
                                <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{ asset("User/js/jquery.min.js") }}"></script>
        <script src="{{ asset("User/js/plugins.js") }}"></script>
        <script src="{{ asset("User/js/scripts.js") }}"></script>
        <script src="{{ asset("User/js/slick.min.js") }}"></script>
        <script src="{{ asset("User/js/bootstrap.bundle.min.js") }}"></script>
        @yield('indexScripts')
      
         @error('email')
            <script>                                       
               $(".main-register-container").fadeIn(1);
               $(".main-register-wrap").addClass("vis_mr");
            </script>
        @enderror
        @error('password')
            <script>
                    $(".main-register-container").fadeIn(1);
                    $(".main-register-wrap").addClass("vis_mr");
            </script>
        @enderror
        @error('name')
        <script>
            $(".main-register-container").fadeIn(1);
            $(".main-register-wrap").addClass("vis_mr");
        </script>
        @enderror

        <script>
            $('.team-slider').slick({
                dots: false,
                infinite: true,
                speed: 1000,
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    }, {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
       
    </body>
</html>
