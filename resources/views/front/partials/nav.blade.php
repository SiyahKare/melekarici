<nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="/">Melek Arıcı</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul  class="nav navbar-nav navbar-right">
                @if ($menu_items->count())
                    @foreach ($menu_items as $k => $menu_item)
                        @if (($menu_item->page_id && is_object($menu_item->page)) || !$menu_item->page_id)
                            @if ($menu_item->children->count())
                                <li class="navitem dropdown {{ ($k==0)?' firstitem':'' }}">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $menu_item->name }} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach ($menu_item->children as $i => $child)
                                            <li class="{{ ($child->url() == Request::url())?'active':'' }}"><a href="{{ $child->url() }}">{{ $child->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="navitem {{ ($k==0)?' firstitem':'' }} {{ ($menu_item->url() == Request::url())?' active':'' }}">
                                    <a href="{{ $menu_item->url() }}">{{ $menu_item->name }}</a>
                                </li>
                            @endif
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>

    </div>
</nav>