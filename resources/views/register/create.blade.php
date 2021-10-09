<x-layout>

        <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-300 p-6 border border-gray-400 rounded-xl">
         
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="POST" class="mt-10">
                @csrf


                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="name">
                        {{ __('name') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="name"
                           name="name"
                           value="{{ old('name') }}"
                           required>
                           @error('name')
                           <p class="text-red-500 twxt-xs mt-1">{{$message}}</p>
                           @enderror
                          
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="username">
                        {{ __('username') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="username"
                           name="username"
                           value="{{ old('username') }}"
                           required>
                           @error('username')
                           <p class="text-red-500 twxt-xs mt-1">{{$message}}</p>
                           @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="email">
                        {{ __('email') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required>
                           @error('email')
                           <p class="text-red-500 twxt-xs mt-1">{{$message}}</p>
                           @enderror
                </div>
                
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="password">
                        {{ __('password') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="password"
                           id="password"
                           name="password"
                           value=""
                           required>
                           @error('password')
                           <p class="text-red-500 twxt-xs mt-1">{{$message}}</p>
                           @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                    class="bg-gray-600 text-white rounded py-2 px-5 hover:bg-gray-700"    
                    >
                        Submit
                    </button>
                </div>

            
            </form>
        </main>  

    </section>

    </x-layout>

    