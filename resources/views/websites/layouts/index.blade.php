<!DOCTYPE html>
<html lang="en">
<head>
	@include('websites.includes.head')
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		@include('websites.includes.header')
	</header>

	<!-- Home -->

	<!-- Home Search -->

	
	<!-- Menu For Small Screens -->

	<div class="menu trans_500">
		@include('websites.includes.mobilemenu')
	</div>
	



	<!-- Content -->

	@yield('abc')


	<!-- Newsletter -->
	@include('websites.includes.newsletter')
	

	<!-- Footer -->

	<footer class="footer">
		@include('websites.includes.footer')
	</footer>
</div>

<!-- All the script of all pages -->
@include('websites.includes.script')
</body>
</html>