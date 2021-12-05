<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Rezki Ananda",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus ducimus error laboriosam nesciunt, numquam quis repellat sapiente voluptate. Consectetur cupiditate eligendi iste molestias nam nemo, quasi quo veniam? Ad amet asperiores aspernatur commodi cumque deserunt distinctio dolores eligendi, eum impedit magnam, maiores minima nulla porro praesentium provident quas quibusdam quidem quo recusandae reprehenderit tempora voluptatibus? Ab aliquam aliquid assumenda beatae, delectus doloremque earum fugit in inventore iusto repellendus saepe sunt, tempore vitae voluptate? Enim et expedita obcaecati officia quia quod!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rezki Ananda",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae cupiditate deleniti earum expedita inventore ipsum magnam magni, minima modi natus nesciunt porro quae quas saepe, sapiente tempore unde. Ad, consectetur debitis doloremque eius facilis harum impedit itaque nam pariatur, porro sapiente veritatis vero voluptatibus. Aut beatae debitis deserunt, eos impedit, nostrum pariatur praesentium quae qui rem reprehenderit suscipit unde veniam? Consequatur incidunt iusto laboriosam maxime non pariatur quidem quis quod sit velit! Cum debitis, dolores earum fugit ipsa nobis non porro? Aliquid at consequatur consequuntur ducimus fugit hic, incidunt magnam porro provident quasi recusandae repellendus, sunt tempore vero."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Ananda",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti ducimus fugiat illo, laboriosam neque nulla obcaecati, perferendis, perspiciatis quasi repudiandae rerum tempore totam! Accusantium ad consectetur dolores dolorum eaque inventore, iusto nemo neque officia quos rerum sapiente voluptatibus. Aperiam atque autem commodi culpa cumque, dicta doloribus earum est excepturi inventore magni mollitia natus nesciunt nihil nostrum odio officiis perferendis placeat quaerat quam quod rem repellat repudiandae veniam veritatis vitae, voluptates. Consequuntur culpa dolorem enim fuga incidunt maiores pariatur perspiciatis praesentium. Ab accusamus adipisci assumenda, blanditiis est officiis saepe? Ab at aut, culpa eius iste labore magnam nemo neque nobis nulla odio omnis quod sint, soluta tempora vel voluptatum. A deleniti eveniet hic impedit nostrum obcaecati officiis quaerat quibusdam sed!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam asperiores beatae cupiditate deleniti earum expedita inventore ipsum magnam magni, minima modi natus nesciunt porro quae quas saepe, sapiente tempore unde. Ad, consectetur debitis doloremque eius facilis harum impedit itaque nam pariatur, porro sapiente veritatis vero voluptatibus. Aut beatae debitis deserunt, eos impedit, nostrum pariatur praesentium quae qui rem reprehenderit suscipit unde veniam? Consequatur incidunt iusto laboriosam maxime non pariatur quidem quis quod sit velit! Cum debitis, dolores earum fugit ipsa nobis non porro? Aliquid at consequatur consequuntur ducimus fugit hic, incidunt magnam porro provident quasi recusandae repellendus, sunt tempore vero."
        ]
    ];

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

    public static function all()
    {
        return collect(self::$blog_posts);
    }
}
