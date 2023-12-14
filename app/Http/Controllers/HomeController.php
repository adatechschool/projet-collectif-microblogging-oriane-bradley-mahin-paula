<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\View\View;


class HomeController extends Controller
{
    public function feed(): View{
        
        $posts = Post::latest()->paginate(20);

        return view('home.feed', [
            'posts' => $posts,
        ]);
    }
}
