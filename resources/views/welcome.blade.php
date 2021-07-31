<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

     <title>Med</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">

    </head>
    <body class="theme-warning bg-dark-body">

	<header>
		<nav hidden class="nav-white nav-transparent dark-overlay">
			<div class="nav-header">
				<a href="index.html" class="brand">
					Medical
				</a>
				<button class="toggle-bar">
					<span class="ti-menu"></span>
				</button>
			</div>




		</nav>
	</header>
<div id="particles-js" class="overflow-hidden z-0"></div>
	<section class="h-100vh position-relative z-1" data-overlay="5">
		<div class="container h-p100">
			<div class="row h-p100 align-items-center">
				<div class="col-lg-6 col-12">
					<div class="mt-80">
						<h1 class="box-title text-white mb-20 fw-600 fs-60">Student Medical Portal</h1>
						<h4 class="text-white-80 fw-300 mb-30">Caleb university portal and student medical platform</h4>
						<div class="d-flex gap-3 justify-content-start">
							<a href="{{ url('student/registration') }}" class="btn btn-primary">Student Registeration</a>
							<a href="{{ route('login') }}" class="btn btn-outline btn-primary text-white">Admin Login</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="text-center">
						<div class="owl-carousel owl-theme owl-btn-1 banner-slide" data-nav-arrow="false" data-nav-dots="false" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
							<div class="item">
								<img src="images/new/1.jpg" class="img-fluid" alt="" />
							</div>
							<div class="item">
								<img src="images/new/2.png" class="img-fluid" alt="" />
							</div>
							<div class="item">
								<img src="images/new/3.jpg" class="img-fluid" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- <section class="pt-50 pb-100 bg-dark-body overflow-xh" data-aos="fade-up">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-12 mb-50">
					<h1 class="mb-15 text-white text-center">What is Crypto Coin?</h1>
					<hr class="w-100 bg-primary">
				</div>
			</div>
			<div class="row mt-30 align-items-center">
				<div class="col-lg-6 col-12">
					<p class="text-white fs-18 mb-50">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
					<p class="text-white-50 fs-16 mb-50">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. </p>
					<div class="row">
						<div class="col-6">
							<ul class="text-white-50 fs-16 list list-unstyled mb-30">
								<li> <i class="fa fa-arrow-right"></i> Easy to use</li>
								<li> <i class="fa fa-arrow-right"></i> free support </li>
								<li> <i class="fa fa-arrow-right"></i> Awesome sliders </li>
							</ul>
						</div>
						<div class="col-6">
							<ul class="text-white-50 fs-16 list list-unstyled mb-30">
								<li> <i class="fa fa-arrow-right"></i> Email Design</li>
								<li> <i class="fa fa-arrow-right"></i> Easy to Customize pages</li>
								<li> <i class="fa fa-arrow-right"></i> Powerful Performance</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12 d-lg-block d-none">
					<div class="browserMockup browserMockup--perspectiveRight ms-70 position-relative">
						<div class="browserMockup__addressBar">
							<span class="browserMockup__button"></span>
							<span class="browserMockup__button"></span>
							<span class="browserMockup__button"></span>
							<span class="browserMockup__addressInput"></span>
						</div>
						<span class="homeScreenshot  homeScreenshot--mmo" style="background-position-y: 0px;"></span>
					</div>
				</div>
			</div>
		</div>
	</section>
	 --}}




	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<!-- Corenav Master JavaScript -->
    <script src="corenav-master/coreNavigation-1.1.3.js"></script>
    <script src="js/nav.js"></script>
	<script src="assets/vendor_components/OwlCarousel2/dist/owl.carousel.js"></script>
	<script src="assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>



</body>
</html>
