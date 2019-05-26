@extends('layouts.app')
@section('content')

	<h1 class="text-5xl font-condensed mb-12">{{ $page->title }}</h1>

	<div class="format-content">
		{!! $page->content !!}
	</div>

@endsection

	
