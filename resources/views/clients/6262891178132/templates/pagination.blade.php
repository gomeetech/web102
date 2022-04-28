@if ($paginator->hasPages())
<?php
$activeClass = 'active';
?>

            
            <ul class="pagination">

                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="disabled prev"><a href="javascript:void(0)"><i class="fa fa-angle-double-left"></i></a></li>
                @else
                    <li class="prev"><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-double-left"></i></a></li>
                @endif

                {{-- Pagination Elements --}}
                @php
                $l = false;
                $r = false;
                $l2 = false;
                $r2 = false;
                $mp = 0;
                @endphp
                @foreach ($elements as $element)
                    <?php 
                        $cp = $paginator->currentPage();
                        $t = $paginator->lastPage();
                    ?>
                        
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        @if(!$l && !$l2 && $mp < $cp) 
                            @php 
                            $l = true;
                            $l2 = true; 
                            @endphp
                            <li class="disabled"><a href="javascript:void(0)"><span>{{ $element }}</span></a></li>
                        @elseif(!$r && !$r2 && $mp > $cp)
                            <li class="disabled"><a href="javascript:void(0)"><span>{{ $element }}</span></a></li>
                            @php 
                            $r = true; 
                            $r2 = true; 
                            @endphp
                        @endif
                        
                    @endif
                    
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @php $mp++; @endphp
                            @if($page == 1 || ($page >= $cp-2 && $page <= $cp+2) || $page == $t)
                                @if ($page == $paginator->currentPage())
                                    <li class="{{$activeClass}}"><a href="javascript:void(0)"><span>{{ $page }}</span></a></li>
                                @else
                                    <li class=" tran3s"><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @elseif($page < $cp-2 && $page > 1 && !$l)
                            @php $l = true; @endphp
                                <li class="disabled"><a href="javascript:void(0)"><span>...</span></a></li>
                            
                            @elseif($page > $cp+2 && $page < $t && !$r)
                                @php $r = true; @endphp
                                <li class="disabled"><a href="javascript:void(0)"><span>...</span></a></li>
                            
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class=" tran3s next"><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-double-right"></i></a></li>
                @else
                    <li class="disabled next"><a href="javascript:void(0)"><span><i class="fa fa-angle-double-right"></i></span></a></li>
                @endif
            </ul>
@endif
