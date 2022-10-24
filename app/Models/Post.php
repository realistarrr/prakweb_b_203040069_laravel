<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
        "title" => "Judul Post Pertama",
        "slug"=>"judul-post-pertama",
        "author" => "Realista",
        'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet corporis unde nam ullam eos non nisi at aspernatur accusantium? Provident cupiditate beatae expedita soluta quam nemo magni sapiente nostrum, at aliquam! Odit dolor nisi saepe maiores eaque dicta neque? Officiis aperiam, possimus soluta mollitia, dolores, consequuntur dolorum adipisci vel amet quidem tempore perspiciatis odit commodi iste quibusdam corrupti repudiandae accusamus eius quas illo dolore eligendi cum error? Obcaecati ipsa dignissimos consectetur fuga dolorem dolor iure enim omnis dolorum, repudiandae possimus!"
        ],
        [
        "title" => "Judul Post Kedua",
        "slug"=>"judul-post-kedua",
        "author" => "Esthetika",
        'body' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit praesentium quos, vero magni delectus fugit modi unde adipisci quidem atque incidunt veritatis aut officiis reprehenderit nulla officia tempora ipsam, quia voluptatum numquam cum a deleniti maxime odio! Quod excepturi accusamus rem? Vitae quibusdam excepturi quaerat maxime, totam aliquam. Ut, odit. Vel, reprehenderit incidunt quas voluptate cumque esse recusandae non obcaecati, labore nesciunt delectus. Voluptatem recusandae exercitationem nemo vel! Sapiente doloremque nemo cumque aut quo autem expedita, saepe distinctio dolorum deserunt, repellat inventore debitis veritatis error! Error suscipit excepturi dignissimos inventore est perspiciatis odit modi expedita, deserunt nulla, saepe mollitia ipsum velit. Voluptatum explicabo magni vero exercitationem nisi reiciendis modi saepe."
         ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find ($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
