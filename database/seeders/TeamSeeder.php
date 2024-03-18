<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $startDate = $faker->date('Y-m-d', '2024-12-31');
            $endDate = $faker->date('Y-m-d', '2025-12-31');
            $name = $faker->name;
            DB::table('teams')->insert([
                'name' => $name,
                'jabatan' => $faker->jobTitle,
                'fb' => $faker->url,
                'twitter' => $faker->url,
                'instagram' => $faker->url,
                'start_date' => $startDate,
                'end_date' => $endDate,
                'image' => $faker->imageUrl(),
                'slug' => Str::slug($name),
            ]);
        }
    }
}
