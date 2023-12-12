@extends('base') 

@section('content')
    <div class="container mx-auto my-8 text-center">
        <h1 class="text-4xl font-bold mb-6">Feed</h1>

        @foreach ($posts as $post)
            <div class="bg-white p-6 mb-8 rounded-lg shadow-md border border-gray-300">
                <h6 class="text-xl font-bold mb-2">{{ $post->user_name }}</h6>
                <p class="text-gray-700 mb-4">{{ $post->content }}</p>
                <p class="text-gray-500">{{ $post->created_at}}</p>
            </div>
        @endforeach

        {{ $posts->links() }}  {{-- Pagination links --}}
    </div>
@endsection
