<!doctype html>

<title>My Blog</title>

<body>

    <article>
        <p>
      By<a href="/authors/{{$post->author->username}}" >{{$post->author->name}} </a> In <a href="/cat }}egories/{{$post->category->slug}}">{{$post->category->name }}</a>
    </p>
        <h1>{{ $post->title }}</h1>
        <p>

            {!! $post->body !!}
        </p>


    </article>

    <a href="/">Go back</a>

</body>
