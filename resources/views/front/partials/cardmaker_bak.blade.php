@if ($menu_items->count())

    @foreach ($menu_items as $child)

                    @include('front.partials.card')


    @endforeach
@endif