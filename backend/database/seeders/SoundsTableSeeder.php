<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sounds;

class SoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            ['name' => 'A', 'file' => 'A.wav', 'categories_id' => 1],
            ['name' => 'B', 'file' => 'B.wav', 'categories_id' => 1],
            ['name' => 'C', 'file' => 'C.wav', 'categories_id' => 1],
            ['name' => 'D', 'file' => 'D.wav', 'categories_id' => 1],
            ['name' => 'E', 'file' => 'E.wav', 'categories_id' => 1],
            ['name' => 'F', 'file' => 'F.wav', 'categories_id' => 1],
            ['name' => 'G', 'file' => 'G.wav', 'categories_id' => 1],
            ['name' => 'H', 'file' => 'H.wav', 'categories_id' => 1],
            ['name' => 'I', 'file' => 'I.wav', 'categories_id' => 1],
            ['name' => 'J', 'file' => 'J.wav', 'categories_id' => 1],
            ['name' => 'K', 'file' => 'K.wav', 'categories_id' => 1],
            ['name' => 'L', 'file' => 'L.wav', 'categories_id' => 1],
            ['name' => 'M', 'file' => 'M.wav', 'categories_id' => 1],
            ['name' => 'N', 'file' => 'N.wav', 'categories_id' => 1],
            ['name' => 'O', 'file' => 'O.wav', 'categories_id' => 1],
            ['name' => 'P', 'file' => 'P.wav', 'categories_id' => 1],
            ['name' => 'Q', 'file' => 'Q.wav', 'categories_id' => 1],
            ['name' => 'R', 'file' => 'R.wav', 'categories_id' => 1],
            ['name' => 'S', 'file' => 'S.wav', 'categories_id' => 1],
            ['name' => 'T', 'file' => 'T.wav', 'categories_id' => 1],
            ['name' => 'U', 'file' => 'U.wav', 'categories_id' => 1],
            ['name' => 'V', 'file' => 'V.wav', 'categories_id' => 1],
            ['name' => 'W', 'file' => 'W.wav', 'categories_id' => 1],
            ['name' => 'X', 'file' => 'X.wav', 'categories_id' => 1],
            ['name' => 'Y', 'file' => 'Y.wav', 'categories_id' => 1],
            ['name' => 'Z', 'file' => 'Z.wav', 'categories_id' => 1],
        ])->each(function ($item, $key) {
            Sounds::forceCreate($item);
        });
    }
}
