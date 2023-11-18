<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alif",
        "email" => "alif@gmail.com",
        "image" => "img/a.jpg"
    ]);
})->name('about');

Route::get('/posts', [PostController::class, 'index'])->name('posts');


//halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('detail');

Route::get('/categories', function () {
    return View('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return View('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});
