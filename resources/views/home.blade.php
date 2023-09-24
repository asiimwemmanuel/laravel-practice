<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Based or Not | Home</title>
		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="antialiased">
		<!-- sign in logic -->
		<div class="button-container">
		@auth
			<a href="{{ route('logout') }}" class="btn btn-login">Log out</a>
		@endauth
		</div>
		<div class="text-center my-padding">
			<h1>Homepage</h1>
		</div>
	</body>
</html>
