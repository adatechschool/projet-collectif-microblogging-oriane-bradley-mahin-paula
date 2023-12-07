<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index (){
        return Post::all();
    }

    public function show(string $slug, string $id): RedirectResponse | Post
    {
        $post = Post::findOrFail($id);
        if ($post ->slug !== $slug) {
            return to_route('posts.show', ['slug' =>$post->slug, 'id' =>$post->id]);
    }
    return $post;

}
}
