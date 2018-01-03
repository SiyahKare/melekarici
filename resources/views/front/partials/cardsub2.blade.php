@include('front.partials.card2')

    @foreach ($child2->children as $child3)

            @if ($child3->children->count())

                @include('front.partials.cardsub3')

            @else

                @include('front.partials.card2')

            @endif

    @endforeach
