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
						<h1>Pricing Plan</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Pricing </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pricing-area upper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="sub-title">
							<h2>Price Table with <span>Featured</span></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-pricing-box wow fadeInLeft">
						<div class="pricing-inner-box">
							<div class="single-pricing-content">
								<h3>work Projects</h3>
								<p>Rapidiously evolve pandemic experien dramatically administrate</p>
								<div class="pricing-plan-list">
									<ul>
										<li>Architecture hourly Rate</li>
										<li>Combinations</li>
										<li>Architectural Plans</li>
										<li>Soil Testing & Repair</li>
										<li>Engineering Supports</li>
									</ul>
								</div>
								<div class="pricing-dolar">
									<h3>$45.000</h3>
								</div>
								<div class="pricing-button">
									<a href="#">Place Order</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-pricing-box style_two wow fadeInUp">
						<div class="pricing-inner-box">
							<div class="single-pricing-content">
								<h3>SKETCH WORKS</h3>
								<p>Rapidiously evolve pandemic experien dramatically administrate</p>
								<div class="pricing-plan-list">
									<ul>
										<li>Architecture hourly Rate</li>
										<li>Combinations</li>
										<li>Architectural Plans</li>
										<li>Soil Testing & Repair</li>
										<li>Engineering Supports</li>
									</ul>
								</div>
								<div class="pricing-dolar">
									<h3>$45.000</h3>
								</div>
								<div class="pricing-button">
									<a href="#">Place Order</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-pricing-box wow fadeInRight">
						<div class="pricing-inner-box">
							<div class="single-pricing-content">
								<h3>DESIGN PROJECT</h3>
								<p>Rapidiously evolve pandemic experien dramatically administrate</p>
								<div class="pricing-plan-list">
									<ul>
										<li>Architecture hourly Rate</li>
										<li>Combinations</li>
										<li>Architectural Plans</li>
										<li>Soil Testing & Repair</li>
										<li>Engineering Supports</li>
									</ul>
								</div>
								<div class="pricing-dolar">
									<h3>$45.000</h3>
								</div>
								<div class="pricing-button">
									<a href="#">Place Order</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-area-inner">
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