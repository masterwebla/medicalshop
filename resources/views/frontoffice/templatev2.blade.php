<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Montserrat:400,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/swiper.css')}}" type="text/css" />

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- Medical Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('frontoffice/css/medical/medical.css')}}" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="{{asset('frontoffice/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/medical/css/medical-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('frontoffice/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('frontoffice/medical/css/fonts.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('frontoffice/css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="{{asset('frontoffice/css/colors.php?color=1abc9c')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Medicalshop | @yield('titulo')</title>

	<style>
		.form-control.error { border: 2px solid red; }
	</style>

</head>

<body class="stretched" data-loader-html="<div id='css3-spinner-svg-pulse-wrapper'><svg id='css3-spinner-svg-pulse' version='1.2' height='210' width='550' xmlns='http://www.w3.org/2000/svg' viewport='0 0 60 60' xmlns:xlink='http://www.w3.org/1999/xlink'><path id='css3-spinner-pulse' stroke='#DE6262' fill='none' stroke-width='2' stroke-linejoin='round' d='M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210' /></svg></div>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		@include('frontoffice.secciones.topbar')
		<!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo"><img src="{{ asset('frontoffice/images/logo-medical.png')}}" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo"><img src="{{ asset('frontoffice/images/logo-medical@2x.png')}}" alt="Medicalshop Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					@include('frontoffice.secciones.menuv2')
					<!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->
		@yield('contenido')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		@include('frontoffice.secciones.footerv2')
		<!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('frontoffice/js/jquery.js') }}"></script>
	<script src="{{ asset('frontoffice/js/plugins.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('frontoffice/js/functions.js') }}"></script>

</body>
</html>