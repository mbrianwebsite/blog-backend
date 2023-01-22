<?php

namespace App\Models;

class Blog
{
    private static $blog_posts = [ 
        [
            "posttitle" => 'Prolog',
            "slug" => 'prolog',
            "author" => 'Muhammad',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea alias hic autem, optio nisi unde dolor ipsum accusantium ducimus beatae!'
        ],
        [
            "posttitle" => 'Climax',
            "slug" => 'climax',
            "author" => 'Brian',
            "body" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint saepe labore corporis voluptatibus nobis, qui aliquid a nihil? Ab, nobis fugiat! Sapiente similique atque corrupti, aut iusto nobis libero numquam.'
        ],
        [
            "posttitle" => 'Epilog',
            "slug" => 'epilog',
            "author" => 'Ivan',
            "body" => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur, atque!'
        ]
    
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug){

        $post = static::all();

        // $postingan = [];

        // foreach ($post as $p) {
        //     if ($p["slug"] === $slug){
        //         $postingan = $p;
        //     }
        // }

        return $post->firstWhere('slug', $slug);

    }
}
