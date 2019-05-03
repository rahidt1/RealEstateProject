<!DOCTYPE html>
<html>
<head>
	<title>Show Image</title>
</head>
<body>

	<div>
		@foreach($imagedata as $i)
		<img class="img" src="/thumbnail/{{ $i->image }}">
		@endforeach
	</div>

</body>
</html>