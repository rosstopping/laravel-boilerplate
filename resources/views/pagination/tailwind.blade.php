@if ($paginator->hasPages())
    <div class="flex items-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="mr-4 border w-8 h-8 bg-grey-lightest flex justify-center items-center cursor-not-allowed">
                <i data-feather="chevron-left" class="h-4 w-4 text-grey-darker"></i>
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="mr-4 border w-8 h-8 bg-grey-lightest flex justify-center items-center no-underline">
                <i data-feather="chevron-left" class="h-4 w-4 text-grey-darker"></i>
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="text-grey mx-2">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="w-10 h-10 bg-black text-white flex justify-center items-center no-underline">{{ $page }}</span>
                    @else
                        <a class="w-10 h-10 text-grey-darker flex justify-center items-center no-underline" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="ml-4 border w-8 h-8 bg-grey-lightest flex justify-center items-center no-underline">
                <i data-feather="chevron-right" class="h-4 w-4 text-grey-darker"></i>
            </a>
        @else
            <span class="ml-4 border w-8 h-8 bg-grey-lightest flex justify-center items-center cursor-not-allowed">
                <i data-feather="chevron-right" class="h-4 w-4 text-grey-darker"></i>
            </span>
        @endif
    </div>
@endif