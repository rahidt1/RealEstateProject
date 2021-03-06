<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
</head>
<body>

	@if(Session::has('success'))
	<div class="alert alert-success">
		{{Session::get('success')}}
	</div>
	@endif

    <div class="col-md-8" align="">
        <a href="{{ route('pdf') }}" class="btn btn-primary">Save as PDF</a>
    </div>
	<div>
		<form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}
			<strong>Image</strong>
			<input type="file" name="image">
			<input type="submit" name="submit">
		</form>
	</div>

</body>
</html>