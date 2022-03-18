<?php

namespace Database\Seeders;

use App\Models\Article;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create();

        for ($i=0;$i<100;$i++){
            Article::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'author' => $faker->name,
                'category' => $faker->sentence,
                'published_at' => $faker->date
            ]);
        }
    }
}
