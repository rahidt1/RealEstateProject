<!DOCTYPE html>
<html>
<head>
	<title>Ajax Form</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

	<div class="container">
		<form id="login" action="{{ route('ajaxadd') }}" method="post" data-type="json">
			{{ csrf_field() }}
		  <input type="text" name="email">
		  <input type="password" name="password">
		  <button type="submit">login</button>
		</form>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {

		  $.ajaxSetup({
		    headers: {
		      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		  });

		  $('form.login:first').on('submit', function(e){
		    e.preventDefault(); 

		    var data = $("#login").serialize();

		    $.ajax({
		        type: $this.attr('method'),
		        url: $this.attr('action'),
		        data: data,
		        dataType: $this.data('type'),
		        success: function (response) {
		        	if(response=="ok"){
		        		$("#login").html("<p>Success</p>");
		        	}
		        	else{
		        		$("#login").html("<p>Success</p>")
		        	}
		        },
		        
		    });
		  });

});
</script>
</body>
</html>