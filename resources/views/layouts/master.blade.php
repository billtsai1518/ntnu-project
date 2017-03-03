<!DOCTYPE html>
<html lang="zh-hant">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Quicksort,Mergesort" />
	<meta name="description" content="TAHRD, NTNU, Taiwan" />
	<meta property="og:title" content="@yield('title')ARSort" />
	<!--<meta property="og:url" content="" />-->
	<title>@yield('title')ARSort</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <!--<script>Google Analytics</script>-->
	<div class="row">
		<div class="col-sm-2">
			@include('layouts.navigation_bar')
		</div>
	<div class="col-sm-10">
		@yield('body')
	
		<hr>
		<footer>
			<p style="text-align: center;">Copyright &copy; 2017 ARSort</p>
		</footer>
		</div>
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
