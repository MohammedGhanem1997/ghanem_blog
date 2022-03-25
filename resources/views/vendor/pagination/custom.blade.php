@if ($paginator->hasPages())
    <ul class="uk-pagination uk-margin-large-top">




        {{-- Previous Page Link --}}

        @if ($paginator->onFirstPage())

            {{--  <li><span class="uk-pagination-next"><img src="{{asset('images/main/icons/arrow.svg')}}" alt="" data-uk-svg></span></li> --}}

        @else

            {{-- <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><li><span class="uk-pagination-next"><img src="{{asset('images/main/icons/arrow.svg')}}" alt="" data-uk-svg></span></li> </a></li> --}}

        @endif


        {{-- Pagination Elements --}}

        @foreach ($elements as $element)

            {{-- "Three Dots" Separator --}}

            @if (is_string($element))

                <li class="">{{ $element }}</li>

            @endif


            {{-- Array Of Links --}}

            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <li class="uk-active"><span>{{ $page }}</span></li>

                    @else

                        <li><a href="{{ $url }}">{{ $page }}</a></li>

                    @endif

                @endforeach

            @endif

        @endforeach


        {{-- Next Page Link --}}

        @if ($paginator->hasMorePages())

            {{--    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"> → </a></li> --}}

          @else

            {{--   <li class="disabled"><span> →</span></li> --}}

          @endif

      </ul>

  @endif