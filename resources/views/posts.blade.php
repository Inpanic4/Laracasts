    <x-layout>
        
  
    @foreach ($posts as $post)
    
        <article>
            <a href="/posts/{{$post->slug}}">
            <h1>{{ $post->title }}</h1>
 
        </a>

       By <a href="/authors/{{$post->author->username}}">{{$post->author->name}} </a>In <a href="/categories/{{$post->category->slug}}">{{$post->category->name }}</a>
       

            <div>{{ $post->body }}</div>


            
        </article>
    @endforeach

</x-layout>


