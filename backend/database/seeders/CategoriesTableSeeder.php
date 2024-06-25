<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'Huruf'],
            ['name' => 'Angka'],
            ['name' => 'Hewan'],
            ['name' => 'Buah'],
        ])->each(function ($item, $key) {
            Categories::forceCreate($item);
        });
    }
}
