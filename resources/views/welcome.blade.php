{{-- @extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome to Argon Dashboard FREE Laravel Live Preview.') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    <div class="container mt--10 pb-5"></div>
@endsection --}}



@extends('pages.app')
<!-- header -->
@section('pagetitle','Fix My Device')
<!-- main image slider container -->
@section('content')
<section class="slide-window">
	<div class="slide-wrapper">

		<div class="slide">
			<div class="slide-caption text-center">
			   <h2 class="text-uppercase">Your<span> Tech </span>Friend</h2>
			   <p class="my-4">Fix My Device is the technology friend you always wanted to have in your contact list.</p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
		</div>
		{{-- <div class="slide slide2" style="width:200%;">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase">Modern <span>Technology </span></h3>
			   <p class="my-4">You do not have to feel technologically lacking any more!</p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
		</div> --}}
		{{-- <div class="slide slide3">
			<div class="slide-caption text-center">
				<h3 class="text-uppercase">Clean <span> Layout</span></h3>
			   <p class="my-4">IT Gateway solves all your technology related issues - for your parents, your kids, for you or anybody in the family or your office.</p>
			   <div class="read">
					<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Read More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>
			</div>
		</div> --}}
	{{-- </div> --}}
	{{-- <div class="slide-controller">
		<div class="slide-control-left">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
		<div class="slide-control-right">
			<div class="slide-control-line"></div>
			<div class="slide-control-line"></div>
		</div>
	</div> --}}
</section>



<!-- end of main image slider container -->

<!-- welcome -->
<section class="Welcome py-5">
	<div class="container py-sm-5">
		<div class="welcome-grids row">
			<div class="col-lg-6 mb-lg-0 mb-5">
				<h3 class="mt-lg-4">What Fix My Device can do for you?</h3>
				<p class="my-4">You do not have to feel technologically lacking any more!
                    Fix My Device solves all your technology related issues - for your parents, your kids, for you or anybody in the family or your office.
                   </p>
				<p class="mb-4"> You never could give time to your parents/ family members to sort out their issues with YouTube, Hotstar/netflix, Whatsapp or Facebook, now Fix My Device is there for them at a call.</p>
				<div class="read">
					<a href="about">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
				</div>
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

<!-- welcome bottom -->
<section class="Welcome-bottom">
	<div class="bs-slider-overlay">
		<div class="container">
			<div class="welcome-bottom-grids row">

				<!-- Counter -->
				<div class="col-lg-6 p-sm-5 p-4 welcome_left Features-bottom">
					<div class="layer p-sm-5 p-4 welcome_left_inner agile-info">
							<div class="agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span class="fab fa-algolia" aria-hidden="true"></span>
									<h3>Projects</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter">436</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span class="fab fa-asymmetrik" aria-hidden="true"></span>
									<h3>Awards Won</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter">147</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="mt-sm-5 mt-3 agileits_w3layouts_about_counter_left w3-agile-grid">
								<div class="countericon">
									<span class="fas fa-bug" aria-hidden="true"></span>
									<h3>Professionals</h3>
								</div>
								<div class="counterinfo agile-info">
									<p class="counter">218</p>
								</div>
								<div class="clearfix"> </div>
							</div>
					</div>
				</div>
				<!-- //Counter -->
				<div class="col-lg-6 p-sm-5 p-4 mt-lg-5 mt-0 welcome_bottom_right">
					<h3>Some of our Accomplishments</h3>
					<p class="my-4">We are growing day by day and offer wide range of services for Technical Support at your Home and Office</p>
					<div class="read">
						<a href="#" data-toggle="modal" data-target="#exampleModalCenter1" role="button">Click More <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //welcome bottom -->

<!-- Features -->
<section class="features py-5">
	<div class="container py-sm-5">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Our </span> Services  </h3>
			<p class="para mb-5 text-center">Here are the list of services we work upon</p>
		</div>
		<div class="feature-grids row">
			<div class="col-lg-3 col-md-6">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/1.png" alt="" width=100px height=100px>
					<h3 class="my-3">Your Laptop not switching on</h3>
					<p>Blue dump, operating system error, Repeated reboot, Battery issues</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-md-0 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/2.png" alt="" width=100px height=100px>
					<h3 class="my-3">WIFI not working</h3>
					<p>Extender out of range, signal weak and keeps dropping, ISP issue, Internet not working.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/3.png" alt="" width=100px height=100px>
					<h3 class="my-3">Antivirus</h3>
					<p>Protect banking passwords, Confidential photos, Performance issue, Virus removal, Protect banking statement.</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/4.png" alt="" width=100px height=100px>
					<h3 class="my-3">Parental Control</h3>
					<p>Safe browsing, Block unwanted sites, Help configuring systems</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/5.png" alt="" width=100px height=100px>
					<h3 class="my-3">Data Recovery Services</h3>
					<p>Lost files, Deleted Files, Crashed hard disc, Migrate between devices</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-sm-5 mt-4">
				<div class="f1 p-sm-5 p-4">
					<img src="images/icons/6.jpg" alt="" width=100px height=100px>
					<h3 class="my-3">Data Backup Services</h3>
					<p>Sync data and photo of all family, Protect confidential and critical data and photos, cloud access</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-sm-5 mt-4">
					<div class="f1 p-sm-5 p-4">
						<img src="images/icons/7.jpg" alt="" width=100px height=100px>
						<h3 class="my-3">Upgrade Laptop</h3>
						<p>Get Proper configuration for use, Get recommendation on models, buyback</p>
					</div>
			</div>
			<div class="col-lg-3 col-md-6 mt-sm-5 mt-4">
					<div class="f1 p-sm-5 p-4">
						<img src="images/icons/8.png" alt="" width=100px height=100px>
						<h3 class="my-3">Troubleshoot Connectivity issue</h3>
						<p>WIFI extension, Bandwidth sizing, pricing plans recommendation, Configuration of access control</p>
					</div>
			</div>
		</div>
	</div>
</section>
<!-- //Features -->

<!-- Skills -->
<section class="bottom-last">
	<div class="bottom-bg py-5 bs-slider-overlay text-left">
		<div class="container py-md-5">
			<div class="heading pb-4">
				<h3 class="heading mb-2 text-center text-white"> <span>Our </span> Skills </h3>
				<p class="para mb-5 text-center"></p>
			</div>
			<div class="row grids">
				<div class="col-lg-6">
					<h4 class="title">Proffessional Skills</h4>
					<p class="my-4">Technical skills are practical abilities and specialized knowledge needed to perform tasks in technical roles in IT, mechanics, engineering, science, finance, sales, etc. Technical skills include the abilities to use specialized software or operate specific machinery, equipment, and tools.</p>
					<div class="bnr-button">
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#exampleModal">
							<i class="fas fa-play"></i>
						</button> <span class="text-white ml-2">Watch Video </span>
					</div>
				</div>
				<div class="col-md-6 mt-lg-0 mt-5">
					<div class="progress-one">
						<h4 class="progress-tittle">Computer assembling and maintenance.</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="progress-one my-4">
						<h4 class="progress-tittle">Troubleshooting hardware and software problems.</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 95%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="progress-one">
						<h4 class="progress-tittle">Managing and Maintaining the Servers, PC’s, Routers and Switches.</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 93%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="progress-one my-4">
						<h4 class="progress-tittle">Configuring, Managing and Maintaining Networking Equipment.</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 87%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="progress-one">
						<h4 class="progress-tittle">Installed and configured DHCP Client/Server</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<div class="progress-one my-4">
						<h4 class="progress-tittle">Installed and configured workstations for IP/IPX based LAN</h4>
						<div class="progress">
							<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 97%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</div>
</section>
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
<div class="serv_bottom">
	<div class="bottom-bg py-5 bs-slider-overlay text-left">
	<div class="container py-sm-3">
		<div class="d-md-flex justify-content-around pb-smm-4">
			<h4 class="agile-ser_bot text-capitalize text-white">Empower yourself Technologically</h4>
			 <div class="read">
				<a href="#" data-toggle="modal" data-target="#exampleModalCenter2">Sign Up<span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
			</div>
		</div>
		<hr>
		<h5 class="text-center text-uppercase text-white pt-sm-4">everything you need is here</h5>
	</div>
</div>
</div>
<!-- //Skills -->

<!-- team
<section id="myteam" class="team py-5">
	<div class="container py-md-5">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Our </span> Team </h3>
			<p class="para mb-5 text-center">Meet our Team.</p>
		</div>
		<div class="row team-row">
			<div class="col-sm-4"></div>
			<div class="col-md-4 col-sm-6 team-wrap">
				<div class="team-member text-center">
					<div class="team-img">
						<img src="images/team/umar.jpg" alt="dqureshiumar">
						<div class="overlay-team">
							<div class="team-details text-center">
								<div class="socials mt-20">
									<a href="https://facebook.com/dqureshiumar12" target="blank">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="https://twitter.com/dqureshiumar" target="blank">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="https://instagram.com/_umar_qureshi_" target="blank">
										<i class="fab fa-instagram"></i>
									</a>
									<a href="https://www.linkedin.com/in/umar-qureshi-a633b5151/" target="blank">
										<i class="fab fa-linkedin"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<h6 class="team-title">Umar Qureshi</h6>
					<span>IT Engineer</span>
				</div>
			</div>



			<!-- end team member -->
			{{-- <div class="col-md-4 col-sm-6 team-wrap mt-sm-0 mt-5">
				<div class="team-member text-center">
					<div class="team-img">
						<img src="images/team3.jpg" alt="">
						<div class="overlay-team">
							<div class="team-details text-center">
								<div class="socials mt-20">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<h6 class="team-title">Aunto Apu</h6>
					<span>android devloper</span>
				</div>
			</div>
			<!-- end team member -->

			<div class="col-md-4 col-sm-6 team-wrap mt-md-0 mt-5">
				<div class="team-member last text-center">
					<div class="team-img">
						<img src="images/team2.jpg" alt="">
						<div class="overlay-team">
							<div class="team-details text-center">
								<div class="socials mt-20">
									<a href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
									<a href="#">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
									<a href="#">
										<i class="fab fa-instagram"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<h6 class="team-title">Jagir Alam</h6>
					<span>Software engineer </span>
				</div>
			</div>
			<!-- end team member -->
		</div>
	</div>
</section>--}}
<!-- //team -->

<!-- brands -->

<!-- //brands -->

<!-- footer -->

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
    <!--//model-form-->

	<!-- video Modal Popup -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Introduction Video</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<iframe src="https://player.vimeo.com/video/33531612"></iframe>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!-- //video Model Popup -->

	<!-- Vertically centered Modal -->
	<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><i class="fab fa-cloudversify"></i> Fix My Device</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<div class="modal-body">
				<img src="images/bg.jpg" class="img-fluid mb-3" alt="Modal Image" />
				Register your issues with us and we will get back to you as you will raise an issue related to your device.
				We also fix devices which malfunction and replace old devices with new devices under terms and conditions.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	  </div>
	</div>
	<!-- //Vertically centered Modal -->

	<!-- js -->
@endsection
