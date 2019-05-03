<!DOCTYPE html>
<html>
<head>
	<title>Show Image</title>
</head>
<body>
	<style type="text/css">
		.img{
			border-radius: 50%;
			width: 150px;
			height: 150px;
		}
	</style>
	<div>
		@foreach($imagedata as $i)
		<img class="img" src="/thumbnail/{{ $i->image }}">
		@endforeach
	</div>

</body>
</html>