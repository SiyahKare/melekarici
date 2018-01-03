@include('front.partials.card')

    @foreach ($child->children as $child)

            @if ($child->children->count())

                @include('front.partials.cardsub')

            @else

                @include('front.partials.card')

            @endif

    @endforeach
