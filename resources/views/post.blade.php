<!doctype html>

<title>My Blog</title>

<body>

    <article>
        <p>
      By<a href="#"> Jeffrey </a> In <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a>
    </p>
        <h1>{{ $post->title }}</h1>
        <p>

            {!! $post->body !!}
        </p>


    </article>

    <a href="/">Go back</a>

</body>
