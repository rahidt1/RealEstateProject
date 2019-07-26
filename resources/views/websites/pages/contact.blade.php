@extends('websites.layouts.index')
@section('abc')
<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/webstyle/images/contact11.jpg') }}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="home_title">Contact</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="{{ route('home') }}">Home</a></li>
									<li>Contact</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Home Search -->



<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Get in touch with us</div>
						<div class="section_subtitle">Say Hello</div>
						<div class="contact_info_text"><p>Feel Free to contanct us regarding any query</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
								<li>
									<div>Address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 93424</div>
								</li>
								<li>
									<div>Phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>Email:</div>
									<div>blusky@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>


	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
 
@stop