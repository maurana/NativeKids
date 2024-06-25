<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Players;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Engineer'],
            ['name' => 'Developer'],
        ])->each(function ($item, $key) {
            Players::forceCreate($item);
        });
    }
}
