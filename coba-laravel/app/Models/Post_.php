<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
