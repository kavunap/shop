<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
		<title>Welcome | Shimuhahe</title>
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" media="all" />
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
		<!-- slicknav CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
		<!-- Lightbox CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}"/>
		<!-- Bx slider CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/jquery.bxslider.css') }}">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all" />
	</head>
	<body>
        @if ($message = Session::get('success'))
			<div class="alert alert-success">
				<p>{{ $message }}</p>
			</div>
		@endif
		@if ($message = Session::get('error'))
			<div class="alert alert-danger">
				<p>{{ $message }}</p>
			</div>
		@endif
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header area start -->
		<header class="header-area ptb-15">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
					    <div class="header-left-content">
					        <ul>
					            <li><a href="#"><i class="fa fa-phone"></i>+250 788875734/+250 782215105</a></li>
					            <li><a href="#"><i class="fa fa-envelope"></i>shimuhahe@gmail.com</a></li>
					        </ul>
					    </div>
					</div>
					<div class="col-md-5">
					    <div class="header-right-content">
					        <ul>
					            <li>
                                    <select>
                                        <option value="En">En</option>
                                        <option value="Bd">Bd</option>
                                    </select>
                                </li>
								<li><a href="{{ route('cart.list') }}" class="krishok-cart"><i class="fa fa-shopping-cart"></i> <span>{{ Cart::getTotalQuantity()}}</span></a></li>
					            @if(auth()->check())
                                    <a href="/logout">Logout</a>
                                    <a href="/admin">Dashboard</a>
                                @else
                                    <li><a href="#" class="popup-show">Login</a>
                                        <div class="login-popup login-form contact-form">
                                            <h4>Login</h4>
                                            <form action="/login" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="contact-container">
                                                            <input type="email" placeholder="Email Address" name="email">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-15">
                                                        <div class="contact-container">
                                                            <input type="password" placeholder="Password" name="password">
                                                            <i class="fa fa-eye"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 text-left mb-15">
                                                        <input type="checkbox">
                                                        <p>Remember me</p>
                                                    </div>
                                                    <div class="col-sm-6 text-right mb-15">
                                                        <div class="popup-light">
                                                            <p>Forget Password ?</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-30">
                                                        <button class="krishok-btn" type="submit">LOGIN</button>
                                                    </div>
                                                    <div class="col-sm-12 mb-15">
                                                        <div class="sign-with">
                                                            <p>Or Sign In With</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <a href="#" class="login-with"><i class="fa fa-facebook"></i></a>
                                                        <a href="#" class="login-with"><i class="fa fa-twitter"></i></a>
                                                    </div>
                                                    <div class="col-sm-12 mt-30">
                                                        <p>Don’t Have an Account ? <a href="#" class="registration-form-show">Create Now</a></p>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="popup-close"><i class="fa fa-close"></i></div>
                                        </div>
                                        <div class="login-popup registration-form contact-form">
                                            <h4>Create Account</h4>
                                            <form action="/register" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="contact-container">
                                                            <input type="text" placeholder="Full name" name="name" value="{{ old('name') }}">
                                                            <i class="fa fa-user"></i>
                                                            @error('name')
                                                            <span style="color:red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="contact-container">
                                                            <input type="number" placeholder="phone number" name="phone" value="{{ old('phone') }}">
                                                            <i class="fa fa-phone"></i>
                                                            @error('phone')
                                                            <span style="color:red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="contact-container">
                                                            <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                                            <i class="fa fa-envelope"></i>
                                                            @error('email')
                                                            <span style="color:red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="contact-container">
                                                            <input type="location" placeholder="Location / Address" name="location" value="{{ old('location') }}">
                                                            <i class="fa fa-map"></i>
                                                            @error('location')
                                                            <span style="color:red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="contact-container">
                                                            <input type="password" placeholder="Password" name="password" value="{{ old('password') }}">
                                                            <i class="fa fa-eye"></i>
                                                            @error('password')
                                                            <span style="color:red">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mb-15">
                                                        <input type="password" placeholder="Retype Password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                                                        @error('password_confirmation')
                                                        <span style="color:red">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-sm-12 text-left mb-15">
                                                        <input type="checkbox">
                                                        <p>Agree with <span>terms and condition</span></p>
                                                    </div>
                                                    <div class="col-sm-12 mb-20">
                                                        <button class="krishok-btn" type="submit">Create Account</button>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <p>Already Have an Account ?  <a href="#" class="login-form-show">Login Now</a></p>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="popup-close"><i class="fa fa-close"></i></div>
                                        </div>
                                    </li>
                                @endif
					        </ul>
					    </div>
					</div>
				</div>
			</div>
		</header><!-- header area end -->
		<!-- menu area start -->
		<div class="menubar">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-6">
						<div class="logo">
							<a href="/"><img src="{{ asset('images/SHIMA_logo-removebg-preview.png') }}" alt="shimuhahe logo"></a>
						</div>
					</div>
					<div class="col-md-10 col-sm-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li @if (Request::is('/')) class="active" @endif><a href="/">Home</a></li>
                                <li @if (Request::is('about')) class="active" @endif><a  href="/about">About Us</a></li>
                                <li @if (Request::is('products')) class="active" @endif><a  href="/products">Products</a></li>
                                <li ><a  href="/about">services <i class="fa fa-angle-down"></i></a>
									<ul>
										<li @if (Request::is('products')) class="active" @endif><a  href="/products">Shop</a></li>
										<li @if (Request::is('about')) class="active" @endif><a  href="/about">Repairing services</a></li>
										<li @if (Request::is('about')) class="active" @endif><a  href="/about">Spare parts</a></li>
										<li @if (Request::is('about')) class="active" @endif><a  href="/about">Riding services</a></li>
									</ul>
								</li>
                                {{-- <li><a href="blog.html">Blog</a></li> --}}
                                <li @if (Request::is('contact')) class="active" @endif><a  href="/contact">Contact</a></li>
                                <li @if (Request::is('products/create')) class="active" @endif><a href="{{ route('products.create') }}">Sell yours</a></li>
                                <li>
                                    <button type="submit" class="toggle-pade">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <form class="navbar-form form-box" role="search">
                                        <input type="text" placeholder="Search">
                                    </form>
                                </li>
                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</div><!-- menu area end -->

        @yield('content')
        <!-- get quote area start -->
        <section class="get-quote ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Get Update About Products</h2>
                        <form action="{{ route('sub.store') }}" method="POST">
                            @csrf
                            <input type="email" placeholder="Email Address" required name="email">
                            <button type="submit">SUBSCRIBE</button>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- get quote area end -->
        <!-- footer area start -->
		<footer class="site-footer pt-75">
			<div class="container">
				<div class="row">
                    <div class="col-lg-5">
                        <div class="widget">
                            <h5 class="widget-title"><a href="/">About Us</a></h5>
                            <p>We help people to get all kinds of products including Laptops, desktops, computer repairing services, bike riding services including bike shop, repairing services and spare parts, bike riding skills and so on. Our platform also allow people to sell their products for free. </p>
                            <div class="widget-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="/contact">Keep in touch</a></h5>
                            <ul>
                                <li>Address : 6 KG 666 Street, Kigali Rwanda</li>
                                <li>Phone : +250 788875734  </li>
                                <li>Email : shimuhahe@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="widget">
                            <h5 class="widget-title"><a href="#">Instagram Feed</a></h5>
                            <div class="img-gallery">
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget1.jpg') }}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget2.jpg') }}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget3.jpg') }}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget4.jpg') }}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget5.jpg') }}" alt=""></a>
                                </div>
                                <div class="single-img-gallery">
                                    <a href="#"><img src="{{ asset('assets/img/widget/widget6.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="footer-bottom-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom">
                                <p>Copyright © 2021 - All Right Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</footer><!-- footer area end -->
		<!-- jquery main JS -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- Poppers JS -->
		<script src="{{ asset('assets/js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- slicknav JS -->
		<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
		<!-- owl carousel JS -->
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- Isotope JS -->
		<script src="{{ asset('assets/js/isotope-3.0.4.min.js') }}"></script>
		<!-- Bx slider JS -->
		<script src="{{ asset('assets/js/jquery.bxslider.min.js') }}"></script>
		<!-- lightbox JS -->
		<script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
		<!-- Wow JS -->
		<script src="{{ asset('assets/js/wow-1.3.0.min.js') }}"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXNQbOV3ZGoxAQ_H2FtRAS_i9yOdZFfBo&region=GB"></script>
		<!-- Imagezoom JS -->
		<script src="{{ asset('assets/js/jquery.imagezoom.js') }}"></script>
		<!-- main JS -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>
</html>