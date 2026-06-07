@extends('frontend.layouts.master')

@section('title', 'Projects')

@section('content')
	
	<!-- loder -->
	 <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div> 
	
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black"></div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						<i class="far fa-times-circle"></i>
					</a>
				</div>
				<div class="sidebar-textwidget">
					<!-- Sidebar Info Content -->
					<div class="sidebar-info-contents">
						<div class="content-inner">
							<div class="nav-logo">
								<a href="index-2.html"><img src="assets/images/logo.png" alt="sid img" ></a>
							</div>
							<div class="row padding-two">
								<div class="col-lg-6">
									<div class="content-thumb-box">
										<img src="assets/images/resource/insta-4.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="content-thumb-box">
										<img src="assets/images/resource/insta-5.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="content-thumb-box">
										<img src="assets/images/resource/insta-2.jpg" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="content-thumb-box">
										<img src="assets/images/resource/insta-1.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="list-style-one">
									<li><i class="bi bi-envelope"></i>Chicago 12, Melborne City, USA</li>
									<li><i class="bi bi-envelope"></i>(+001) 123-456-7890</li>
									<li><i class="bi bi-envelope"></i>Example.com</li>
									<li><i class="bi bi-envelope"></i>Week Days: 09.00 to 18.00 Sunday: Closed</li>
								</ul>
							</div>
							<!-- Social Box -->
							<ul class="social-box">
								<li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
								<li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
								<li class="linkedin"><a href="#" class="fab fa-twitter"></a></li>
								<li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
								<li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
							</ul>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-minimal-area upper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="minimal-title">
						<h1>A Glimpse into Our Projects</h1>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="portfolio_nav">
						<div class="portfolio_menu">
							<ul class="menu-filtering">
								<li class="current_menu_item" data-filter="*"> All</li>
								<li data-filter=".physics"> Interior Decoration </li>
								<li data-filter=".chemistry"> Gypsum Partition </li>
								<li data-filter=".math"> Tiling </li>
								<li data-filter=".chemistry"> Painting </li>
																								
							</ul>
						</div>
					</div>
					<div class="minimal-shap bounce-animate3">
						<img src="assets/images/portfolio/mini-dots.html" alt="">
					</div>
				</div>
			</div>
			<div class="row image_load">
				<div class="col-lg-4 col-md-6 grid-item physics english">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/alsafa.jpg') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">AL SAFA</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html">VILLA 08</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item physics chemistry math">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">AL BAYADER</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> MUDON ARABELLA</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>	
							</div>							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry english">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">PALM JUMEIRAH </a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA NO 33</a></h3>
								</div>	
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>
							</div>						
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item math english">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">AL BARARI</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA NO 10</a></h3>
								</div>	
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>
							</div>							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item math physics">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">AL SUFOUH JUMERAH</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA NO 45</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>	
							</div>						
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry physics">
					<div class="case-study-single-box wow fadeInUp ">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">MUDON ARABELLA </a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA NO 224</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>	
							</div>							
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item chemistry english">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">J V C </a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA NO 20</a></h3>
								</div>	
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>
							</div>						
						</div>
					</div>
				</div>	
				<div class="col-lg-4 col-md-6 grid-item math physics">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">DFC ARABIAN</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> VILLA 12</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>	
							</div>						
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 grid-item physics chemistry math">
					<div class="case-study-single-box wow fadeInUp">
						<div class="case-study-thumb2">
							<img src="{{ asset('assets/images/project/villa2.png') }}" alt="">
						</div>
						<div class="case-study-contents">
							<div class="case-text">
								<div class="case-title style2">
									<span><a href="portfolio-details.html">KOA CANVAS WADI</a></span>
								</div>
								<div class="case-study-title style2">
									<h3> <a href="portfolio-details.html"> AL SAFA 3</a></h3>
								</div>
								<div class="case-study-icon">
									<i class="bi bi-arrow-right"></i>
								</div>	
							</div>							
						</div>
					</div>
				</div>			
			</div>
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
