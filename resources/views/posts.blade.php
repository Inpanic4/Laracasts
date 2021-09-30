<!doctype html>

<title>My Blog</title>

<body>

    @foreach ($posts as $post)

        <article>
            <a href="/posts/{{$post->slug}}">
            <h1>{{ $post->title }}</h1>
        </a>
            <div>{{ $post->body }}</div>
        </article>
    @endforeach




</body>
