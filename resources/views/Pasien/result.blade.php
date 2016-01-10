
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pencarian dengan Laravel 5 &raquo; Jaranguda.com</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

	<div class="container">
	<h3>Hasil Pencarian</h3>
	<hr>

		@if (count($name) > 0)
			@foreach ($name as $data)
				{{ $data->Name }} => {{ $data->Country }} <br>
			@endforeach
		@else
		Data tidak ditemukan.
		@endif

	</div>

	</body>
</html>