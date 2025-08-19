@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center gap-2 align-items-center" style="list-style:none; padding:0;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link rounded-circle bg-light text-muted d-flex justify-content-center align-items-center" style="width:36px; height:36px; border:none;" aria-hidden="true">
                        &lsaquo;
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link rounded-circle border-0 text-primary d-flex justify-content-center align-items-center" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" style="width:36px; height:36px;">
                        &lsaquo;
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true">
                        <span class="page-link rounded-circle bg-transparent border-0 text-secondary d-flex justify-content-center align-items-center" style="width:36px; height:36px;">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <span class="page-link rounded-circle bg-primary text-white border-0 d-flex justify-content-center align-items-center fw-bold" style="width:36px; height:36px;">
                                    {{ $page }}
                                </span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link rounded-circle border  border-primary text-white d-flex bg-primary justify-content-center align-items-center fw-semibold" href="{{ $url }}" style="width:36px; height:36px;">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link rounded-circle border-0 text-white bg-primary d-flex justify-content-center align-items-center" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" style="width:36px; height:36px;">
                        &rsaquo;
                    </a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link rounded-circle bg-light text-muted d-flex justify-content-center align-items-center" style="width:36px; height:36px; border:none;" aria-hidden="true">
                        &rsaquo;
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
