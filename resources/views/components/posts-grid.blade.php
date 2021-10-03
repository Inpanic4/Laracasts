@props(['posts'])
                {{-- in this component take the $post with index[0], The first post in our collection --}}
                <x-post-featured-card :post="$posts[0]" />
            {{-- This if exists only to reduce nonsense existing html css in our page --}}
                @if ($posts->count() > 1)

                    <div class="lg:grid lg:grid-cols-6">
                       {{-- For all the other posts except the first in our collection 
                        (because we want it displayed as featured) show all the other posts --}}
                        @foreach ($posts->skip(1) as $post)

                            <x-post-card 
                            :post="$post" 
                            {{-- dd($loop) there is a variable called iteration --}}
                            {{-- if the loop iteration <3  ()we are still on the second loop) span(take) the 3 columns out of 6 for each element so we will display 2 posts --}}
                            {{-- if the loop >3 ( when we reach loop for third time ) each element will span 2 columns out of 6 so we have 3 elements in each row --}}
                            class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"/>

                        @endforeach

                    </div>
                    
                @endif