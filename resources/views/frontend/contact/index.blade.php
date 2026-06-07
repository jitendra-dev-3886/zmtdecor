@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')
	<!-- loder -->
	 <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div> 
	
	@include('frontend.layouts.sidebar')

	<div class="breadcumb-area d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcumb-content">
						<h1>Contact Us</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Contact Us </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-area-inner upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="single-contact-box upper wow fadeInRight">
						<div class="section-title upper">
							<div class="sub-title">
								<h2>Collaborate with Our <br> Support Team"</h2>
							</div>
						</div>
						<div class="contact_from_box">
							<form action="#" method="POST" id="dreamit-form">
								<div class="row">
									<div class="col-lg-6">
										<div class="form_box">
											<input type="text" name="name" placeholder="Full Name">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form_box">
											<input type="email" name="email" placeholder="Your Email">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form_box">
											<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Message"></textarea>
										</div>
										<div class="quote_button">
											<button class="btn" type="submit">SUBMIT NOW</button>
										</div>
									</div>
								</div>
							</form>
							<div id="status"></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-contact-box wow fadeInLeft">
						<div class="single-contact-thumb">
							<img src="assets/images/resource/cont-ri.html" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <br>
	
	<div class="map-section">
		<div class="container">
			<div class="row mg-pt">
				<div class="col-lg-12 p-0">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.8794777816197!2d55.26958167483884!3d25.24098402992677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f430094126ab7%3A0x3aa15db9f5fc8a90!2sHamdan%20Award%20Complex!5e0!3m2!1sen!2sin!4v1780770489310!5m2!1sen!2sin"
						width="1920" height="520" style="border:0;" allowfullscreen="" aria-hidden="false"
						tabindex="0"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="copyright-section d-flex align-items-center"> 
		<div class="container">
			
		</div>
	</div>	

	<div class="search-popup">
		<button class="close-search style-two"><i class="fa fa-times"></i></button>
		<button class="close-search"><i class="fas fa-arrow-up"></i></button>
		<form method="post" action="#">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>


	<div class="prgoress_indicator">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	
	<div class="curser"></div>
	<div class="curser2"></div> 

@endsection