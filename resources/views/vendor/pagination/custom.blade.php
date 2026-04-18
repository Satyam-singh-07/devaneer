@if ($paginator->hasPages())
    <nav class="d-flex justify-content-between align-items-center mt-3">
        <div class="text-muted small">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results
        </div>

        <ul class="pagination pagination-custom mb-0">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><i class="bi bi-chevron-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="bi bi-chevron-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="bi bi-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true">
                    <span class="page-link"><i class="bi bi-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>

    <style>
        .pagination-custom .page-item {
            margin: 0 3px;
        }
        .pagination-custom .page-link {
            border: none;
            border-radius: 8px !important;
            color: #0b1c2c;
            padding: 8px 16px;
            font-weight: 600;
            transition: all 0.3s;
            background: #f8f9fa;
        }
        .pagination-custom .page-link:hover {
            background: #e9ecef;
            color: #06B6D4;
        }
        .pagination-custom .page-item.active .page-link {
            background-color: #06B6D4;
            color: white;
            box-shadow: 0 4px 10px rgba(6, 182, 212, 0.3);
        }
        .pagination-custom .page-item.disabled .page-link {
            background: transparent;
            color: #ced4da;
        }
    </style>
@endif
