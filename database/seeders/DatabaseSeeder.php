<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //User::create([
        //    'name'=>'Realista',
        //    'email' => '203040069@mail.unpas.ac.id',
        //    'password' => bcrypt('12345')
        //]);

        //User::create([
        //    'name'=>'Esthetika',
        //    'email' => '203040000@mail.unpas.ac.id',
        //    'password' => bcrypt('12345')
        //]);
        
        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name'=>'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name'=>'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, magni.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores mollitia sapiente qui. Cupiditate excepturi itaque doloremque accusamus eius fugiat, numquam provident delectus sint praesentium tempore voluptatibus neque nobis voluptas debitis. Veniam cumque aperiam eveniet alias fugiat perspiciatis debitis sapiente quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum exercitationem voluptates ea magni aut laborum eaque a? Error sunt, quaerat natus inventore reiciendis soluta hic amet voluptatem libero ad cum, sed ratione. Est, pariatur! Magnam soluta repellendus laborum temporibus, rerum nisi nemo dicta officiis cum odit vel, repellat magni eos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni repudiandae eum id nemo culpa animi nulla velit praesentium alias, architecto nesciunt illum ad, est neque iste voluptate quam consequatur laborum sapiente commodi. Perspiciatis cupiditate impedit tempora, repudiandae optio, ratione reiciendis placeat dolorem, error libero fugit fuga esse. Eaque, similique neque.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ke Dua',
        //     'slug'=>'judul-ke-dua',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, magni.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores mollitia sapiente qui. Cupiditate excepturi itaque doloremque accusamus eius fugiat, numquam provident delectus sint praesentium tempore voluptatibus neque nobis voluptas debitis. Veniam cumque aperiam eveniet alias fugiat perspiciatis debitis sapiente quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum exercitationem voluptates ea magni aut laborum eaque a? Error sunt, quaerat natus inventore reiciendis soluta hic amet voluptatem libero ad cum, sed ratione. Est, pariatur! Magnam soluta repellendus laborum temporibus, rerum nisi nemo dicta officiis cum odit vel, repellat magni eos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni repudiandae eum id nemo culpa animi nulla velit praesentium alias, architecto nesciunt illum ad, est neque iste voluptate quam consequatur laborum sapiente commodi. Perspiciatis cupiditate impedit tempora, repudiandae optio, ratione reiciendis placeat dolorem, error libero fugit fuga esse. Eaque, similique neque.',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ke Tiga',
        //     'slug'=>'judul-ke-tiga',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, magni.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores mollitia sapiente qui. Cupiditate excepturi itaque doloremque accusamus eius fugiat, numquam provident delectus sint praesentium tempore voluptatibus neque nobis voluptas debitis. Veniam cumque aperiam eveniet alias fugiat perspiciatis debitis sapiente quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum exercitationem voluptates ea magni aut laborum eaque a? Error sunt, quaerat natus inventore reiciendis soluta hic amet voluptatem libero ad cum, sed ratione. Est, pariatur! Magnam soluta repellendus laborum temporibus, rerum nisi nemo dicta officiis cum odit vel, repellat magni eos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni repudiandae eum id nemo culpa animi nulla velit praesentium alias, architecto nesciunt illum ad, est neque iste voluptate quam consequatur laborum sapiente commodi. Perspiciatis cupiditate impedit tempora, repudiandae optio, ratione reiciendis placeat dolorem, error libero fugit fuga esse. Eaque, similique neque.',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ke Empat',
        //     'slug'=>'judul-ke-empat',
        //     'excerpt' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, magni.',
        //     'body'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores mollitia sapiente qui. Cupiditate excepturi itaque doloremque accusamus eius fugiat, numquam provident delectus sint praesentium tempore voluptatibus neque nobis voluptas debitis. Veniam cumque aperiam eveniet alias fugiat perspiciatis debitis sapiente quibusdam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum exercitationem voluptates ea magni aut laborum eaque a? Error sunt, quaerat natus inventore reiciendis soluta hic amet voluptatem libero ad cum, sed ratione. Est, pariatur! Magnam soluta repellendus laborum temporibus, rerum nisi nemo dicta officiis cum odit vel, repellat magni eos. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni repudiandae eum id nemo culpa animi nulla velit praesentium alias, architecto nesciunt illum ad, est neque iste voluptate quam consequatur laborum sapiente commodi. Perspiciatis cupiditate impedit tempora, repudiandae optio, ratione reiciendis placeat dolorem, error libero fugit fuga esse. Eaque, similique neque.',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

    }
}
