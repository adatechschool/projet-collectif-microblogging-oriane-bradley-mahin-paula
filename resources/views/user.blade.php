@extends('base')

{{-- @section('title', $user->user_name) --}}

@section('content')

<article>
<h1>{{ $user->name }}</h1>
      <p>
        {{ $user->content }}
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

@endsection