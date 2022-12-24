<?php

namespace App\Models;



class post_
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "ikbal",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis officia quia fugiat suscipit sed qui temporibus iste iusto facilis, debitis, necessitatibus maiores ullam inventore blanditiis atque dignissimos nihil dolores? Ullam culpa ducimus ipsa perferendis sint quod deleniti quisquam? Illo sed a magni cumque exercitationem omnis iusto aliquid aspernatur adipisci. Quidem?"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "jmbd",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum dolorum temporibus, necessitatibus eaque debitis distinctio animi asperiores fugiat magni sit blanditiis in laborum quo nemo? Explicabo adipisci possimus impedit ipsa inventore repudiandae voluptatum, cupiditate dolor assumenda labore. Odio, nesciunt dolor! Temporibus molestiae ipsum provident voluptas nihil quisquam accusantium sunt. Suscipit nesciunt aut expedita blanditiis tempora voluptates necessitatibus voluptatibus autem amet, voluptatum inventore vel numquam, cupiditate corporis eos. Provident minima dolorum voluptate nihil, ipsa aspernatur reiciendis. Doloremque tempore dolorem beatae perferendis. Ea, modi error! Voluptatum, nemo! Aspernatur officia similique laboriosam recusandae magnam. Ullam minima harum suscipit deserunt qui maxime maiores possimus."
        ],
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug) 
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }

}
