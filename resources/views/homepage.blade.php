<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/img_style.css') }}">
</head>
<body>
	<form method="post">
		@csrf
		<div class="responsive" align="center">
			<div class="gallery">
				<a target="_blank" href="{{ route('writing') }}">
					<img src="{{ URL('images/writing.jpeg') }}" width="50%" height="50%">
				</a>
				<a target="_blank" href="{{ route('reading') }}">
					<img src="{{ URL('images/writing.jpeg') }}" width="50%" height="50%">
				</a><br>
				<a target="_blank" href="{{ route('speaking') }}">
					<img src="{{ URL('images/writing.jpeg') }}" width="50%" height="50%">
				</a>
				<a target="_blank" href="">
					<img src="{{ URL('images/writing.jpeg') }}" width="50%" height="50%">
				</a>
			</div>
		</div>
		<input type="submit" name="Start Test">
	</form>
</body>
</html>