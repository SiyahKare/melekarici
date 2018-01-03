@if ($menu_items->count())

    @foreach ($menu_items as $menu_item)

        @if ($menu_item->children->count())

            @foreach ($menu_item->children as $child)

                @if ($child->children->count())

                    @include('front.partials.cardsub')

                @else

                    @include('front.partials.card')

                @endif

            @endforeach

        @else

            @foreach ($menu_item as $child)

                @include('front.partials.card')

            @endforeach

        @endif
    @endforeach
@endif