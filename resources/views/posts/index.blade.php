@extends('base')

@section('title', 'Accueil du blog')

@section('content')
    <h1>Mon blog</h1>

    @foreach ($posts as $post)
        <article>
            <h2>{{ $post ->user_name }}</h2>
            <p>
                {{$post ->content }}
            </p>
            <p>
                <a href="{{ route('posts.show', ['slug' => $post->slug, 'id' => $post->id]) }}" class="btn btn-primary">Lire la suite</a>
                <a href="{{ route('profil.show', ['user_name' => $post->user_name, 'id' => $post->id])}}" class="btn btn-primary">{{'Voir le profil de' .' ' . $post ->user_name}}</a>
            </p>
        </article>
    @endforeach

    {{ $posts->links() }}
@endsection