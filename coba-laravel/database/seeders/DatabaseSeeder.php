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
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Alif Akbar',
            'email' => 'alif@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Hilmy',
            'email' => 'hilmy@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertma',
            'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae?',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae? Aliquam quo vero illum eius velit delectus et, explicabo iure at! Iure animi voluptatum ad commodi nostrum asperiores deserunt. Nulla, esse alias neque ipsam corrupti fugiat architecto quam maxime harum. Omnis, quae quis sequi sint ea, est eius, cumque nisi expedita alias neque! Sunt temporibus non quos nobis impedit eligendi iste vitae mollitia magnam vero, quis fuga voluptatum unde velit et quibusdam? Facilis repudiandae nemo, vero neque beatae quasi quisquam vel, eligendi atque mollitia distinctio.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae?',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae? Aliquam quo vero illum eius velit delectus et, explicabo iure at! Iure animi voluptatum ad commodi nostrum asperiores deserunt. Nulla, esse alias neque ipsam corrupti fugiat architecto quam maxime harum. Omnis, quae quis sequi sint ea, est eius, cumque nisi expedita alias neque! Sunt temporibus non quos nobis impedit eligendi iste vitae mollitia magnam vero, quis fuga voluptatum unde velit et quibusdam? Facilis repudiandae nemo, vero neque beatae quasi quisquam vel, eligendi atque mollitia distinctio.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae?',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae? Aliquam quo vero illum eius velit delectus et, explicabo iure at! Iure animi voluptatum ad commodi nostrum asperiores deserunt. Nulla, esse alias neque ipsam corrupti fugiat architecto quam maxime harum. Omnis, quae quis sequi sint ea, est eius, cumque nisi expedita alias neque! Sunt temporibus non quos nobis impedit eligendi iste vitae mollitia magnam vero, quis fuga voluptatum unde velit et quibusdam? Facilis repudiandae nemo, vero neque beatae quasi quisquam vel, eligendi atque mollitia distinctio.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae?',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur eum laudantium non laboriosam, nisi facere, ipsum veritatis repellat sunt quo asperiores aspernatur omnis fuga repudiandae? Aliquam quo vero illum eius velit delectus et, explicabo iure at! Iure animi voluptatum ad commodi nostrum asperiores deserunt. Nulla, esse alias neque ipsam corrupti fugiat architecto quam maxime harum. Omnis, quae quis sequi sint ea, est eius, cumque nisi expedita alias neque! Sunt temporibus non quos nobis impedit eligendi iste vitae mollitia magnam vero, quis fuga voluptatum unde velit et quibusdam? Facilis repudiandae nemo, vero neque beatae quasi quisquam vel, eligendi atque mollitia distinctio.',
            'category_id' => 2,
            'user_id' => 2
        ]);
    }
}
