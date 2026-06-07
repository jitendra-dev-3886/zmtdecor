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

	<div class="footer-section upper"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="widgets-company-info wow fadeInLeft">
						<div class="widgets-company-content">
							<div class="widgets-company-title">
								<h3>Get In Touch</h3>
							</div>
							<div class="widgets-company-icon-list">
								<ul>
									<li><i class="bi bi-telephone"></i> +980 123 (4567) 890</li>
									<li><i class="bi bi-envelope-open"></i> example@yahoo.com</li>
									<li><i class="bi bi-envelope-open"></i> 102/B Rd, Uttar Badda <br> Dhaka - 1212</li>
								</ul>
							</div>
						</div>
					</div>					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widgets-company-info-box wow fadeInUp">
						<div class="elaction-logo">
							<a class="logo_thumb" href="index-2.html" title="elaction">
								<img src="assets/images/logo-1.html" alt="images">
							</a>
						</div>
						<div class="company-info-desc">
							<p> Rapidiously evolve pandemic experiences and end Dramatically administrate inexpensive </p>
						</div>
						<div class="footer-icon-list">
							<ul>
								<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
								<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
							</ul>
						</div>
					</div>					
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="widgets-companys-infos wow fadeInRight">
						<div class="widgets-company-content">
							<div class="widgets-company-title">
								<h3>Newsletter</h3>
							</div>
							<div class="subscribes-box">
								<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
									<div class="subscribe_form-title">
										<h3>Subscribe Our Newsletter</h3>
									</div>
									<div class="subscribe_form">
										<div class="form_box">
											<input type="email" name="email" placeholder="Your E-mail">
										</div>
										<button type="submit" class="btns">Subscribe</button>
									</div>
								</form>
								<div id="status"></div>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="row mg-tp align-items-center">
				<div class="col-lg-12">
					<div class="copy-rights">
						<h4>© Copyright Arcke 2024. All Rights Reserved.</h4>
					</div>
					<div class="footer-shap bounce-animate3">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
					<div class="footer-shape dance">
						<img src="assets/images/resource/border.png" alt="">
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
	