@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    @if ($category->posts->isEmpty())
        <p>No posts available for this category.</p>
    @else
        <div>
            <h3>{{ $category->get_latest_post()->title }}</h3>
            <p>{{ $category->get_latest_post()->content }}</p>
            <p>Posted on: {{ $category->get_latest_post()->date }}</p>
        </div>
    @endif
@endforeach
