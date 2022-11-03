<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts 
{
    private static $blog_posts = [
        [
        "title" => "Berita Terupdate",
        "slug" => "judul-pertam",
        "author" => "Adra Dienta H",
        "body" => "Lorem ipsum dolor sit amet consectetur
       adipisicing elit. Beatae quibusdam ducimus enim quidem accusantium sint
       quod totam! Molestiae, consequatur excepturi facere et ex cupiditate
       officia nostrum tenetur saepe blanditiis, nobis harum dolores reiciendis
       iusto repudiandae. Aliquam sint voluptatibus sequi ea explicabo commodi?
       Molestiae, non assumenda! Eos harum veniam voluptatum temporibus
       voluptatibus maiores ullam possimus nostrum cum! Numquam rem laudantium
       maxime ullam obcaecati maiores quia eos repellat, reprehenderit debitis
       non magni nesciunt facilis esse doloremque eaque voluptas culpa harum!
       Dolorem velit nam architecto pariatur modi dicta eius, beatae rem
       tempora consequatur, earum deserunt iste rerum aliquam sint consequuntur
       vel accusamus! Aspernatur."
   ],
    [
    "title" => "Judul Kedua",
    "slug" => "judul-kedua",
    "author" => "Adra Dienta H",
    "body" => "Lorem ipsum dolor sit amet consectetur
   adipisicing elit. Beatae quibusdam ducimus enim quidem accusantium sint
   quod totam! Molestiae, consequatur excepturi facere et ex cupiditate
   officia nostrum tenetur saepe blanditiis, nobis harum dolores reiciendis
   iusto repudiandae. Aliquam sint voluptatibus sequi ea explicabo commodi?
   Molestiae, non assumenda! Eos harum veniam voluptatum temporibus
   voluptatibus maiores ullam possimus nostrum cum! Numquam rem laudantium
   maxime ullam obcaecati maiores quia eos repellat, reprehenderit debitis
   non magni nesciunt facilis esse doloremque eaque voluptas culpa harum!
   Dolorem velit nam architecto pariatur modi dicta eius, beatae rem
   tempora consequatur, earum deserunt iste rerum aliquam sint consequuntur
   vel accusamus! Aspernatur."
    ]
    ];
    //method all
public static function all()
{
return collect(self::$blog_posts);

}
public static function find($slug)
{
  $posts = static::all();
  return  $posts->firstWhere('slug', $slug);  

}
}
