<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php
        if (empty($link_limit))
        {
            $link_limit = LINK_LIMIT;
        }
        ?>
        <li class="page-item previous {{ ($paginator->onFirstPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" tabindex="-1">{{ __('label.prev') }}</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit/2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links)
            {
                $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links)
            {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)
                <li class="page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        <li class="page-item next {{ ($paginator->lastPage() == $paginator->currentPage()) ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}">{{ __('label.next') }}</a>
        </li>
    </ul>
</nav>
