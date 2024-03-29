<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lawride Lawyer</title>
	<link rel="icon" href="{{ asset('thema/img/Fevicon.png') }}" type="image/png">

  <link rel="stylesheet" href="{{ asset('thema/vendors/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/fontawesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/linericon/style.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/owl-carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/owl-carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('thema/vendors/Magnific-Popup/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('thema/css/style.css') }}">
</head>
<body>
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+01432152323"><span class="align-middle"><i class="ti-mobile"></i></span>+37493606606</a></li>
          <li><a href="mailto:info@example.com"><span class="align-middle"><i class="ti-email"></i></span>Info@example.am</a></li>
        </ul>
        <ul class="header-top__social">
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-instagram"></i></a></li>
          <li><a href="#"><i class="ti-skype"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h {{(Request::segment(1) == '')}}" href="{{url('/home')}}"><img src="{{ asset('thema/img/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item {{(Request::segment(1) == '') ? 'active' : ''}}"><a class="nav-link" href="{{url('/home')}}">Home</a></li> 
              <li class="nav-item {{(Request::segment(1) == '/about') ? 'active' : ''}}"><a class="nav-link" href="{{url('/about')}}">About</a></li> 
              <li class="nav-item {{(Request::segment(1) == '/services') ? 'active' : ''}}"><a class="nav-link" href="{{url('/services')}}">Services</a>
              <li class="nav-item {{(Request::segment(1) == '/makes') ? 'active' : ''}}"><a class="nav-link" href="{{url('/makes')}}">Makes</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{url('/blog')}}">Blog</a></li>
                  <li class="nav-item"><a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{url('/blog-details')}}">Blog Details</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{url('/contact')}}">Contact</a></li>
              <li class="nav-item"><a class="nav-link {{(Request::segment(1) == '') ? 'active' : ''}}" href="{{url('/phone/add/')}}">Registration</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================ Hero Banner start =================-->      
  @yield('Hero Banner start')

  <!--================ Hero Banner end =================-->


  <!--================ Work Statics section start =================-->
  @yield('Work Statics section start')
  
  <!--================ Work Statics section end =================-->        

  <!--================ About section start =================-->
 
  <section class="d-lg-flex align-items-center section-margin--large">
  @yield('About section start')
   
  @yield('About section start1')
  </section>

  <!--================ About section end =================-->


  <!--================ Subject section start =================-->

  @yield('Subject section start')
  
  <!--================ Subject section end =================-->

  <!--================ Testimonial section start =================-->  
  @yield('Testimonial section start')

  <!--================ Testimonial section end =================-->  

  <!--================ Team section start =================-->
  @yield('Team section start')
  
  
  <!--================ Team section end =================-->  


  <!--================ Cta section start =================-->  
  @yield('Cta section start')
 
  <!--================ Cta section end =================-->  


  <!--================ Blog section start =================-->  

  @yield('Blog section start')

  <!--================ Blog section end =================-->  

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Agency</h6>
            <p>
              The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point 
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Feature</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Portfolio</a></li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>										
            </div>							
          </div>
        </div>							
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>
              For business professionals caught between high OEM price and mediocre print and graphic output.									
            </p>								
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                </div>									
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">InstaFeed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="{{ asset('thema/img/instagram/i1.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i2.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i3.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i4.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i5.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i6.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i7.jpg') }}" alt=""></li>
              <li><img src="{{ asset('thema/img/instagram/i8.jpg') }}" alt=""></li>
            </ul>
          </div>
        </div>						
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{ asset('thema/vendors/jquery/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('thema/vendors/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('thema/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('thema/vendors/Magnific-Popup/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('thema/js/jquery.ajaxchimp.min.js') }}"></script>
  <script src="{{ asset('thema/js/mail-script.js') }}"></script>
  <script src="{{ asset('thema/js/main.js') }}"></script>
</body>
</html>