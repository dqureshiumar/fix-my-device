@extends('pages.app')
<!-- header -->
@section('pagetitle','About | Fix My Device')
<!-- main image slider container -->
@section('content')
<!-- //header -->

<!-- inner page banner -->
<section class="inner-page-banner">
	<div class="page-heading text-center">
		<h2>About Page</h2>
		<span class="section_1-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i> Home</a> <span>/ About page</span></span>
	</div>
</section>
<!-- //inner page banner -->

<!-- welcome -->
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row">
			<div class="col-lg-6 mb-lg-0 mb-5">
				<h3 class="mt-lg-4">What Fix My Deivce can do for you?</h3>
				<p class="my-4">You do not have to feel technologically lacking any more!
                    FIx My Device solves all your technology related issues - for your parents, your kids, for you or anybody in the family or your office.   
                   </p>
				<p class="mb-4"> You never could give time to your parents/ family members to sort out their issues with YouTube, Hotstar/netflix, Whatsapp or Facebook, now Fix My Device is there for them at a call.</p>
				{{-- <div class="read">
					<a href="about">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>	 --}}
			</div>
			<div class="col-lg-3 col-md-4 col-6 pr-1 welcome-image">
				<img src="images/a1.jpg" class="img-fluid" alt="" />
			</div>	
			<div class="col-lg-3 col-md-4 col-6 pl-1 welcome-image">
				<img src="images/a2.jpg" class="img-fluid" alt="" />
			</div>
		</div>	
	</div>	
</section>
<!-- welcome -->

<!-- what we do -->
<section class="Welcome py-5">
	<div class="container py-sm-3">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>What </span> We Do </h3>
			<p class="para mb-5 text-center">We provide economic advantages to customer who are facing problem for an ideal combination of hardware, software, and services.</p>
		</div>	
		<div class="row">
			<div class="col-lg-6 about-img">
				<img src="images/3.jpg" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 about-right mt-lg-0 mt-5">
				<h3>what we do</h3>
				<h4></h4>
				<p class="my-4">Fix My Device provides Customized IT Support Solutions to fit your business and pocket. We suggest our clients to “Focus on what you do best, we’ll handle the rest”. IT support services are required to build a robust system, control maintenance costs, improve end-user experience and upgrade hardware and software to facilitate responsiveness.</p>
				<!--/about-in-->
				<div class="row">
					<div class="col-sm-6 about-in text-left">
						<div class="card">
							<div class="card-body">
								<i class="fas fa-anchor"></i>
								<h5 class="card-title"> Service</h5>
								<p class="card-text">
								</p>
							</div>
						</div>

					</div>
					<div class="col-sm-6 about-in text-left">
						<div class="card">
							<div class="card-body">
								<i class="fa fa-wrench"></i>
								<h5 class="card-title">Repair</h5>
								<p class="card-text">
								</p>
							</div>
						</div>

					</div>
				</div>
				<!--/about-in-->
			</div>
		</div>
	</div>	
</section>
<!-- what we do -->

<!-- /Features -->
<section class="banner-bottom py-lg-5 py-md-5 py-3" id="Features">
	<div class="container">
		<div class="inner-sec py-lg-5 py-3">
			<div class="heading pb-4">
				<h3 class="heading mb-2 text-center"> <span>Join </span> Us </h3>
				<p class="para mb-5 text-center">We Provide best Services for all your IT problems</p>
			</div>	
			<div class="row middle-grids">
				<div class="col-lg-3 col-sm-6 about-in middle-grid-info text-center">
					<div class="card">
						<div class="card-body">
							<i class="fa fa-handshake mb-2"></i>
							<h5 class="card-title text-uppercase my-3">Remote Support</h5>
							<p class="card-text">
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-md-0 mt-3 about-in middle-grid-info text-center">
					<div class="card">
						<div class="card-body">
							<i class="fas fa-reply mb-2"></i>
							<h5 class="card-title text-uppercase my-3">Quick response to your issues</h5>
							<p class="card-text">
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 about-in middle-grid-info text-center">
					<div class="card">
						<div class="card-body">
							<i class="fas fa-map-marker mb-2"></i>
							<h5 class="card-title text-uppercase my-3">One point contact to all your tech support</h5>
							<p class="card-text">
							</p>
						</div>
					</div>
				</div>
				 <div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 about-in middle-grid-info active text-center">
					<div class="card">
						<div class="card-body">
							<i class="fas fa-user-circle mb-2"></i>
							<h5 class="card-title text-uppercase my-3">Trained and professional team</h5>
							<p class="card-text">
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Features -->
	
<!-- //brands -->


<!-- //copyright -->

 <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" aria-describedby="emailHelp" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required="" autofocus>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="{{ __('Password') }}" required="">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button> OR <a href="{{url('/redirect')}}" class="btn btn-primary submit mb-4" style="color:white">Login With Google</a>
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
						<form action="{{ route('register') }}" method="post">
							@csrf
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>Name</label>

								<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder="{{ __('Name') }}" required="">
								@if ($errors->has('name'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                <label>Email</label>
								<input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder="{{ __('Email') }}" required="">
								@if ($errors->has('email'))
								<span class="invalid-feedback" style="display: block;" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <label class="mb-2">Password</label>
								<input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password1" name="password" placeholder="{{ __('Password') }}" required="">
								@if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button> OR <a href="{{url('/redirect')}}" class="btn btn-primary submit mb-4" style="color:white">Login With Google</a>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->


	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
    <script src="js/modernizr-2.6.2.min.js"></script>

	 <!--search jQuery-->
    <script src="js/classie-search.js"></script>
    <script src="js/demo1-search.js"></script>
    <!--//search jQuery-->

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
    </script>
    <!-- //dropdown nav -->


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

@endsection