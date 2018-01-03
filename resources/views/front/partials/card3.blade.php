@if (($child->parent_id == $parent_id) && ($child->depth == 3))
    <div class="card">
        <div class="content">
            <a href="{{ $child->url() }}">
                <h5 class="title">{{ $child->id }} {{ $child->name }} {{ $parent_id }}  -- {{ $child->parent_id }}</h5>
            </a>
        </div>
    </div> <!-- end card -->
@endif