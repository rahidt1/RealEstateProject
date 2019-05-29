<!DOCTYPE html>
<html>
<head>
	<title>Ajax Form</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

	<div class="container">
		<form id="login" action="#" method="post">
		  <input type="text" name="email">
		  <input type="password" name="password">
		  <button type="submit">login</button>
		</form>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
	$('#login').submit(function(event){
			event.prevenDefault();
			alert('hi');
	});
</script>
</body>
</html>