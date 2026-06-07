<!--==================================================-->
	<!-- Start Main Menu Area -->
	<!--==================================================-->
	<div id="sticky-header" class="hendre_nav_manu two">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-2">
					<div class="logo">
						<a class="logo_img" href="#" title="hendre">
							<img src="{{ asset('assets/images/zmtimg.png') }}" alt="logo" height="100px" width="100px">
						</a>
						<a class="main_sticky" href="#" title="hendre">
							<img src="{{ asset('assets/images/zmtimg.png') }}" alt="logo" height="100px" width="100px">
						</a>
					</div>
				</div>
				<div class="col-lg-7">
					<nav class="hendre_menu">
						<ul class="nav_scroll">
							<li><a href="{{ route('home') }}">Home </a>
								 <!-- <ul class="sub-menu">
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
								</ul>  -->
							</li>
							<li><a href="{{ route('about') }}">About </a></li>
							<li><a href="#">Services</a>
								<ul class="sub-menu">
									<li><a href="{{ route('our_service') }}">Our Service</a></li>
									<li><a href="{{ route('service_details') }}">Service Details</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="{{ route('about') }}">About Us</a></li>
									<li><a href="{{ route('pricing') }}">Pricing</a></li>
									<li><a href="{{ route('our_team') }}">Our Team</a></li>
								</ul>
							</li>
							<li><a href="#">Works </a>
								<ul class="sub-menu">
									<li><a href="{{ route('project') }}">Project</a></li>
									<li><a href="{{ route('more_details') }}" target="_blank">More Details</a></li>
								</ul>
							</li>
							<li><a href="#">Blog </a>
								<ul class="sub-menu">
									<li><a href="{{ route('our_blog') }}">Our Blog</a></li>
									<li><a href="{{ route('blog_details') }}">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="{{ route('contact') }}">Contact</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-3">
					<div class="header-src-box">
						<div class="header-icon">
							<div class="search-box-btn search-box-outer style_two">
								<i class="fas fa-search"></i>
							</div>
						</div>
						<div class="header-button two">
							<a href="#">Get a Quote <i class="bi bi-arrow-right-short"></i></a>
						</div>
						<div class="sidebar-btn style_two">
							<div class="nav-btn navSidebar-button style_two"><span><i class="bi bi-filter-left"></i></span></div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  Mobile Menu Area -->
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="hendre_menu">
				<ul class="nav_scroll">
					<li><a href="#">Home </a>
								 <ul class="sub-menu">
									<li><a href="index-2.html">Home One</a></li>
									<li><a href="index-3.html">Home Two</a></li>
									<li><a href="index-4.html">Home Three</a></li>
									<li><a href="index-5.html">Home Four</a></li>
									<li><a href="index-6.html">Home Five</a></li>
									<li><a href="index-7.html">Home Six</a></li>
									<li><a href="index-8.html">Home Seven</a></li>
									<li><a href="spilt-slider.html">Spilt Slider One</a></li>
									<li><a href="spilt-slider-2.html">Spilt Slider Two</a></li>
									<li><a href="horizontal.html">Horizontal One</a></li>
									<li><a href="horizontal-2.html">Horizontal Two</a></li>
									<li><a href="horizontal-3.html">Horizontal Three</a></li>
									<li><a href="full-screen.html">Full Screen</a></li>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
								</ul> 
							</li>
					<li><a href="about.html">About </a></li>
					<li><a href="#">Services</a>
						<ul class="sub-menu">
							<li><a href="service.html">Our Service</a></li>
							<li><a href="service-details.html">Service Details</a></li>
						</ul>
					</li>
					<li><a href="#">Pages</a>
						<ul class="sub-menu">
							<li><a href="about.html">About Us</a></li>
							<li><a href="{{ route('pricing') }}">Pricing</a></li>
							<li><a href="team.html">Our Team</a></li>
							
							<li><a href="shop.html">Shop Page</a></li>
							<li><a href="shop-2.html">Shop 4 Columns</a></li>
							<li><a href="shop-3.html">Shop Left</a></li>
							<li><a href="shop-4.html">Shop Right</a></li>
							<li><a href="shop-details.html">Shop Details</a></li>
							<li><a href="cart.html">Your Cart</a></li>
						</ul>
					</li>
					<li><a href="#">Works </a>
						<ul class="sub-menu">
							<li><a href="portfolio.html">Portfolio Masonary 1</a></li>
							<li><a href="portfolio-2.html">Portfolio Masonary 2</a></li>
							<li><a href="portfolio-3.html">Portfolio Minimal 1</a></li>
							<li><a href="portfolio-4.html">Portfolio Minimal 2</a></li>
							<li><a href="portfolio-5.html">Portfolio Showcase 1</a></li>
							<li><a href="portfolio-6.html">Portfolio Showcase 2</a></li>
							<li><a href="cascading-dark.html">Portfolio Cascading 1</a></li>
							<li><a href="cascading-dark.html">Portfolio Cascading 2</a></li>
						</ul>
					</li>
					<li><a href="#">Blog </a>
						<ul class="sub-menu">
							<li><a href="blog-grid.html">Blog Grid</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="{{ route('contact') }}">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>