<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('pagetitle')</title>
<link rel="icon" href="images/favico.png" type="image/png">


	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Flex Art Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- banner slider css -->
	<link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
	<!-- //banner slider css -->
	
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link href="css/owl.theme.css" rel="stylesheet">
	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!--//web font-->

</head>

<body>

<!-- header -->
@auth
	@include('pages.navbar.authuser')
@endauth
@guest
	@include('pages.navbar.guest')	
@endguest
@yield('content')
{{-- <section class="partners bg-light py-5">
	<div class="container">
		<div class="row partner-grids text-center">
			<div class="col-md-2 col-4">
				
					<img src="images/img/bmw-infinity.png" alt="">
				
			</div>
			<div class="col-md-2 col-4">
				
					<img src="images/img/logon.jpg" alt="">
				
			</div>
			<div class="col-md-2 col-4">
				
					<img src="images/img/navnit.jpg" alt="">
				
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				
					<img src="images/img/npr.png" alt="">
				
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				
					<img src="images/img/PivotRoots_logo.png" alt="">
				
			</div>
			<div class="col-md-2 col-4 mt-md-0 mt-3">
				
					<img src="images/img/logo.gif" alt="">
				
			</div>
		</div>
	</div>
</section> --}}
<footer class="footer py-5">
	<div class="container py-sm-4">
		<div class="row">
			<div class="col-lg-4 col-md-6 footer-top">
				<h3 class="mb-4 pb-3 w3f_title">Subscribe Us</h3>
				<p>By subscribing to our mailing list you will always get latest news, offers and updates from us.</p>
				<form action="{{ route('subscribe') }}" method="post">
					@csrf
					<input type="email" name="subscribe" placeholder="Enter your email..." required="">
					<button type="submit" class="btn1"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
					<div class="clearfix"> </div>
				</form>

			</div>
			<div class="col-lg-2  col-md-6 footv3-left mt-md-0 mt-5">
				<h3 class="mb-4 pb-3 w3f_title">Navigation</h3>
				<ul class="list-agileits">
					<li>
						<a href="/">
							Home
						</a>
					</li>
					<li class="my-2">
						<a href="about">
							About Us
						</a>
					</li>
					{{-- <li class="my-2">
						<a href="projects.html">
							Projects
						</a>
					</li> --}}
					{{-- <li class="mb-2">
						<a href="features.html">
							Features
						</a>
					</li> --}}
					<li>
						<a href="contact">
							Contact Us
						</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
				<h3 class="mb-4 pb-3 w3f_title">Contact Us</h3>
				<div class="fv3-contact">
					<span class="fas fa-envelope-open mr-2"></span>
					<p>
						<a href="mailto:dqureshiumar@gmail.com">Mail Us</a>
					</p>
				</div>
				<div class="fv3-contact my-3">
					<span class="fas fa-phone-volume mr-2"></span>
					<a href="tel:919702310212" style="color:white;">Call Us</a>
				</div>
				<div class="fv3-contact">
					<span class="fas fa-home mr-2"></span><p>Mumbai - 95
						</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 footerv2-w3ls mt-lg-0 mt-5">
				<h3 class="mb-4 w3f_title pb-3">Get In Touch</h3>
				<p>Our Social Links</p>
				<ul class="social-iconsv2 agileinfo mt-4">
					<li>
						<a href="https://www.facebook.com/dqureshiumar12" target="blank">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/dqureshiumar" target="blank">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://github.com/dqureshiumar" target="blank">
							<i class="fab fa-github"></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/" target="blank">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //footer bottom -->
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="cpy-right text-center">
	<p>© <script>document.write(new Date().getFullYear())</script> Fix My Device. All rights reserved | Cooked With <i class="fa fa-heart" aria-hidden="true"></i>
		by <a href="http://dqureshiumar001.000webhostapp.com" target="blank"> Umar Qureshi</a>
	</p>
</div>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<link rel="stylesheet" href="css/css/floating-wpp.css">
<script type="text/javascript" src="css/css/floating-wpp.js"></script>
<!-- search overlay -->
<script src="js/modernizr-2.6.2.min.js"></script> 
<!-- //search overlay -->

<!--search jQuery-->
<script src="js/classie-search.js"></script>
<script src="js/demo1-search.js"></script>
<!--//search jQuery-->

<!-- dropdown nav -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });

    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '919702310212',
            popupMessage: 'Hello, how can we help you?',
            message: "I'd like to ...",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: '#26d367',
            buttonImage: '<img src="images/whatsapp.svg" />'
        });
    });
</script>
<!-- //dropdown nav -->
<div id="myButton"></div>
<!-- banner slider js -->
<script src="js/minimal-slider.js"></script>
<!-- //banner slider js -->

<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="js/waypoints.min.js"></script> 
<script src="js/counterup.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->

<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){		
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */
                            
        $().UItoTop({ easingType: 'easeOutQuart' });
                            
        });
</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->
<script src="js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
	<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({

			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 1,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
	}); 
	</script>
</body>
</html>