<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use PHPUnit\TestRunner\TestResult\Collector;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(1);
        return view('index', ['posts' => $posts]);
    }

    public function blog(): view
    {
        $posts = Post::all();
        return view('blog/index', ['posts' => $posts]);
    }

    public function show(string $slug, string $id): View
    {
        $post = Post::find($id);
        return view('blog.show', ['post' => $post]);
    }
}