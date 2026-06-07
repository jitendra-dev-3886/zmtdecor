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
						<h1>Blog Grid</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Blog Grid </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-area one upper grid">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInLeft">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-1.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">Top 10 Modern Building Design in Califronia, USA</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInUp">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-2.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">Best Equipment for Architecture and Interior Design</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInRight">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-3.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">5 Awesome and Beautiful House in Dhaka, Bangladesh</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInLeft">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-1.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">Top 10 Modern Building Design in Califronia, USA</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInUp">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-2.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">Best Equipment for Architecture and Interior Design</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box upper wow fadeInRight">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-3.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">5 Awesome and Beautiful House in Dhaka, Bangladesh</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
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
	