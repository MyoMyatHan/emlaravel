<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Comment;
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
        Article::factory()->count(20)->create();
        Comment::factory()->count(20)->create();
        Category::factory()->count(40)->create();



        User::factory()->create([
            "name" => "agag",
            "email" => "agag@gmail.com",
        ]);
        User::factory()->create([
            "name" => "mgmg",
            "email" => "mgmg@gmail.com",
        ]);
}
}
