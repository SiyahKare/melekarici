@if ($child->parent_id == $parent_id)
    <div class="card">
        <div class="content">
            <a href="{{ $child->url() }}">
                <h5 class="title">-2- {{ $child->id }} {{ $child->name }} {{ $parent_id }}</h5>
            </a>
        </div>
    </div> <!-- end card -->
@endif