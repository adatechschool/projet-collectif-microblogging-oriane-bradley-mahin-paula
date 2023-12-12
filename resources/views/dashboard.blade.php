<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <article>
                    <h1>{{ $user->name }}</h1>
                        <p>
                            {{ $user->biography }}
                        </p>
                    
                        <h2>Posts</h2>
                        @if($user->posts->count() > 0)
                            <ul>
                                @foreach($user->posts as $post)
                                    <li>
                                        <p>{{ $post->content }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No posts found.</p>
                        @endif 
                        
                    </article>
            </div>
        </div>
    </div>
</x-app-layout>
