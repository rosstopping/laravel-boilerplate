@extends('layouts.app')

@section('content')

<div class="pb-24">

	{{-- <h1 class="text-5xl font-condensed mb-12">The blog</h1> --}}

	<div class="max-w-lg">

		@foreach ($posts as $post)
			<article class="w-full mb-24 border-l-4 border-grey-lighter pl-6">
				<h2 class="font-condensed text-4xl leading-normal">
					<a href="{{ route('blog.show', $post->slug) }}" class="no-underline hover:underline text-black">{!! $post->title !!}</a>
				</h2>
				<div class="pt-6 text-xs text-grey-dark font-thin">Posted {{ $post->publish_date->format('dS M Y') }}</div>
				<p class="text-sm my-8 text-grey-darkest font-thin leading-loose">
					{!! $post->excerpt !!}
				</p>
			</article>
		@endforeach

	</div>

	<div class="flex justify-center">
		{{ $posts->links() }}
	</div>

</div>

@endsection