<?php

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

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Alif",
        "email" => "alif@gmail.com",
        "image" => "img/a.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Alif",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi culpa, excepturi, quas sed suscipit facilis maxime aperiam laboriosam quo fuga quis temporibus expedita fugiat omnis, corporis accusantium rerum a molestiae totam nulla est dolorem et. Doloremque voluptas impedit nesciunt libero eos tempore qui totam quas mollitia praesentium iure porro ex magnam, aliquid voluptates quo sint? Saepe laudantium dolor ullam recusandae sint ad et obcaecati cum consequatur. Fugit tempora earum incidunt. Ut exercitationem, autem maxime cupiditate deserunt ad modi corporis esse quae accusantium in optio architecto quisquam reprehenderit aspernatur natus animi tenetur iste consectetur. Eveniet maiores commodi, doloremque quae aliquam delectus."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "author" => "Akbar",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi culpa, excepturi, quas sed suscipit facilis maxime aperiam laboriosam quo fuga quis temporibus expedita fugiat omnis, corporis accusantium rerum a molestiae totam nulla est dolorem et. Doloremque voluptas impedit nesciunt libero eos tempore qui totam quas mollitia praesentium iure porro ex magnam, aliquid voluptates quo sint? Saepe laudantium dolor ullam recusandae sint ad et obcaecati cum consequatur. Fugit tempora earum incidunt. Ut exercitationem, autem maxime cupiditate deserunt ad modi corporis esse quae accusantium in optio architecto quisquam reprehenderit aspernatur natus animi tenetur iste consectetur. Eveniet maiores commodi, doloremque quae aliquam delectus."
        ]
    ];
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});


//halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "Judul-Post-Pertama",
            "author" => "Alif",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi culpa, excepturi, quas sed suscipit facilis maxime aperiam laboriosam quo fuga quis temporibus expedita fugiat omnis, corporis accusantium rerum a molestiae totam nulla est dolorem et. Doloremque voluptas impedit nesciunt libero eos tempore qui totam quas mollitia praesentium iure porro ex magnam, aliquid voluptates quo sint? Saepe laudantium dolor ullam recusandae sint ad et obcaecati cum consequatur. Fugit tempora earum incidunt. Ut exercitationem, autem maxime cupiditate deserunt ad modi corporis esse quae accusantium in optio architecto quisquam reprehenderit aspernatur natus animi tenetur iste consectetur. Eveniet maiores commodi, doloremque quae aliquam delectus."
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "Judul-Post-Kedua",
            "author" => "Akbar",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi culpa, excepturi, quas sed suscipit facilis maxime aperiam laboriosam quo fuga quis temporibus expedita fugiat omnis, corporis accusantium rerum a molestiae totam nulla est dolorem et. Doloremque voluptas impedit nesciunt libero eos tempore qui totam quas mollitia praesentium iure porro ex magnam, aliquid voluptates quo sint? Saepe laudantium dolor ullam recusandae sint ad et obcaecati cum consequatur. Fugit tempora earum incidunt. Ut exercitationem, autem maxime cupiditate deserunt ad modi corporis esse quae accusantium in optio architecto quisquam reprehenderit aspernatur natus animi tenetur iste consectetur. Eveniet maiores commodi, doloremque quae aliquam delectus."
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single post",
        "post" => $new_post
    ]);
});
