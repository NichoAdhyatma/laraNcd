<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Berita;
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
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Nicholaus Adhyatma',
        //     'email' => 'nicho783@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Faris Aditya',
        //     'email' => 'faris3@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'webdesign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Berita::factory(15)->create();

        //     Berita::create([
        //         'title' => 'JavaScipt Library',
        //         'slug' => 'judul-pertama',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero, quos consectetur exercitationem perspiciatis architecto voluptatum mollitia. Nihil, et.Minima labore enim delectus quam, reiciendis assumenda id harum ab adipisci commodi veritatis aliquid qui! Itaque earum beatae quisquam praesentium perspiciatis fuga, ipsam sapiente molestias dolor ducimus aperiam eum ab!</p>',
        //         'user_id' => 1,
        //         'category_id' => 1
        //     ]);

        //     Berita::create([
        //         'title' => 'Programming dengan C',
        //         'slug' => 'judul-kedua',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero, quos consectetur exercitationem perspiciatis architecto voluptatum mollitia. Nihil, et.Minima labore enim delectus quam, reiciendis assumenda id harum ab adipisci commodi veritatis aliquid qui! Itaque earum beatae quisquam praesentium perspiciatis fuga, ipsam sapiente molestias dolor ducimus aperiam eum ab!</p>',
        //         'user_id' => 1,
        //         'category_id' => 1
        //     ]);

        //     Berita::create([
        //         'title' => 'Bootstrap Vs Tailwind',
        //         'slug' => 'judul-ketiga',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero, quos consectetur exercitationem perspiciatis architecto voluptatum mollitia. Nihil, et.Minima labore enim delectus quam, reiciendis assumenda id harum ab adipisci commodi veritatis aliquid qui! Itaque earum beatae quisquam praesentium perspiciatis fuga, ipsam sapiente molestias dolor ducimus aperiam eum ab!</p>',
        //         'user_id' => 2,
        //         'category_id' => 2
        //     ]);

        //     Berita::create([
        //         'title' => 'Personal Post',
        //         'slug' => 'judul-keempat',
        //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero',
        //         'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus sequi tenetur vel, dolorem aliquam illum. Eius ipsa rem vitae iusto vero, quos consectetur exercitationem perspiciatis architecto voluptatum mollitia. Nihil, et.Minima labore enim delectus quam, reiciendis assumenda id harum ab adipisci commodi veritatis aliquid qui! Itaque earum beatae quisquam praesentium perspiciatis fuga, ipsam sapiente molestias dolor ducimus aperiam eum ab!</p>',
        //         'user_id' => 2,
        //         'category_id' => 3
        //     ]);
    }
}
