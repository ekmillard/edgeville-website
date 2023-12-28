@if ($paginator->hasPages())
    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="hpgnum nav">&#171;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="hpgnum nav">&#171;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="hpgnum active">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="hpgnum">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="hpgnum nav">&#8250;</a>
        @else
            <span class="hpgnum nav">&#8250;</span>
        @endif
    </div>
@endif
