@if($paginator->hasPages())
<ul class="navbar nav">
    @if($paginator->onFirstPage())
    <li class="nav-item disabled"><a class="nav-link" href="javascript:void(0)"><<</a></li>
    @else
    <li class="nav-item"><a class="nav-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><<</a></li>
    @endif

    @foreach($elements as $element)

    @if(is_string($element))
    <li class="nav-item disabled"><a class="nav-link" href="#">{{ $element }}</a></li>
    @endif

    @if(is_array($element))

    @foreach($element as $page=>$url)

    @if($page == $paginator->currentPage())
    <li class="nav-item"><a class="nav-link pageActive" href="#">{{ $page }}</a></a></li>
    @else
    <li class="nav-item"><a class="nav-link" href="{{ $url }}">{{ $page }}</a></li>
    @endif

    @endforeach

    @endif

    @endforeach

    @if($paginator->hasMorePages())
    <li class="nav-item"><a class="nav-link" href="{{ $paginator->nextPageUrl() }}">>></a></li>
    @else
    <li class="nav-item disabled"><a class="nav-link" href="javascript:void(0)">>></a></li>
    @endif
</ul>
@endif