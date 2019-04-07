<div class="container">
	<div class="row">
		<div class="col">
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo">
					<a href="{{ URL::to('/') }}"><img src="{{ asset('/webstyle/images/logo.png') }}" alt=""></a>
				</div>
				<nav class="main_nav">
					<ul>
						<li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
						<li><a href="{{ URL::to('/about') }}">About us</a></li>
						<li><a href="{{ URL::to('/properties') }}">Properties</a></li>
						<li><a href="{{ URL::to('/news') }}">News</a></li>
						<li><a href="{{ URL::to('/contact') }}">Contact</a></li>
					</ul>
				</nav>
				<div class="phone_num ml-auto">
					<div class="phone_num_inner">
						<img src="{{ asset('/webstyle/images/phone.png') }}" alt=""><span>652-345 3222 11</span>
					</div>
				</div>
				<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</div>
</div>