<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow">
	<meta content="<?php echo isset($description) ? $description : '';  ?>" name="description">
	<title>{{ isset($seo_title) ? $seo_title : get_option('site_title', config('app.name')) }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="{{ isset($meta_keywords) ? $meta_keywords : get_option('meta_keywords') }}" />
	<meta name="description"
		content="{{ isset($meta_description) ? $meta_description : get_option('meta_description') }}" />

	<?php
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
		$url_p = "https://";
	} else {
		$url_p = "https://";
	}
	$url_p .= $_SERVER['HTTP_HOST'];
	$url_p .= $_SERVER['REQUEST_URI'];
	$url_p = str_replace(".php", "", $url_p);
	$url_p = str_replace("index", "", $url_p);
	$url_p = preg_replace('/\?.*/', '', $url_p);
	$url_p = str_replace("//", "/", $url_p);
	$url_p = str_replace("https:/", "https://", $url_p);
	?>

	<meta property="og:locale" content="en_US" />
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?= $url_p; ?>" />
	<meta property="og:site_name" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image:secure_url" content="" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="576" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:image:alt" content="" />

	<link rel="icon" href="/favicon.ico" type="{{ asset('public/theme/certified_lions/image/x-icon') }}" />
	<!-- Box Icon Start -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="{{ asset('public/theme/certified_lions/css/slick.css') }}">


	<!-- LIBRARIES -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- CUSTOM STYLE -->
	<link rel="stylesheet" href="{{ asset('public/theme/certified_lions/css/style.css') }}">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/bootstrap.css') }}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/magnific-popup.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/font-awesome.css') }}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery.fancybox.min.css') }}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/themify-icons.css') }}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/niceselect.css') }}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/animate.css') }}">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/flex-slider.min.css') }}">
	<!-- Jquery Ui -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/jquery-ui.css') }}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/owl-carousel.css') }}">
	<!-- Slicknav -->
	<link rel="stylesheet" href="{{ asset('public/theme/default/css/slicknav.min.css') }}">

	<link href="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.css') }}" rel="stylesheet" />

	<link rel="stylesheet" href="{{ asset('public/theme/default/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('public/theme/default/style.css?v=1.1') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

	<link rel="stylesheet" href="{{ asset('public/theme/default/css/responsive.css?v=1.1') }}">

	@include('theme.default.components.custom_styles')
	@include('layouts.others.languages')

	<script type="text/javascript">
		var _url = "{{ url('') }}";
	</script>
	<style>
		p.proud {
			float: right;
			margin: 1% 0 0% 0;
			background: green;
			color: #fff;
			padding: 3px;
		}
	</style>
</head>

<body class="js">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

	@if(\Session::has('checkout_error'))
	<div class="alert alert-danger rounded-0">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<p class="text-center m-0 text-white">{{ session('checkout_error') }}</p>
	</div>
	@endif

	<!-- Header -->
	<header>
		<section class="top-bar">
			<div class="continer">
				<div class="topbar"></div>
			</div>
		</section>
		<section class="main-header">
			<div class="align">
				<div class="main-flex">
					<div class="nav-listing">
						<ul>
							<li>
								<div id="mySidebar" class="sidebar">
									<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
									<a href="{{url('/')}}">HOME</a>
									<a href="{{url('/aboutus')}}">ABOUT US</a>
									<a href="{{url('/media')}}">MEDIA</a>
									<a href="{{url('/academy')}}">ACADEMY</a>
									<a href="{{ url('/sponsord') }}">SPONSORS</a>
									<a href="{{ url('/tickets') }}">TICKETS</a>
									<a href="{{ url('/shop') }}"></i> SHOP</a>
									@if(!Auth::check())
									<a href="{{ url('/sign_in') }}">LOGIN</a>
									@else
									<a title="My Account" href="{{ url('/my_account') }}">My Account</a>
									@endif
									<div class="team-dropdown">
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button"
												id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
												TEAM
											</button>
											<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
												<!--<li><a class="dropdown-item-1" href="{{url('/pro-indoor-team')}}">Pro indoor-->
												<!--		team</a></li>-->
												<li><a class="dropdown-item-1" href="https://www.m2soccer.com/stats#/374/team/450408">Pro Indoor MASL 2</a></li>
												<li><a class="dropdown-item-1" href="https://www.masl3.com/stats#/1396/team/487689">Pro Indoor MASL 3</a></li>
												<li><a class="dropdown-item-1" href="{{url('/outdoor-team')}}">Outdoor
														team</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div id="main">
									<button class="openbtn" onclick="openNav()">&#9776; </button>
								</div>
							</li>
							<li> <a href="{{url('/')}}">HOME</a> </li>
							<li> <a href="{{url('/aboutus')}}">ABOUT US</a> </li>
							<li> <a href="{{url('/media')}}">MEDIA</a> </li>
							<li> <a href="{{url('/academy')}}">ACADEMY</a> </li>
							<li>
								<div class="team-dropdown">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button"
											id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
											TEAM
										</button>
										<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
											<!--<li><a class="dropdown-item-1" href="{{url('/pro-indoor-team')}}">Pro indoor-->
											<!--		team</a></li>-->
											<li><a class="dropdown-item-1" href="https://www.m2soccer.com/stats#/374/team/450408">Pro Indoor MASL 2</a></li>
											<li><a class="dropdown-item-1" href="https://www.masl3.com/stats#/1396/team/487689">Pro Indoor MASL 3</a></li>
											<li><a class="dropdown-item-1" href="{{url('/outdoor-team')}}">Outdoor
													team</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li> <a href="{{ url('/sponsord') }}">SPONSORS</a> </li>
							<!--<li> <a href="#">VIDEO</a> </li>-->
							<!--<li><a href="#" class="ticket-btn"><i class="fa-solid fa-ticket-simple"></i> TICKETS </a></li> -->
						</ul>
					</div>
					<div class="site-listing">
						<ul>
							<li>
								<div class="dropdown">
									<button class="btn btn-secondary dropdown-toggle" type="button"
										id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
										EN <i class="fa-solid fa-chevron-down"></i>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
										<li><a class="dropdown-item" href="#">Action</a></li>
										<li><a class="dropdown-item" href="#">Another action</a></li>
										<li><a class="dropdown-item" href="#">Something else here</a></li>
									</ul>
								</div>
							</li>
							<li class=""> <a href="{{ url('/tickets') }}" class="ticket-btn"> <i
										class="fa-solid fa-ticket-simple"></i>
									TICKETS</a> </li>
							<li class="bordered">
								<div class="right-bar">
									<div class="sinlge-bar shopping cart-icn ic-none">
										@include('theme.default.components.mini-cart')
									</div>
									<a href="{{ url('/shop') }}"></i> SHOP</a>
								</div>
							</li>
							@if(!Auth::check())
							<li> <a href="{{ url('/sign_in') }}">LOGIN <i class="fa-solid fa-arrow-right"></i> </a>
							</li>
							@else
							<li>
								<a title="My Account" href="{{ url('/my_account') }}">
									My Account
								</a>
							</li>
							@endif
						</ul>
						<!-- <p class="proud">Proud member of MASL2 and MASL3</p> -->
					</div>
				</div>
				<div class="site-logo">
					<img src="{{ asset('public/theme/certified_lions/images/logo-4.png') }}" alt="">
				</div>
			</div>
		</section>
	</header>
	<!--/ End Header -->

	@yield('content')

	<!-- Quick View Shop -->
	<!-- <div class="modal fade" id="quickShop" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
							aria-hidden="true"></span></button>
				</div>
				<div class="modal-body">


				</div>
			</div>
		</div>
	</div> -->
	<!-- Quick View Shop end -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<section class="footer-sec">
			<div class="container">
				<div class="footer-txt">
					<h5>Certified lions fc | Okhlahoma City Club | Phone: 123-456-7891</h5>
					<p> <a href="{{url('/terms-condition')}}">Terms & Conditions</a> | <a
							href="{{url('/privacy-policy')}}">Privacy
							Policy</a> </p>
				</div>
			</div>
		</section>
	</footer>
	<!-- /End Footer Area -->



	<!-- Jquery -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

	<script src="{{ asset('public/theme/default/js/jquery.min.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-migrate-3.0.0.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/jquery-ui.min.js') }}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('public/theme/default/js/popper.min.js') }}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('public/theme/default/js/bootstrap.min.js') }}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('public/theme/default/js/slicknav.min.js') }}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('public/theme/default/js/owl-carousel.js') }}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('public/theme/default/js/magnific-popup.js') }}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('public/theme/default/js/waypoints.min.js') }}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('public/theme/default/js/finalcountdown.min.js') }}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('public/theme/default/js/nicesellect.js') }}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('public/theme/default/js/flex-slider.js') }}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('public/theme/default/js/scrollup.js') }}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('public/theme/default/js/onepage-nav.min.js') }}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('public/theme/default/js/easing.js') }}"></script>

	<script src="{{ asset('public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js') }}"></script>

	<script src="{{ asset('public/theme/default/js/typeahead.bundle.js') }}"></script>

	<script src="{{ asset('public/backend/assets/js/print.js') }}"></script>

	<!-- Active JS -->
	<script src="{{ asset('public/theme/default/js/active.js?v=1.2') }}"></script>

	<script src="{{ asset('public/theme/certified_lions/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/theme/certified_lions/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/theme/certified_lions/js/slick.js') }}"></script>
	<!--<script  src="js/jquery.fancybox.min.js"></script>-->
	<script src="{{ asset('public/theme/certified_lions/js/wow.js') }}"></script>
	<script src="{{ asset('public/theme/certified_lions/js/functions.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

	<script>
		AOS.init();
	</script>

	<script>
		/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
		function openNav() {
			document.getElementById("mySidebar").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		}

		/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
		function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}
	</script>
	<script>
    document.addEventListener("DOMContentLoaded", function() {
        Fancybox.bind("[data-fancybox]", {
            // Optional FancyBox settings
            Thumbs: {
                autoStart: true, // Enable thumbnails
            },
        });
    });
</script>

	<!-- Custom JS -->
	@yield('js-script')
</body>

</html>