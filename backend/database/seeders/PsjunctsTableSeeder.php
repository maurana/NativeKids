<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Psjuncts;

class PsjunctsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['pictures_id' => 1, 'sounds_id' => 1, 'categories_id' => 1],
            ['pictures_id' => 2, 'sounds_id' => 2, 'categories_id' => 1],
            ['pictures_id' => 3, 'sounds_id' => 3, 'categories_id' => 1],
            ['pictures_id' => 4, 'sounds_id' => 4, 'categories_id' => 1],
            ['pictures_id' => 5, 'sounds_id' => 5, 'categories_id' => 1],
            ['pictures_id' => 6, 'sounds_id' => 6, 'categories_id' => 1],
            ['pictures_id' => 7, 'sounds_id' => 7, 'categories_id' => 1],
            ['pictures_id' => 8, 'sounds_id' => 8, 'categories_id' => 1],
            ['pictures_id' => 9, 'sounds_id' => 9, 'categories_id' => 1],
            ['pictures_id' => 10, 'sounds_id' => 10, 'categories_id' => 1],
            ['pictures_id' => 11, 'sounds_id' => 11, 'categories_id' => 1],
            ['pictures_id' => 12, 'sounds_id' => 12, 'categories_id' => 1],
            ['pictures_id' => 13, 'sounds_id' => 13, 'categories_id' => 1],
            ['pictures_id' => 14, 'sounds_id' => 14, 'categories_id' => 1],
            ['pictures_id' => 15, 'sounds_id' => 15, 'categories_id' => 1],
            ['pictures_id' => 16, 'sounds_id' => 16, 'categories_id' => 1],
            ['pictures_id' => 17, 'sounds_id' => 17, 'categories_id' => 1],
            ['pictures_id' => 18, 'sounds_id' => 18, 'categories_id' => 1],
            ['pictures_id' => 19, 'sounds_id' => 19, 'categories_id' => 1],
            ['pictures_id' => 20, 'sounds_id' => 20, 'categories_id' => 1],
            ['pictures_id' => 21, 'sounds_id' => 21, 'categories_id' => 1],
            ['pictures_id' => 22, 'sounds_id' => 22, 'categories_id' => 1],
            ['pictures_id' => 23, 'sounds_id' => 23, 'categories_id' => 1],
            ['pictures_id' => 24, 'sounds_id' => 24, 'categories_id' => 1],
            ['pictures_id' => 25, 'sounds_id' => 25, 'categories_id' => 1],
            ['pictures_id' => 26, 'sounds_id' => 26, 'categories_id' => 1],
        ])->each(function ($item, $key) {
            Psjuncts::forceCreate($item);
        });
    }
}
