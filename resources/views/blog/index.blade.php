@foreach($posts as $post)
    <div>
        <a href="/blog/{{ $post->slug }}">
            <img src="{{ $post->featured_image }}">
        </a>
    </div>
    <div>
        <a href="/blog/{{ $post->slug }}">
            <h5>{{ $post->title }}</h5>
            <p>{{ $post->excerpt }}</p>
        </a>
    </div>
    <div>
        <small>Publication Date: {{ $post->publish_date }}</small>
    </div>
    <hr />
@endforeach
