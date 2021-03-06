@extends('websites.layouts.index')
@section('abc')

{{-- <div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('/webstyle/images/properties.jpg') }}" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="{{ route('home') }}">Home</a></li>
									<li>Search Results</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- Home Search -->


	<!-- Properties -->
	<div><br><br></div>
	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">{{ $searchresult->total() }} Result(s) for '{{ request()->input('search') }}'</div>
					<div class="section_subtitle">Find Your Dream Home</div>
				</div>
				<br><br><br><br>
				<div class="home_search">
					@include('websites.includes.search')
				</div>
			</div>
			<div class="row properties_row">
				
				<!-- Property -->
			@foreach ($searchresult as $d)
					

				<div class="col-xl-4 col-lg-6 property_col">
					<div class="property">
						<div class="property_image">
							<img src="{{ asset('/webstyle/images/property_1.jpg') }}" alt="">
							<div class="tag_featured property_tag"><a href="#">{{ $d->id }}</a></div>
						</div>
						<div class="property_body text-center">
							<div class="property_location">{{$d->location}}</div>
							<div class="property_title"><a href="{{ route('singleproperty',$d->id) }}">{{ $d->propertyname }}</a></div>
							<div class="property_price">$ {{ $d->price }}</div>
						</div>
						<div class="property_footer d-flex flex-row align-items-center justify-content-start">
							<div><div class="property_icon"><img src="{{ asset('/webstyle/images/icon_1.png') }}" alt=""></div><span>{{ $d->area }} sqFt.</span></div>
							<div><div class="property_icon"><img src="{{ asset('/webstyle/images/icon_2.png') }}" alt=""></div><span>{{ $d->bed }} Bedroom</span></div>
							<div><div class="property_icon"><img src="{{ asset('/webstyle/images/icon_3.png') }}" alt=""></div><span>{{ $d->bath }} Bathroom</span></div>
						</div>
					</div>
				</div>
			@endforeach

			
	</div>
	<div >{{$searchresult->links()}}</div>
@stop