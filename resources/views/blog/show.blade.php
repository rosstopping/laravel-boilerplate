@extends('layouts.app')

@section('content')

<div class="pb-24">

	<h1 class="text-5xl font-condensed mb-4">{{ $post->title }}</h1>
	<div class="pt-6 text-xs text-grey-dark font-thin">Posted {{ $post->publish_date->format('dS M Y') }}</div>

	<div class="format-content max-w-lg pt-12">

		{!! $post->body !!}

	</div>

</div>

@endsection