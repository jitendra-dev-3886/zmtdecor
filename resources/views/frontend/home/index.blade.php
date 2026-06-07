@extends('frontend.layouts.master')

@section('title', 'Home')

@section('content')

	 <div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div> 

	@include('frontend.layouts.sidebar')

	<div class="hero-slides owl-carousel">
		<div class="slider-area one upper d-flex align-items-center">
			<div class="container-fluid">
				<div class="row bor-der align-items-center">
					<div class="col-lg-6">
						<div class="single-slider-left" data-animation="fadeInUp" data-delay="100ms">
							<div class="single-slider">
								<div class="slider-content">
									<div class="slider-title">
										<h4>BUILDING IN DUBAI - UAE</h4>
										<h1>Build Your <span>Vision</span> <br> Creating Reality <br> New Design</h1>
									</div>
									<div class="slider-button">
										<a href="service-details.html">View Details </a>
									</div>
								</div>
								<div class="slider-number">
									<h1>01</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="singles-sliders" data-animation="fadeInDown" data-delay="100ms">
							<div class="slider-content">
								<div class="slider-thumb">
									<img src="assets/images/slider/hero-Img-1.png" alt="">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="slider-icon-box">
					<div class="slider-icon-list" data-animation="fadeInLeft" data-delay="100ms">
						<h5>FOLLOW US</h5>
						<ul>
							<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
							<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-area one upper d-flex align-items-center">
			<div class="container-fluid">
				<div class="row bor-der align-items-center">
					<div class="col-lg-6">
						<div class="single-slider-left" data-animation="fadeInUp" data-delay="100ms">
							<div class="single-slider">
								<div class="slider-content">
									<div class="slider-title">
										<h4>BUILDING IN DUBAI - UAE</h4>
										<h1>Build Your <span>Vision</span> <br> Creating Reality <br> New Design</h1>
									</div>
									<div class="slider-button">
										<a href="service-details.html">View Details </a>
									</div>
								</div>
								<div class="slider-number">
									<h1>02</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="singles-sliders" data-animation="fadeInDown" data-delay="100ms">
							<div class="slider-content">
								<div class="slider-thumb">
									<img src="assets/images/slider/hero-Img-2.png" alt="">
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="slider-icon-box">
					<div class="slider-icon-list" data-animation="fadeInLeft" data-delay="100ms">
						<h5>FOLLOW US</h5>
						<ul>
							<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
							<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="feature-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box wow fadeInLeft">
						<div class="feature-content">
							<h4>01</h4>
							<h3>Architecture Design</h3>
							<p>Conveniently streamline synergistic markets multidisciplinary products. Authoritatively wire bandwidth adaptive</p>
						</div>
						<div class="feature-button">
							<a href="service-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box wow fadeInUp">
						<div class="feature-content">
							<h4>02</h4>
							<h3>Interior Design</h3>
							<p>Conveniently streamline synergistic markets multidisciplinary products. Authoritatively wire bandwidth adaptive</p>
						</div>
						<div class="feature-button">
							<a href="service-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-feature-box wow fadeInRight">
						<div class="feature-content">
							<h4>03</h4>
							<h3>Furniture Design</h3>
							<p>Conveniently streamline synergistic markets multidisciplinary products. Authoritatively wire bandwidth adaptive</p>
						</div>
						<div class="feature-button">
							<a href="service-details.html">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tag-area one upper">
		<div class="container-fluid">
            <div class="marquee">
				<div class="marquee-block"> 
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>GLASS ALUMINIUM</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>JOINERY WORK</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span> STEEL WORK </span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>UPHOLSTERY WORK</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>INTERIOR FITOUT</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>BUILDING</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>INTERIOR DESIGN</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>CONSTRUCTION</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>LUXURY HOME</span></h6>
					</div>
				</div>
				<div class="marquee-block"> 
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>INTERIOR DESIGN</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>CONSTRUCTION</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>FURNITURES</span></h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>LUXURY HOME</span>&gt;</h6>
					</div>
					<!-- content-box -->
					<div class="content-box">
						<h6 class="title"><span>ARCHITECTURE</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>BUILDING</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>INTERIOR DESIGN</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>CONSTRUCTION</span></h6>
					</div>				
					<div class="content-box">
						<h6 class="title"><span>LUXURY HOME</span></h6>
					</div>
				</div>
		  	</div>
		</div>
	</div>

	<div class="about-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="main-title">
							<h1>About Us</h1>
						</div>
						<div class="sub-title">
							<h2>Discover ZMT’s <span>Story</span></h2>
						</div>
					</div>
					<div class="about-shape dance">
						<img src="assets/images/resource/border.png" alt="">
					</div>
					<div class="abouts-shapes bounce-animate2">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="single-about-left wow fadeInLeft">
						<div class="about-thumb">
							<img src="assets/images/about/about-one.png" alt="">
						</div>
						<div class="about-button">
							<a href="service-details.html">About Us</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single-about-right wow fadeInRight">
						<div class="appoinment-tab">
							<!-- / tab -->
							<div class="tab">
								<!-- / tabs -->
								<ul class="tabs">
									<li class="boder"><a href="#">HISTORY</a></li>
									<li><a href="#">MISSION </a></li>
									<li><a href="#">VISSION</a></li>
								</ul> 
								<div class="tab_content">
									<!-- / tabs_item -->
									<div class="tabs_item">
										<!-- post comment -->
										<div class="post-comment-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end platforms. don Dramatically administrate inexpensive users with integrated experiences Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically simplify discover.</p>
										</div>
										<div class="tab-thumb">
											<img src="assets/images/about/about-1.jpg" alt="">
										</div>
										<div class="tab-title">
											<h3>Design Make Dream</h3>
											<p>Rapidiously evolve pandemic experiences and Dramatically administrate</p>
										</div>
										<div class="prossess-ber-plugin pt-20">
											<span class="prosses-bar">Architecture</span>
											<div id="bar1" class="barfiller">
												<div class="tipWrap">
													<span class="tip"></span>
												</div>
												<span class="fill" data-percentage="80"></span>
											</div>
											<span class="prosses-bar">Interior Design</span>
											<div id="bar2" class="barfiller">
												<div class="tipWrap">
													<span class="tip"></span>
												</div>
												<span class="fill my-class" data-percentage="70"></span>
											</div>
										</div>
									</div> 
									<!-- / tabs_item -->
									<div class="tabs_item">
										<!-- post comment -->
										<div class="post-comment-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end platforms. don Dramatically administrate inexpensive users with integrated experiences Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically simplify discover.</p>
										</div>
										<div class="tab-thumb">
											<img src="assets/images/about/about-1.jpg" alt="">
										</div>
										<div class="tab-title">
											<h3>Design Make Dream</h3>
											<p>Rapidiously evolve pandemic experiences and Dramatically administrate</p>
										</div>
										<div class="post-comment-description pt-3">
											<p>Mission evolve pandemic experiences and end-to-end platforms. don Dramatically administrate inexpensive users with integrated experiences Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically the best design of dreamit simplify discover.</p>
										</div>
									</div> 
									<!-- / tabs_item -->
									<div class="tabs_item">
										<!-- post comment -->
										<div class="post-comment-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end platforms. don Dramatically administrate inexpensive users with integrated experiences Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically simplify discover.</p>
										</div>
										<div class="tab-thumb">
											<img src="assets/images/about/about-1.jpg" alt="">
										</div>
										<div class="tab-title">
											<h3>Design Make Dream</h3>
											<p>Rapidiously evolve pandemic experiences and Dramatically administrate</p>
										</div>
										<div class="post-comment-description pt-3">
											<p>Vision evolve pandemic experiences and end-to-end platforms. don Dramatically administrate inexpensive users with integrated experiences Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically the best design of dreamit simplify discover.</p>
										</div>
									</div> 
								</div> <!-- / tab_content -->
							</div> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="counter-area one upper">
		<div class="container">
			<div class="row bg-col align-items-center">
				<div class="col-lg-3 col-md-6">
					<div class="counter-single-item-inner wow fadeInUp">
						<div class="counter-content">
							<div class="counter-text">
								<h1><span class="counter">120</span>+</h1>
								<span></span>
								<div class="counter-title">
									<h4>ALL WORKS</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter-single-item-inner upper">
						<div class="counter-content">
							<div class="counter-text">
								<h1><span class="counter">70</span></h1>
								<span></span>
								<div class="counter-title">
									<h4>ENGINEERS</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter-single-item-inner wow fadeInUp">
						<div class="counter-content">
							<div class="counter-text">
								<h1><span class="counter">105</span>K</h1>
								<span></span>
								<div class="counter-title">
									<h4>CUSTOMERS</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="counter-single-item-inner upper">
						<div class="counter-content">
							<div class="counter-text">
								<h1><span class="counter">50</span>+</h1>
								<span></span>
								<div class="counter-title">
									<h4>AWARDS WIN</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="conun-shap bounce-animate3">
					<img src="assets/images/resource/counter-shape.png" alt="">
				</div>
				<div class="conunt-shape bounce-animate2">
					<img src="assets/images/resource/counter-shap.png" alt="">
				</div>
			</div>
		</div>	
	</div>

	<div class="service-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="main-title">
							<h1>Services</h1>
						</div>
						<div class="sub-title">
							<h2>See Our Best <span>Services</span></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="single-service-box wow fadeInLeft">
						<div class="row">
							<div class="col-lg-5">
								<div class="service-inner-box upper">
									<div class="service-content">
										<div class="service-title">
											<h3><span>01.</span>  Architecture Design</h3>
										</div>
									</div>
									<div class="service-thumb">
										<img src="assets/images/service/service-1.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end Dramatically administrate inexpensive</p>
											<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-button">
											<a href="service-details.html">View Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-service-box wow fadeInRight">
						<div class="row">
							<div class="col-lg-5">
								<div class="service-inner-box upper">
									<div class="service-content">
										<div class="service-title">
											<h3><span>02.</span>  Interior Designing</h3>
										</div>
									</div>
									<div class="service-thumb">
										<img src="assets/images/service/service-2.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end Dramatically administrate inexpensive</p>
											<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-button">
											<a href="service-details.html">View Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="single-service-box wow fadeInLeft">
						<div class="row">
							<div class="col-lg-5">
								<div class="service-inner-box upper">
									<div class="service-content">
										<div class="service-title">
											<h3><span>03.</span>  Urban Design</h3>
										</div>
									</div>
									<div class="service-thumb">
										<img src="assets/images/service/service-3.jpg" alt="">
									</div>
								</div>
							</div>
							<div class="col-lg-5">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-description">
											<p>Rapidiously evolve pandemic experiences and end-to-end Dramatically administrate inexpensive</p>
											<div class="icon-list">
												<ul>
													<li><i class="bi bi-check-lg"></i> Building Plans Design</li>
													<li><i class="bi bi-check-lg"></i> Soil Testing and Solderings</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-2">
								<div class="service-inner-box">
									<div class="service-content">
										<div class="service-button">
											<a href="service-details.html">View Details</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="project-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title upper pb-3">
						<div class="main-title">
							<h1>Works</h1>
						</div>
						<div class="sub-title">
							<h2>Latest <span>Works</span></h2>
						</div>
					</div>
					<div class="project-shap bounce-animate3">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
					<div class="project-shape bounce-animate2">
						<img src="assets/images/resource/counter-shap.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-1.jpg" alt="">
						</div>
						<div class="project-content">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="row">
						<div class="col-lg-12">
							<div class="single-project-box">
								<div class="project-thumb upper">
									<img src="assets/images/portfolio/project-2.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="single-project-box">
								<div class="project-thumb upper">
									<img src="assets/images/portfolio/project-3.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-4.jpg" alt="">
						</div>
						<div class="project-content style-one">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-5.jpg" alt="">
						</div>
						<div class="project-content">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-6.jpg" alt="">
						</div>
						<div class="project-content style-one">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-7.jpg" alt="">
						</div>
						<div class="project-content style-one">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="#portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-project-box">
						<div class="project-thumb">
							<img src="assets/images/portfolio/project-8.jpg" alt="">
						</div>
						<div class="project-content style-one">
							<h4>ARCHITECTURE</h4>
							<h3>Luxury Modern <br> Building Sandigo <br> UAE</h3>
							<div class="project-button">
								<a href="portfolio.html">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="projects-btn">
					<a href="portfolio.html">Load More</a>
				</div>
			</div>
		</div>
	</div>

	<div class="team-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title upper">
						<div class="main-title">
							<h1>ENGINEERS</h1>
						</div>
						<div class="sub-title">
							<h2>ZMT’s Expert <span>Engineers</span></h2>
						</div>
					</div>
					<div class="team-shap bounce-animate3">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
					<div class="team-shape bounce-animate2">
						<img src="assets/images/resource/counter-shap.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-team-box wow fadeInLeft">
						<div class="team-thumb">
							<img src="assets/images/team/team-1.jpg" alt="">
						</div>
						<div class="team-content">
							<h3>Moris Barbar</h3>
							<span>engineer</span>
							<div class="team-icon-list">
								<ul>
									<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
									<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-box wow fadeInUp">
						<div class="team-thumb">
							<img src="assets/images/team/team-2.jpg" alt="">
						</div>
						<div class="team-content">
							<h3>Moris Barbar</h3>
							<span>engineer</span>
							<div class="team-icon-list">
								<ul>
									<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
									<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-team-box wow fadeInRight">
						<div class="team-thumb">
							<img src="assets/images/team/team-3.jpg" alt="">
						</div>
						<div class="team-content">
							<h3>Moris Barbar</h3>
							<span>engineer</span>
							<div class="team-icon-list">
								<ul>
									<li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"> <i class="fab fa-twitter"> </i> </a></li>
									<li><a href="#"> <i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"> <i class="fab fa-pinterest-p"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="testimonial-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">

				</div>
				<div class="col-lg-6">
					<div class="single-testimonial-box">
						<div class="section-title upper">
							<div class="main-title">
								<h1>REVIEWS</h1>
							</div>
							<div class="sub-title">
								<h2>Customer’s <span>Feedback</span></h2>
							</div>
						</div>
						<div class="testimonial-content">
							<div class="row">
								<div class="owl-carousel testi-list">
									<div class="col-lg-12">
										<div class="test-box">
											<div class="testimonial-description">
												<p>“Appropriately target distributed e-services after multimediae based vortals. Competently leverage other's client-centric but initiatives without timely portals. Collaboratively harness backward-compatible building”</p>
											</div>
											<div class="testimonial-tmb">
												<img src="assets/images/testimonial/test-1.png" alt="">
											</div>
											<div class="testimonial-title">
												<h3>John D. Alexon</h3>
												<span>CEO & Founder</span>
											</div>
											<div class="testimonial-icon">
												<img src="assets/images/testimonial/quote.png" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="test-box">
											<div class="testimonial-description">
												<p>“Appropriately target distributed e-services after multimediae based vortals. Competently leverage other's client-centric but initiatives without timely portals. Collaboratively harness backward-compatible building”</p>
											</div>
											<div class="testimonial-tmb">
												<img src="assets/images/testimonial/test-1.png" alt="">
											</div>
											<div class="testimonial-title">
												<h3>John D. Alexon</h3>
												<span>CEO & Founder</span>
											</div>
											<div class="testimonial-icon">
												<img src="assets/images/testimonial/quote.png" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="test-box">
											<div class="testimonial-description">
												<p>“Appropriately target distributed e-services after multimediae based vortals. Competently leverage other's client-centric but initiatives without timely portals. Collaboratively harness backward-compatible building”</p>
											</div>
											<div class="testimonial-tmb">
												<img src="assets/images/testimonial/test-1.png" alt="">
											</div>
											<div class="testimonial-title">
												<h3>John D. Alexon</h3>
												<span>CEO & Founder</span>
											</div>
											<div class="testimonial-icon">
												<img src="assets/images/testimonial/quote.png" alt="">
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="test-box">
											<div class="testimonial-description">
												<p>“Appropriately target distributed e-services after multimediae based vortals. Competently leverage other's client-centric but initiatives without timely portals. Collaboratively harness backward-compatible building”</p>
											</div>
											<div class="testimonial-tmb">
												<img src="assets/images/testimonial/test-1.png" alt="">
											</div>
											<div class="testimonial-title">
												<h3>John D. Alexon</h3>
												<span>CEO & Founder</span>
											</div>
											<div class="testimonial-icon">
												<img src="assets/images/testimonial/quote.png" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="testi-shape bounce-animate3">
				<img src="assets/images/resource/border.png" alt="">
			</div>
		</div>
	</div>

	<div class="blog-area one upper">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-12">
					<div class="section-title upper pb-3">
						<div class="main-title">
							<h1>BLOG POST</h1>
						</div>
						<div class="sub-title">
							<h2>ZMT’s Latest <span>Blog Post</span></h2>
						</div>
					</div>
					<div class="blog-shap bounce-animate3">
						<img src="assets/images/resource/counter-shape.png" alt="">
					</div>
					<div class="blog-shape bounce-animate2">
						<img src="assets/images/resource/counter-shap.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box wow fadeInLeft">
						<div class="blog-thumb">
							<img src="assets/images/blog/blog-1.jpg" alt="">
						</div>
						<div class="blog-title">
							<h4>August 10, 2024 <span>Interior</span></h4>
							<h3><a href="blog-details.html">Top 10 Modern Building Design in Califronia, UAE</a></h3>
						</div>
						<div class="blog-button">
							<a href="blog-details.html">View Details</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-blog-box wow fadeInUp">
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
					<div class="single-blog-box wow fadeInRight">
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

	<div class="brand-area one upper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="brand-title">
						<h4><span>1200+</span> Satisfiend Customers all over the worlds</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="owl-carousel brand_list">
					<div class="col-lg-12">
						<div class="single-brand">
							<div class="brand-thumb">
								<img src="assets/images/brand/brand-1.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-brand">
							<div class="brand-thumb">
								<img src="assets/images/brand/brand-2.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-brand">
							<div class="brand-thumb">
								<img src="assets/images/brand/brand-3.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-brand">
							<div class="brand-thumb">
								<img src="assets/images/brand/brand-4.png" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="single-brand">
							<div class="brand-thumb">
								<img src="assets/images/brand/brand-5.png" alt="">
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

@endsection