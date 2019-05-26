<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="favicon.io" rel="shortcut icon" type="image/x-icon">

		{!! SEO::generate() !!}

		{!! GoogleFontsLoader::load() !!}

		@if (isset($post))
		<meta property="og:type" content="article">
		<meta property="article:published_time" content="{{ $post->publish_date }}">
		<meta property="article:modified_time" content="{{ $post->publish_date }}">
		<meta property="article:author" content="Ross">
		@endif

		<style> @php include(public_path().'/css/app.css') @endphp </style>

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128325502-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-128325502-2');
		</script>
		
	</head>
	<body>

		<div id="app">

			header

			
			@yield('content')


			footer

		</div>

		<script src="/js/app.js" defer></script>

	</body>
</html>