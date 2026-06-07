
@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

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
						<h1>Services</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Services </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="service-area-inner-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="main-title">
							<h1>Services</h1>
						</div>
						<div class="sub-title">
							<h2>Featured <span>Services</span></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mg-tp">
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInLeft">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-1.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>Interior Decoration</h3>
							<p>Transform spaces with interior decoration that blends design, color, texture, and lighting to create functional, stylish, and visually appealing environments.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>01</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInUp">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-2.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>Gypsum</h3>
							<p>Create smooth, lightweight gypsum finishes that enable modern false ceiling and wall designs with clean lines, flexibility, and a premium interior look.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>02</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInRight">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-3.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>Tiling</h3>
							<p>Enhance spaces with precision-installed tiling that offers durability, easy maintenance, and a clean, modern aesthetic finish. Seamlessly crafted for lasting elegance.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>03</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInLeft">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-4.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>Marble</h3>
							<p>Elevate interiors with premium marble surfaces that bring natural elegance, durability, and a timeless luxurious finish to any space.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>04</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInUp">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-5.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>Painting</h3>
							<p>Deliver flawless, premium wall finishes with high-quality painting that enhances color depth, and overall interior elegance.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>05</h1>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-inner-service-box wow fadeInRight">
						<div class="inner-service-tmb">
							<img src="assets/images/service/inner-icon-6.html" alt="">
						</div>
						<div class="inner-service-title">
							<h3>False Ceiling</h3>
							<p>Enhance interiors with a sleek false ceiling that improves lighting, hides utilities, and delivers a modern, premium architectural finish.</p>
						</div>
						<div class="inner-service-button">
							<a href="#">View Details</a>
						</div>
						<div class="inner-service-number">
							<h1>06</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pricing-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="main-title">
							<h1>PRICING PLAN</h1>
						</div>
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
							<div class="single-pricing-thumb">
								<img src="assets/images/pricing/pricing-1.html" alt="">
							</div>
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
							<div class="single-pricing-thumb">
								<img src="assets/images/pricing/pricing-2.html" alt="">
							</div>
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
							<div class="single-pricing-thumb">
								<img src="assets/images/pricing/pricing-3.html" alt="">
							</div>
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


<script>
$(document).ready(function(){

	$('.aa').counterUp({
	    delay: 10,
	    time: 1000
	});
});
</script>
@endsection
