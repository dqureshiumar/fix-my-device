@extends('pages.app')
@section('pagetitle','Select the type of Service')
@section('content')
<br> <br>
<section class="features py-5">
	<div class="container py-sm-5" >
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Our </span> Services </h3>
			<p class="para mb-5 text-center">Are You Signing Up For Your</p>
        </div>
        
		<div class="feature-grids row">
                <div class="col-lg-1"></div>
			<div class="col-lg-4 col-md-6" onclick="location.href='/home-reg'">
				<div class="f1 p-sm-5 p-4">
					<i class="fas fa-arrow-right" aria-hidden="true"></i>
					<h3 class="my-3">Home</h3>
					<img src="images/home.jpeg" width=200px height=200px>
				</div>
		</div><div class="col-lg-1"></div>
		<div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4" onclick="location.href='/home-reg'">
				<div class="f1 p-sm-5 p-4">
					<i class="fas fa-arrow-right" aria-hidden="true"></i>
					<h3 class="my-3">Office</h3>
					<img src="images/office.jpg" width=200px height=200px>
				</div>
		</div>
    </div>
</section>

@endsection