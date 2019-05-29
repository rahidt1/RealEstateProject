<!DOCTYPE html>
<html>
<head>
	<title>Show Image</title>
</head>
<body>
{{-- 	<style type="text/css">
		.img{
			width: 150px;
			height: 150px;
		}
	</style> --}}

	<div>
		@foreach(json_decode($imagemultiple->image, true) as $image)
		   <img src="{{ URL::to('property/'.$image)}}" width="100px" height="100px">    
		@endforeach 
	</div>

</body>
</html>