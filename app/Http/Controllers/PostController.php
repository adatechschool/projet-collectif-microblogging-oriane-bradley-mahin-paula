<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index (): View {
        
        return view('posts.index', [
            'posts' => Post::paginate(5),
        ]);
    }

    public function show(string $slug, string $id): RedirectResponse | View
    {
        $post = Post::findOrFail($id);
        if ($post ->slug !== $slug) {
            return to_route('posts.show', ['slug' =>$post->slug, 'id' =>$post->id]);
    }
    return view('posts.show', [
        'post' => $post
    ]);

    }
}
