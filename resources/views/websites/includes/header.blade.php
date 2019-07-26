<div class="container">
	<div class="row">
		<div class="col">
			<div class="header_content d-flex flex-row align-items-center justify-content-start">
				<div class="logo">
					<a href="{{ route('home') }}"><img src="{{ asset('/webstyle/images/logo.png') }}" alt=""></a>
				</div>

				<nav class="main_nav">
					<ul>
						<li class=""><a href="{{ route('home') }}">Home</a></li>
						<li><a href="{{ route('about') }}">About us</a></li>
						<li><a href="{{ route('properties') }}">Properties</a></li>
						<li><a href="{{ route('news') }}">News</a></li>
						<li><a href="{{ route('contact') }}">Contact</a></li>
												<li><a href="{{ route('complain') }}">Query</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('registeruser') }}">Join Us</a></li>
					</ul>
				</nav>

{{-- 				<div class="phone_num ml-auto">
					<div class="phone_num_inner">
						<img src="{{ asset('/webstyle/images/phone.png') }}" alt=""><span>652-345 3222 11</span>
					</div>
				</div> --}}
				<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

			</div>
		</div>
	</div>
</div>