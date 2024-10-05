<?php

use App\Http\Controllers\BlogController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BlogController::class, 'index'])->name('index');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.index');

Route::get('/blog/{slug}-{id}', [BlogController::class, 'show'])->where([
    'slug' => '[a-z0-9\-]+',
    'id' => '[\d]+',
])->name('blog.show');