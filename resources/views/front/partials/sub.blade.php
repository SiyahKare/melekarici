


<a href="{{ $child->url() }}" class="dropdown-toggle" data-toggle="dropdown">
    {{ $child->name }} <span class="caret"></span>
</a>
<ul class="dropdown-menu multi-level">




    @foreach ($child->children as $child)
        <li class="{{ ($child->url() == Request::url()) ? ' active' : '' }}">
            @if ($child->children->count())
                @include('front.partials.sub')
            @else
                <a href="{{ $child->url() }}">{{ $child->name }}</a>
            @endif
        </li>
    @endforeach
</ul>