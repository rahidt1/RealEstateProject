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
		{{-- Showing Multiple Image is not Solved --}}
		@foreach($imagemultiple as $i)
		<img class="img" src="/thumbnail/{{ $i->image }}">
		@endforeach
	</div>

</body>
</html>