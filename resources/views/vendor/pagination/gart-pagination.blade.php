@if ($paginator->hasPages())
    <div class="tt-pagination tt-pagin-center anim-fadeinup">
        {{-- Previous Page Link --}}
        <div class="tt-pagin-prev">
            @if ($paginator->onFirstPage())
                <a href="#" class="tt-pagin-item magnetic-item disabled"><i class="fas fa-chevron-left"></i></a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
            @endif
        </div>

        {{-- Page Number Links --}}
        <div class="tt-pagin-numbers">
            @foreach ($elements as $element)
                @if (is_string($element))
                    {{-- "Three Dots" Separator --}}
                    <span class="tt-pagin-item magnetic-item disabled">{{ $element }}</span>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a href="#" class="tt-pagin-item magnetic-item active">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}" class="tt-pagin-item magnetic-item">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        <div class="tt-pagin-next">
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
            @else
                <a href="#" class="tt-pagin-item tt-pagin-next magnetic-item disabled"><i class="fas fa-chevron-right"></i></a>
            @endif
        </div>
    </div>
@endif
