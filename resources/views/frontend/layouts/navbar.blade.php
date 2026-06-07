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
							<li><a href="{{ route('project') }}">Projects </a>
								<!-- <ul class="sub-menu">
									<li><a href="{{ route('project') }}">Project</a></li>
									<li><a href="{{ route('more_details') }}" target="_blank">More Details</a></li>
								</ul> -->
							</li>
							<li><a href="{{ route('our_blog') }}">Blog </a>
								<!-- <ul class="sub-menu">
									<li><a href="{{ route('our_blog') }}">Our Blog</a></li>
									<li><a href="{{ route('blog_details') }}">Blog Details</a></li>
								</ul> -->
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
	
<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none">
    <div class="container">
        <div class="mobile-header d-flex align-items-center justify-content-between">
            <div class="mobile-logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/zmtimg.png') }}" alt="Logo" height="100px" width="100px">
                </a>
            </div>
        </div>
        <div class="mobile-menu">
            <nav class="hendre_menu">
                <ul class="nav_scroll">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('our_service') }}">Our Service</a></li>
                    <li><a href="{{ route('service_details') }}">Service Details</a></li>
                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                    <li><a href="{{ route('our_team') }}">Our Team</a></li>
                    <li><a href="{{ route('project') }}">Projects</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('our_blog') }}">Blog</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>