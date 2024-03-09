<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul 1",
            "slug" => "judul-1",
            "author" => "Matthew",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident quod, libero
            aspernatur et, reiciendis, debitis sit facilis laboriosam dignissimos id
            delectus similique mollitia incidunt optio est commodi? Distinctio sapiente, sed
            facilis, totam repudiandae dolorum excepturi ipsa porro, delectus iste fugit
            iure autem! Consequatur nesciunt ut animi quae beatae consequuntur magni quam,
            aspernatur nulla vero officiis accusamus. Fuga sed, quis aperiam provident, iure
            repudiandae incidunt, rerum nobis dolorum odit vel deleniti neque magni nihil
            optio pariatur facere consequatur debitis quod! Perferendis."
        ], [
            "title" => "Judul 2",
            "slug" => "judul-2",
            "author" => "Lee",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolorem excepturi
            vel ex ea accusantium repellendus minima nam sed aperiam vitae, veritatis sit
            mollitia inventore, ipsa neque, distinctio necessitatibus quisquam ad. Minima,
            dolores sapiente et ipsum obcaecati ullam consectetur veniam consequatur
            perferendis nobis porro, iusto deserunt inventore quod. Eum perferendis hic
            eveniet voluptatibus totam, molestiae quis officiis placeat possimus quibusdam
            numquam non ut, aspernatur doloribus quae repellat ab nisi corporis veritatis.
            Voluptas, ea assumenda id sunt voluptates impedit? Reprehenderit, error
            repudiandae. Laudantium ipsam natus earum perferendis ea ipsa tempora libero
            atque modi saepe minima maiores ut ipsum, repellendus doloribus corporis?"
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
