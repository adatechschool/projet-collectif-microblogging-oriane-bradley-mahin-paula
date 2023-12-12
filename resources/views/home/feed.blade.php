@extends('base') 


@section('content')
    <h1>Feed</h1>

    @foreach ($posts as $post)

        <div>
            <h6>{{ $post->user_name }}</h6>
            <p>{{ $post->content }}</p>
            <p>{{ $post->created_at}}</p>
        </div>
    @endforeach

    {{ $posts->links() }}  {{-- Pagination links --}}
@endsection
