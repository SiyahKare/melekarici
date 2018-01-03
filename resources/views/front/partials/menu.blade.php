<div class="collapse navbar-collapse">
    <ul  class="nav navbar-nav navbar-right">

@if ($menu_items->count())
    @foreach ($menu_items as $menu_item)
        @if ($menu_item->children->count())
            <li class="navitem dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {{ $menu_item->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu multi-level">
                    @foreach ($menu_item->children as $child)
                        <li class="{{ ($child->url() == Request::url()) ? ' active' : '' }}">
                            @if ($child->children->count())
                                @include('front.partials.sub')
                            @else
                                <a href="{{ $child->url() }}">{{ $child->name }}</a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="navitem {{ ($menu_item->url() == Request::url()) ? ' active' : '' }}">
                <a href="{{ $menu_item->url() }}">{{ $menu_item->name }}</a>
            </li>
        @endif
    @endforeach
@endif

    </ul>
</div>