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

    public function blog(): array
    {
        return [
            'link' => route('blog.show', ['slug' => 'mon-article', 'id' => 12])
        ];
    }
}