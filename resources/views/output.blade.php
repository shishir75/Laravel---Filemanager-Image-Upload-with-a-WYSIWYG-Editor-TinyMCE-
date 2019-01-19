<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<title>Image Upload</title>
</head>
<body>

<div class="container">
	<div class="row text-center">
		<div class="col-md-10 offset-1">
			<h1>Output</h1>
		</div>
	</div>
	<div class="row text-center">
		<div class="col-md-10 offset-1">
			<a href="{{ route('welcome') }}">Back</a>
		</div>
	</div>

	<div class="row">
		<div class="col-md-10 offset-1">
			{!! $address !!}
		</div>
	</div>

</div>



</body>
</html>