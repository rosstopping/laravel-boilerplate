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
	<body class="bg-gray-100 text-black font-serif">

		<div id="app">

			<header class="flex flex-wrap items-center justify-between px-12 h-32 relative">
				
				<div class="w-full md:w-auto">
					<a href="#" class="block text-center text-black text-lg no-underline">{{ config('app.name') }}</a>
				</div>

				<ul class="flex-1 flex justify-center md:justify-end list-reset">
					<li>
						<a href="#" class="text-sm text-grey-darker no-underline hover:text-black">Home</a>
					</li>
					<li class="ml-8">
						<a href="#" class="text-sm text-grey-darker no-underline hover:text-black">Products</a>
					</li>
					<li class="ml-8">
						<a href="#" class="text-sm text-grey-darker no-underline hover:text-black">Contact Us</a>
					</li>
					<li class="ml-8 hidden md:inline">
						<a href="#" class="text-sm font-bold px-4 py-3 no-underline text-white bg-black hover:bg-grey-darker">Sign up</a>
					</li>
				</ul>

			</header>
			
			@yield('content')

			<div class="text-center text-sm">
				<p>Copyright &copy; {{ date('Y') }} {{ config('app.name') }}</p>
			</div>

		</div>

		<script src="/js/app.js" defer></script>

	</body>
</html>