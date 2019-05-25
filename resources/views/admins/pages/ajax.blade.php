<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
</head>
<body>

	<style>
		.container{
			margin-left: 100px;
			margin-top: 50px;

		}
		#division{
			width: 130px;
		}
		#district{
			width: 130px;
		}
	</style>

	<div class="container">
		<select name="division" id="division">
			<option>Select Division</option>
			@foreach($division as $d)
				<option value="{{ $d->id }}">{{ $d->name }}</option>
			@endforeach
		</select>
		<br>
		<br>
		<select name="district" id="district">
			<option>Select District</option>
		</select>
	</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		$('#division').on('change', function() {
		  var div_id = this.value ;
		  $.ajax({
		  	url:"http://127.0.0.1:8000/district/"+div_id,
		  	success:function(res){
		  		var dis = res.data;
		  		var temp = '';
		  		for(var i=0; i<dis.length; i++){
		  			var dis_name = dis[i].name;
		  			var dis_id = dis[i].id;
		  			if(i==0){
		  				temp = '<option>Select District</option>';
		  			}
		  			temp+='<option value="'+dis_id+'">'+dis_name+'</option>';
		  		}
		  		$('#district').html(temp);
		  		//console.log(temp);
		  	}
		  })
		});
	});
</script>
</body>
</html>