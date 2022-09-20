@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="post-pagination mx-1 disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" aria-hidden="true"> < </a>
                </li>
            @else
                <li class="post-pagination mx-1">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> < </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="post-pagination mx-1 disabled" aria-disabled="true"><a class="page-link">{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="post-pagination mx-1 active"><a class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="post-pagination mx-1"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="post-pagination mx-1">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> > </a>
                </li>
            @else
                <li class="post-pagination mx-1 disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" aria-hidden="true"> > </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
