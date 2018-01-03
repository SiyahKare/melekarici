@if ($child->parent_id == $parent_id)
    <div class="card">
        <div class="content">
            <a href="{{ $child->url() }}">
                <h5 class="title">{{ $child->name }}</h5>
            </a>
        </div>
    </div> <!-- end card -->
@endif