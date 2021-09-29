<!doctype html>

<title>My Blog</title>

<body>

    @foreach ($posts as $post)
        
    <article>
        {{ $post }}
    </article>
    @endforeach

  


</body>