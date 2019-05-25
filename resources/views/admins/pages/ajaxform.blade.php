<!DOCTYPE html>
<html>
<head>
	<title>Ajax Form</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

	<div class="container">
		<form class="login" action="{{ route('ajaxadd') }}" method="post" data-type="json">
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

		    var $this = $(this);

		    $.ajax({
		        type: $this.attr('method'),
		        url: $this.attr('action'),
		        data: $this.serializeArray(),
		        dataType: $this.data('type'),
		        success: function (response) {
		           if(response.success) {
		             location.reload();
		           }
		        },
/*		        error: function (jqXHR) {
		          var response = $.parseJSON(jqXHR.responseText);
		          if(response.message) {
		            alert(response.message);
		          }
		        }*/
		        
		    });
		  });

});
</script>
</body>
</html>