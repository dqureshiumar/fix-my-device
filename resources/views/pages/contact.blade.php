@extends('pages.app')
<!-- header -->
@section('pagetitle','Contact Us | Fix My Device')
<!-- main image slider container -->
@section('content')

<!-- inner page banner -->
<section class="inner-page-banner">
	<div class="page-heading text-center">
		<h2>Contact Page</h2>
		<span class="section_1-breadcrumbs"><a href="/"><i class="fa fa-home home_1"></i> Home</a> <span>/ Contact</span></span>
	</div>
</section>
<!-- //inner page banner -->

<!-- contact -->		
<section class="contact py-5">
	<div class="container">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Contact </span> Us </h3>
			<p class="para mb-5 text-center">For any Queries Contact Us</p>
		</div>
		<div class="row contact-agileinfo">
			<div class="col-md-7 contact-right"> 
				<form action="contacted" method="post">
                    @csrf
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" class="email" name="email" placeholder="Email" required="">
					<input type="text" name="phone" placeholder="Phone" required="">
					<textarea name="message" placeholder="Message" required=""></textarea>
					<button type="submit" class="btn btn-primary submit mb-4">Submit</button>
				</form>
			</div>
			<div class="col-md-5 mt-md-0 mt-5 contact-left">
				<div class="address">
					<h5>Address:</h5>
					<p><span class="fa fa-home"></span>Mumbai-95, Maharashtra, India</p>
				</div>
				<div class="address address-mdl">
					<h5>Phone:</h5>
					<p><a href="tel:919702310212"><span class="fa fa-mobile"></span> Call Us</a></p>
					
				</div>
				<div class="address">
					<h5>Email:</h5>
					<p><span class="fa fa-envelope"></span> <a href="mailto:dqureshiumar@gmail.com">Mail Us</a></p>
					<p><span class="fa fa-globe"></span> <a href="http://dqureshiumar001.000webhostapp.com" target="blank">Visit</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="agileits-w3layouts-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124105.47197450769!2d72.75208498390357!3d19.200073222404967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b7fecd8cb891%3A0x1ede5dbdceb9b6b2!2sUmar%20Qureshi!5e0!3m2!1sen!2sin!4v1588517659004!5m2!1sen!2sin" allowfullscreen></iframe>
</section>
<!-- //contact -->	

<!-- //contact -->


<!-- //brands -->

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
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            OR <a href="{{url('/redirect')}}" class="btn btn-primary submit mb-4" style="color:white">Login With Google</a>
                            <p class="text-center pb-4">
                                <a href="#exampleModalCenter2" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account?</a>
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

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            OR <a href="{{url('/redirect')}}" class="btn btn-primary submit mb-4" style="color:white">Login With Google</a>
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