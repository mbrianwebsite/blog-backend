<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Blog::factory(10)->create();

        // Blog::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => "Apa itu Website?",
        //     'slug' => "apa-itu-website",
        //     'excrept' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);

        // Blog::create([
        //     'category_id'=> 1,
        //     'user_id'=> 2,
        //     'title'=> "Website Adalah",
        //     'slug'=> "website-adalah",
        //     'excrept'=> "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body'=> "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);
        // Blog::create([
        //     'category_id' => 2,
        //     'user_id' => 3,
        //     'title' => "Apa itu Desain Grafis?",
        //     'slug' => "apa-itu-desain-grafis",
        //     'excrept' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);

        // Blog::create([
        //     'category_id' => 2,
        //     'user_id' => 4,
        //     'title' => "Desain Grafis Adalah",
        //     'slug' => "desain-grafis-adalah",
        //     'excrept' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);

        // Blog::create([
        //     'category_id' => 3,
        //     'user_id' => 5,
        //     'title' => "Branding Adalah",
        //     'slug' => "branding-adalah",
        //     'excrept' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);

        // Blog::create([
        //     'category_id'=> 3,
        //     'user_id'=> 6,
        //     'title'=> "Marketing Adalah",
        //     'slug'=> "Marketing-adalah",
        //     'excrept'=> "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae</p>",
        //     'body'=> "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus quia natus ex molestias unde, veritatis eveniet et tenetur. Distinctio iusto veritatis nostrum quas laborum non, dolor eaque.</p><p>Aperiam doloremque ipsam inventore pariatur id aut magni voluptatibus quidem facilis nesciunt fugiat eos, repellendus totam temporibus ipsa velit unde ab, fuga quisquam non labore tempore consequuntur.</p><p>Officia nostrum, provident amet, perspiciatis animi velit minus alias eligendi neque quia veritatis quae doloremque dignissimos libero voluptas odio optio, non rerum ad consectetur officiis nam.</p><p>Fugit doloribus maiores, et provident quam hic ab ipsa quasi dicta mollitia ad. Qui repellat quae officiis animi blanditiis et sequi a, harum hic nisi quas dicta eaque aliquid enim debitis itaque, praesentium magnam asperiores! Quod molestias consequatur nisi odio sed ipsam suscipit eos, distinctio corrupti possimus facere! In repellat maxime delectus quis veritatis quas nulla natus corporis facere, voluptates ea velit, magnam dolorem sapiente et ipsa dolor accusantium.</p>"
        // ]);

        Category::create([
            'name' => "Web Design",
            'slug' => "web-design"
        ]);

        Category::create([
            'name' => "Graphic Design",
            'slug' => "graphic-design"
        ]);

        Category::create([
            'name' => "Digital Marketing",
            'slug' => "digital-marketing"
        ]);
    }
}
