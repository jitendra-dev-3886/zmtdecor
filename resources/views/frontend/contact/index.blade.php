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
	<style>
		/* CARD */
		.contact-modern-card {
			background: #ffffff;
			padding: 35px;
			border-radius: 12px;
			box-shadow: 0 10px 30px rgba(0,0,0,0.08);
			border-left: 4px solid #D7AB79; /* accent color */
			transition: 0.3s ease;
		}

		.contact-modern-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 15px 40px rgba(0,0,0,0.12);
		}

		/* TITLE */
		.contact-title h3 {
			font-size: 24px;
			font-weight: 700;
			margin-bottom: 10px;
			color: #222;
		}

		.contact-title p {
			font-size: 14px;
			color: #666;
			margin-bottom: 25px;
		}

		/* ITEM */
		.contact-item {
			display: flex;
			align-items: center;
			margin-bottom: 18px;
			padding: 10px 0;
			border-bottom: 1px solid #f1f1f1;
			transition: 0.3s;
		}

		.contact-item:last-child {
			border-bottom: none;
		}

		/* ICON */
		.contact-item .icon {
			width: 45px;
			height: 45px;
			background: #D7AB79;
			color: #fff;
			display: flex;
			align-items: center;
			justify-content: center;
			border-radius: 50%;
			font-size: 18px;
			margin-right: 15px;
			flex-shrink: 0;
		}

		/* TEXT */
		.contact-item .text span {
			display: block;
			font-size: 13px;
			color: #999;
		}

		.contact-item .text p {
			margin: 0;
			font-size: 15px;
			color: #333;
			font-weight: 500;
		}

		/* HOVER EFFECT */
		.contact-item:hover .icon {
			background: #222;
		}
	</style>
	<div class="contact-area-inner upper">
	<div class="container">
		<div class="row align-items-start">

			<!-- LEFT FORM -->
			<div class="col-lg-6 col-md-12">
				<div class="single-contact-box upper wow fadeInRight">

					<div class="contact_from_box">
						<form action="#" method="POST" id="dreamit-form">
							<div class="row">

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="name" placeholder="First Name">
									</div>
								</div>

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="first_name" placeholder="Last Name">
									</div>
								</div>

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="last_name" placeholder="Mobile Number">
									</div>
								</div>

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="email_address" placeholder="Email Address">
									</div>
								</div>

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="city" placeholder="City">
									</div>
								</div>

								<div class="col-lg-6 col-md-12">
									<div class="form_box">
										<input type="text" name="country" placeholder="Country">
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form_box">
										<textarea name="message" cols="76" rows="8" placeholder="Message"></textarea>
									</div>

									<div class="quote_button">
										<button class="btn" type="submit">SUBMIT NOW</button>
									</div>
								</div>

							</div>
						</form>
					</div>

				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="contact-modern-card">

					<!-- TITLE -->
					<div class="contact-title">
						<h3>Get In Touch</h3>
						<p>We’re here to help you. Contact us anytime through the details below.</p>
					</div>

					<!-- ITEMS -->
					<div class="contact-items">

					   <div class="contact-item">
							<div class="icon">
								<i class="fa fa-user me-1"></i>
							</div>
							<div class="text">
								<span>Name | Designation</span>
								<p>
									Mr. Taufeek Khan | General Manager <br>
								</p>
							</div>
						</div>

						<div class="contact-item">
							<div class="icon">
								<i class="bi bi-telephone"></i>
							</div>
							<div class="text">
								<span>Call Us</span>
								<p>+971 54 785 9111</p>
							</div>
						</div>

						<div class="contact-item">
							<div class="icon">
								<i class="bi bi-whatsapp"></i>
							</div>
							<div class="text">
								<span>WhatsApp</span>
								<p>+971 50 544 6944</p>
							</div>
						</div>

						<div class="contact-item">
							<div class="icon">
								<i class="bi bi-envelope"></i>
							</div>
							<div class="text">
								<span>Email</span>
								<p>zmtdecor@gmail.com</p>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<br>
	
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