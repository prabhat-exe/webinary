@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center gap-2">
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                            <span class="dot d-inline-block rounded-circle {{ $page == $paginator->currentPage() ? 'bg-white' : 'bg-white bg-opacity-25' }}"
                                  style="width: 12px; height: 12px;">
                            </span>
                        </li>
                    @endforeach
                @endif
            @endforeach
        </ul>
    </nav>
@endif
