<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Results;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['score' => 10, 'players_id' => 1, 'categories_id' => 3],
            ['score' => 7, 'players_id' => 2, 'categories_id' => 4],
        ])->each(function ($item, $key) {
            Results::forceCreate($item);
        });
    }
}
