<!DOCTYPE html>
<html lang=zh-hant>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Quicksort,Mergesort" />
	<meta name="description" content="TAHRD, NTNU, Taiwan" />
	<meta property="og:title" content="@yield('title')ARSort" />
	<!--<meta property="og:url" content="" />-->
	
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')ARSort</title>

	<!-- Styles -->
	<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
	
	<!-- Scripts -->
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
		<div class="row">
			<div class="col-sm-2">
				@include('layouts.navigation_bar')
			</div>
			<div class="col-sm-10">
				@yield('content')
	
				<hr>
				<footer>
					<p style="text-align: center;">Copyright &copy; 2017 ARSort</p>
				</footer>
			</div>
		</div>
    </div>

    <!-- Scripts -->
	<script src="{{ secure_asset('js/app.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

</body>
</html>
