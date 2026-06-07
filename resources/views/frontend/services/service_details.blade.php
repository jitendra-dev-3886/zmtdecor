
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
						<h1>Service Details</h1>
						<ul>
							<li><a href="index-2.html">Home</a></li>
							<li>Service Details</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="service-details-area">
		<div class="container">
			<div class="row">
				<div class="owl-carousel details_list">
					<div class="col-lg-12">
						<div class="service-details-box">
							<div class="service-details-thumb">
								<img src="assets/images/service/servi-dtls.html" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="service-details-box">
							<div class="service-details-thumb">
								<img src="assets/images/service/servi-dtls.html" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="service-details-box">
							<div class="service-details-thumb">
								<img src="assets/images/service/servi-dtls.html" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="service_details_box">
						<div class="service_details_content">
							<h3>ZMT TECHNICAL SERVICES L.L.C.</h3>
							<p>Provides integrated and multidisciplinary services throughout the entire life cycle 
							of any construction project, from the initial feasibility studies and concepts all the way through the 
							various stages of the design, tendering and procurement, construction, testing and commissioning, 
							ultimately including technical services and integrated facilities management during operation and 
							management  of the built facilities / infrastructures.</p>
							<p>We provide comprehensive and multidisciplinary services across the entire construction project lifecycle.
							Our expertise begins with feasibility studies, planning, and concept development.
							We deliver professional design, tendering, procurement, and construction management solutions.
							Our team ensures smooth testing, commissioning, and technical support for every project.
							We also offer integrated facilities management services to optimize the operation and maintenance of built assets.</p>
							</div>
						<div class="service-steps-list">
							<h3>MAIN SERVICES</h3>
							<ul>
								<ul>
								    <li>Feasibility Studies</li>
								    <li>Due Diligence / Dilapidation Surveys</li>
								    <li>Peer Review and Independent Third Party Check</li>
								    <li>Value Engineering / Life Cycle Costing</li>
								    <li>Pre-Construction and Technical Support</li>
								    <li>Planning and Scheduling</li>
								    <li>Estimating & Cost Management</li>
								    <li>Value Engineering Options</li>
								    <li>Risk Management</li>
								    <li>MEP Project Management Services</li>
								    <li>MEP Construction Management</li>
								    <li>MEP Engineering & Design Management</li>
								    <li>BIM Management & Modelling</li>
								    <li>Design During Construction (Shop Drawings, Variation Design, Design Optimization)</li>
								    <li>Work Supervision</li>
								    <li>Health, Environment & Safety Management</li>
								    <li>Local Authority and Third-Party Approvals</li>
								    <li>Inspection – QA/QC</li>
								    <li>Troubleshooting & Mitigation Planning</li>
								    <li>Asset Tagging</li>
								    <li>Testing and Commissioning</li>
								    <li>Snagging and De-snagging</li>
								    <li>Client Training</li>
								    <li>DLP Management</li>
								    <li>Troubled Project Turnaround</li>
								    <li>Project Deliverables & Handing Over (As Built Drawings, O&M Manuals, etc.)</li>
								</ul>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="single-details-box wow fadeInRight">
							<div class="single-details_thumb">
								<img src="assets/images/service/servi-dtls-1.html" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="single-details-box wow fadeInLeft">
							<div class="single-details_thumb">
								<img src="assets/images/service/servi-dtls-1.html" alt="">
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
