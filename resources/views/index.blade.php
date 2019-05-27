@extends('layouts.app')
@section('content')

	<div class="w-full py-24 px-6 bg-grey-400 relative z-10">
	
		<div class="container max-w-4xl mx-auto text-left flex items-center flex-wrap">

			<div class="w-full md:w-2/3 md:pr-12">
				<h1 class="text-2xl md:text-4xl text-grey-900 mb-3">Lorem ipsum dolor sit amet</h1>
				<p class="text-md md:text-lg text-grey-800 leading-normal">
					Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</p>

				<a href="/register" class="mt-6 inline-block bg-white text-black no-underline px-4 py-3 shadow-lg">Contact us</a>
			</div>

			<div class="hidden md:block w-1/3">
				<img src="http://placehold.it/640x480" class="w-full h-auto shadow-lg">
			</div>
		</div>

	</div>

@endsection