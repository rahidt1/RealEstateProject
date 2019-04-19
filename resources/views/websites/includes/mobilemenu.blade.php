	<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
		<div class="menu_close_container"><div class="menu_close"></div></div>
		<div class="logo menu_logo">
			<a href="#">
				<div class="logo_container d-flex flex-row align-items-start justify-content-start">
					<div class="logo_image"><div><img src="{{ asset('/webstyle/images/logo.png') }}" alt=""></div></div>
				</div>
			</a>
		</div>
		<ul>
			<li class="menu_item"><a href="{{ route('home') }}">Home</a></li>
			<li class="menu_item"><a href="{{ route('about') }}">About us</a></li>
			<li class="menu_item"><a href="{{ route('properties') }}">Properties</a></li>
			<li class="menu_item"><a href="{{ route('news') }}">News</a></li>
			<li class="menu_item"><a href="{{ route('contact') }}">Contact</a></li>
		</ul>
	</div>
	<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>