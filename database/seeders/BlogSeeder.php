<?php

namespace Database\Seeders;

use App\Models\Blog;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Blog::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => 'https://via.placeholder.com/150',
                'slug' => $faker->slug,
                'category_id' => $faker->numberBetween(1, 5)
            ]);
        }
    }
}
