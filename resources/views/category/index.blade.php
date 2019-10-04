@extends('layouts.layout')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/styles/bootstrap-4.1.2/bootstrap.min.css') }}">
<link href="{{ asset('thevenue/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/plugins/OwlCarousel2-2.2.1/animate.css') }}">
<link href="{{ asset('thevenue/plugins/jquery-datepicker/jquery-ui.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('thevenue/plugins/jquery-timepicker/jquery.timepicker.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/styles/menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('thevenue/styles/menu_responsive.css') }}">
@endsection

@section('menu')
<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li><a href="index.html">home</a></li>
				<li><a href="about.html">about us</a></li>
				<li><a href="menu.html">menu</a></li>
			</ul>
		</div>
		<div class="menu_reservations_phone ml-auto">Reservations: +374 93 90 21 21</div>
	</div>
 @endsection

 @section('home')
 <div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('thevenue/images/menu.jpg') }}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">The Venue</div>
							<div class="home_title"><h1>The Menu</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection
    @section('Intro')

    <div class="themenu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle page_subtitle">Something new</div>
						<div class="section_title"><h1>Discover Our Menu</h1></div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('our menu')
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">№</th>
      <th scope="col">Cuisine</th>
      <th scope="col">Category</th>
      <th scope="col">Food</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($category as $cat)
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->name}}</td>
      <td>{{$cat->cuisine->name}}</td>
    </tr>
    @endforeach   
    
    <tr>
      <th scope="row"></th>
      <td></td>
    </tr>
  
  </tbody>
</table>

@endsection

@section('addfood')
<button type="button" class="btn btn-outline-success">Add Food</button>
@endsection







@section('footer')
<script src="{{ asset('thevenue/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('thevenue/styles/bootstrap-4.1.2/popper.js') }}"></script>
<script src="{{ asset('thevenue/styles/bootstrap-4.1.2/bootstrap.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/greensock/TimelineMax.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('thevenue/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('thevenue/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/colorbox/jquery.colorbox-min.js') }}"></script>
<script src="{{ asset('thevenue/plugins/jquery-datepicker/jquery-ui.js') }}"></script>
<script src="{{ asset('thevenue/plugins/jquery-timepicker/jquery.timepicker.js') }}"></script>
<script src="{{ asset('thevenue/js/menu.js') }}"></script>

@endsection