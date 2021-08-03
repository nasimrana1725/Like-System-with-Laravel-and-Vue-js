<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsSeederTable extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */


    public function run()
    {
        $faker = Faker::create('App\Models\Post');
        DB::table('posts')->insert([
          'title' => $faker->sentence,
          'slug' => \Str::slug($faker->sentence),
          'user_id' => 1
        ]);

    }
}
