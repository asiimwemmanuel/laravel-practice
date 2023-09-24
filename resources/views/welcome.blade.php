<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Based or Not | Welcome</title>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net" />
		<link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" />

		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>
	<body class="antialiased">
			<!-- sign in logic -->
			@if (Route::has('login'))
				<div class="button-container">
					@auth
						<a href="{{ url('/home') }}" class="btn btn-home">Home</a>
			@else
				<a href="{{ route('login') }}" class="btn btn-login">Log in</a>
					@if (Route::has('register'))
							<a href="{{ route('register') }}" class="btn btn-register">Register</a>
					@endif
					@endauth
				</div>
			@endif
			<div class="text-center my-padding">
				<h1>Welcome to the "Is Your Anime Based?" App</h1>
				<p class="lead">Prepare to embark on an epic quest to discover if your anime is "based" or not! 🚀</p>
				<p class="mt-3" style="">It's all about fun and anime adventures! 😄</p>
			</div>
			<img class="anime-meme" src="https://images7.memedroid.com/images/UPLOADED241/6502b13e90514.webp" alt="Epic Anime Meme" class="img-fluid">
	</body>
</html>
