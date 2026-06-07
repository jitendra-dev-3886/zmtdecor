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
						<h1>Blog Details</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Blog Details </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blog-details-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-single-items">
						<div class="blog-thumb">
							<img src="assets/images/blog/side_1.html" alt="Blog img">
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<h4>August 10, 2024 <span>EXTERIOR</span></h4>
							</div>
							<div class="blog-content-text text-left">
								<h2>Top 10 Modern Building Design in Califronia, USA</h2>								
								<p class="qouik">Rapidiously evolve pandemic experiences and end-to-end platforms. Dramatically administrate inexpensive users with integrated experiences  Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically simplify discover. Quickly leverage other's collaborative innovation after next-generation applications.</p>

								<p class="qouik2">Uniquely syndicate extensible niches after seamless partnerships. Intrinsicly matrix distributed value through open-source solutions. Objectively customize interactive infrastructures before diverse interfaces. Efficiently leverage other's optimal models for stand-alone processes.</p>

								
								<div class="blog-details-single-items">
									<div class="blog-details-content">
										<div class="blog-details-desc">
											<h3>Project Concept</h3>
											<p>Collaboratively redefine cutting-edge infrastructures whereas open main convergence energistically simplify discover. Quickly leverage other's collaborative innovation after next- generation applications.</p>
										</div>
										<div class="blog-details-icon-list">
											<ul>
												<li><i class="bi bi-chevron-double-right"></i> Phosfluorescently envisioneer process done</li>
												<li><i class="bi bi-chevron-double-right"></i> Rapidiously deliver progressive experiences rather </li>
												<li><i class="bi bi-chevron-double-right"></i> Professionally actualize intuitive products via multifunctiona </li>
												<li><i class="bi bi-chevron-double-right"></i> Conveniently extend covalent metrics </li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="blog-details-tmb">
											<img src="assets/images/blog/si-ber.html" alt="">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="blog-details-tmb">
											<img src="assets/images/blog/si-ber-2.html" alt="">
										</div>
									</div>
									<div class="blog-details-desc">
										<p>Interactively visualize top-line internal or "organic" sources rather than top-line niche markets. Continually unleash 24/7 opportunities after high standards in process improvements. Uniquely deploy impactful are methodologies with reliable information. Synergistically revolutionize fully researched manufactured itemswith optimal materials competently envisioneer.</p>
										<p>Holisticly innovate global ROI with user-centric total linkage. Collaboratively e-enable efficient markets with multifunctional e-business. Continually incentivize sustainable products for B2B</p>
									</div>
								</div>

								<div class="row mg-tp">
									<div class="col-lg-6">
										<div class="blog-details-social">
											<div class="blog-social-tags">
												<h4>Tags: <span>Architecture</span> <span>Interior</span></h4>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="blog-details-social">
											<div class="single-blog-social-icon">
												<div class="share-text">
													<h4>Share :</h4>
												</div>
												<ul>
													<li><a href="#">FB</a></li>
													<li><a href="#">TW</a></li>
													<li><a href="#">LN</a></li>
													<li><a href="#">PI</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">								
								<div class="blog-details-comment">
									<div class="blog-details-comment-thumb">
										<img src="assets/images/blog/site_1.html" alt="">
									</div>
									<div class="blog-details-comment-content">
										<h3>Top 10 Modern Building Design in Califronia, USA</h3>									
										<p>August 10, 2024</p>
									</div>									
								</div>								
							</div>
							<div class="col-lg-6">
								<div class="blog-details-comment">
									<div class="blog-details-comment-thumb">
										<img src="assets/images/blog/site_2.html" alt="">
									</div>
									<div class="blog-details-comment-content">
										<h3>Top 10 Modern Building Design in Califronia, USA</h3>									
										<p>August 10, 2024</p>
									</div>									
								</div>								
							</div>
						</div>
						<div class="blog-details-comment-title">
							<h3>‘2’ Comments</h3>
							<span></span>
						</div>
						<div class="blog-details-comment_box">
							<div class="blog-details-comment_tmb">
								<img src="assets/images/blog/comment-1.html" alt="">
							</div>
							<h4>Moris Barbar <span>August 10, 2024</span></h4>
							<p>Interactively visualize top-line internal or "organic" sources rather than top-line niche mark unleash 24/7 opportunities after high standards in process improvements. Uniquely deploy methodologies with reliable information. </p>
							<div class="reply_btn">
								<a href="#">Reply</a>
							</div>
						</div>
						<div class="blog-details-comment_box upper">
							<div class="blog-details-comment_tmb">
								<img src="assets/images/blog/comment-2.html" alt="">
							</div>
							<h4>John Alexon <span>August 10, 2024</span></h4>
							<p>Interactively visualize top-line internal or "organic" sources rather than top-line unleash 24/7 opportunities after standards in process </p>
							<div class="reply_btn">
								<a href="#">Reply</a>
							</div>
						</div>
						<div class="comment-form">
							<div class="comment-title">
								<h3>Leave Comment</h3>
								<span></span>
							</div>
							<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
								<div class="row">
									
									<div class="col-md-6"><input type="text" class="comment-box" name="comment-name"
										placeholder="Full Name"></div>
										<div class="col-md-6"><input type="email" class="comment-box" name="comment-email" placeholder="Email Address"></div>

										<div class="col-lg-12"><input type="text" class="comment-box" name="comment-website" placeholder="Your Website"></div>									

										<textarea name="comment-message" class="mb-20" id="comment-msg-box" cols="30"
										rows="4" placeholder="Message"></textarea>
										<input type="submit" value="Submit Now" class="submit-comment">
										<div class="col-md-12">
										</div>
									</div>
								</form>
								<div id="status"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="widget-items-search">
							<form action="#" method="get">
								<input type="text" class="src-input-box" placeholder="Search Here" name="s" value=""
								title="src-input-box">
								<button class="src-icon" type="submit">
									<i class="fas fa-search"></i>
								</button>
							</form>
						</div>

						<div class="widget-items upp">
							<div class="widget-title">
								<h2>Popular Post</h2>
							</div>
							<div class="widget-recent-post d-flex hr-3">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/blog/site_1.html" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<a href="blog-details.html">
											<h4>Top 10 Modern Building Design in Califronia, USA </h4>
										</a>
										<span>August 10, 2024</span>
									</div>
								</div>
							</div>
							<div class="widget-recent-post d-flex hr-3">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/blog/site_2.html" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<a href="blog-details.html">
											<h4>Best Equipment for Architecture and Interior... </h4>
										</a>
										<span>August 10, 2024</span>
									</div>
								</div>
							</div>
							<div class="widget-recent-post d-flex hr-3">
								<div class="rpost-thumb">
									<a href="#"><img src="assets/images/blog/site_3.html" alt="post thumb"></a>
								</div>
								<div class="rpost-content">
									<div class="rpost-title">
										<a href="blog-details.html">
											<h4>5 Awesome and Beautiful House in Dhaka... </h4>
										</a>
										<span>August 10, 2024</span>
									</div>
								</div>
							</div>
						</div>

						<div class="widget-items">
							<div class="widget-title">
								<h2>Categories</h2>
							</div>
							<div class="catagory-item">
								<ul>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i>Architecture</a></li>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i>Interior Design</a></li>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i>Urban Design</a></li>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i> Furnitures</a></li>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i>Industrial</a></li>
									<li><a href="#"><i class="bi bi-chevron-double-right"></i>Uncategories</a></li>
								</ul>
							</div>
						</div>

						<div class="widget-items">
							<div class="widget-title">
								<h2>Tag </h2>
							</div>
							<div class="tag-item">
								<a href="#">Architecture</a>
								<a href="#">Interior Design</a>
								<a href="#">Furnitures</a>
								<a href="#">Building exterior</a>
								<a href="#">Luxury Home</a>
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