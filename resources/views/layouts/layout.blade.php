<!DOCTYPE html>
<html lang="en">
<head>
<title>The Venue</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Venue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@yield('style')

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#">
								<div>The Venue</div>
								<div>restaurant</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a class="{{(Request::segment(1) == '') ? 'active' : ''}}" href="{{url('/')}}">home</a></li>
								<li><a class="{{(Request::segment(1) == '/about') ? 'active' : ''}}" href="{{url('/about')}}">about us</a></li>
								<li><a class="{{(Request::segment(1) == '/menu') ? 'active' : ''}}" href="{{url('/menu')}}">menu</a></li>
								@if(\Auth::check())
									<li class="menu-item"><a href="{{url('/logout')}}">Logout</a></li>
								@else
									<li class="menu-item"><a href="{{url('/login')}}">Login</a></li>
								@endif
							</ul>
							</ul>
						</nav>
						<div class="reservations_phone ml-auto">Reservations: +374 93 90 21 21</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->
    @yield('Menu')

	
	<!-- Home -->
    @yield('home')


	<!-- Intro -->
    @yield('Intro')
    @yield('our menu')
	

	@yield('addfood')

    @yield('Chefs')
    @yield('Testimonials')
	

	<!-- Video -->
    @yield('Video')
	

	<!-- Signature Dish -->
    @yield('Signature Dish')
	

	<!-- The Menu -->
    @yield('The Menu')
	

	<!-- Reservations -->
    @yield('Reservations')
	

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo">
						<div class="footer_logo_title">The Venue</div>
						<div class="footer_logo_subtitle">restaurant</div>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>

				<!-- Footer About -->
				<div class="col-lg-6 footer_col">
					<div class="footer_about">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio.</p>
					</div>
				</div>

				<!-- Footer Contact -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<ul>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">481 Creekside Lane Avila CA 93424</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">+53 345 7953 32453</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Address:</div></div>
								<div class="footer_contact_text">yourmail@gmail</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
@yield('footer')

</body>
</html>