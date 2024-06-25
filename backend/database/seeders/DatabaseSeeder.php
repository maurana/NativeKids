<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            PlayersTableSeeder::class,
            ResultsTableSeeder::class,
            PicturesTableSeeder::class,
            SoundsTableSeeder::class,
            PsjunctsTableSeeder::class,
        ]);
    }
}
