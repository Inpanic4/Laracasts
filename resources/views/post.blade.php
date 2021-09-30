<!doctype html>

<title>My Blog</title>

<body>

    <article>
        <a href="#">{{$post->category->name  }}</a>
        <h1>{{ $post->title }}</h1>
        <p>

            {!! $post->body !!}
        </p>


    </article>

    <a href="/">Go back</a>

</body>
