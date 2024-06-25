<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pictures;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            // huruf with categories id = 1
            ['name' => 'A', 'file' => 'A.png', 'categories_id' => 1],
            ['name' => 'B', 'file' => 'B.png', 'categories_id' => 1],
            ['name' => 'C', 'file' => 'C.png', 'categories_id' => 1],
            ['name' => 'D', 'file' => 'D.png', 'categories_id' => 1],
            ['name' => 'E', 'file' => 'E.png', 'categories_id' => 1],
            ['name' => 'F', 'file' => 'F.png', 'categories_id' => 1],
            ['name' => 'G', 'file' => 'G.png', 'categories_id' => 1],
            ['name' => 'H', 'file' => 'H.png', 'categories_id' => 1],
            ['name' => 'I', 'file' => 'I.png', 'categories_id' => 1],
            ['name' => 'J', 'file' => 'J.png', 'categories_id' => 1],
            ['name' => 'K', 'file' => 'K.png', 'categories_id' => 1],
            ['name' => 'L', 'file' => 'L.png', 'categories_id' => 1],
            ['name' => 'M', 'file' => 'M.png', 'categories_id' => 1],
            ['name' => 'N', 'file' => 'N.png', 'categories_id' => 1],
            ['name' => 'O', 'file' => 'O.png', 'categories_id' => 1],
            ['name' => 'P', 'file' => 'P.png', 'categories_id' => 1],
            ['name' => 'Q', 'file' => 'Q.png', 'categories_id' => 1],
            ['name' => 'R', 'file' => 'R.png', 'categories_id' => 1],
            ['name' => 'S', 'file' => 'S.png', 'categories_id' => 1],
            ['name' => 'T', 'file' => 'T.png', 'categories_id' => 1],
            ['name' => 'U', 'file' => 'U.png', 'categories_id' => 1],
            ['name' => 'V', 'file' => 'V.png', 'categories_id' => 1],
            ['name' => 'W', 'file' => 'W.png', 'categories_id' => 1],
            ['name' => 'X', 'file' => 'X.png', 'categories_id' => 1],
            ['name' => 'Y', 'file' => 'Y.png', 'categories_id' => 1],
            ['name' => 'Z', 'file' => 'Z.png', 'categories_id' => 1],
            // Angka with categories id = 2
            ['name' => '0', 'file' => '0.png', 'categories_id' => 2],
            ['name' => '1', 'file' => '1.png', 'categories_id' => 2],
            ['name' => '2', 'file' => '2.png', 'categories_id' => 2],
            ['name' => '3', 'file' => '3.png', 'categories_id' => 2],
            ['name' => '4', 'file' => '4.png', 'categories_id' => 2],
            ['name' => '5', 'file' => '5.png', 'categories_id' => 2],
            ['name' => '6', 'file' => '6.png', 'categories_id' => 2],
            ['name' => '7', 'file' => '7.png', 'categories_id' => 2],
            ['name' => '8', 'file' => '8.png', 'categories_id' => 2],
            ['name' => '9', 'file' => '9.png', 'categories_id' => 2],
            // hewan with categories id = 3
            ['name' => 'Kucing', 'file' => 'Kucing.png', 'categories_id' => 3],
            ['name' => 'Anjing', 'file' => 'Anjing.png', 'categories_id' => 3],
            ['name' => 'Babi', 'file' => 'Babi.png', 'categories_id' => 3],
            ['name' => 'Singa', 'file' => 'Singa.png', 'categories_id' => 3],
            ['name' => 'Harimau', 'file' => 'Harimau.png', 'categories_id' => 3],
            ['name' => 'Panda', 'file' => 'Panda.png', 'categories_id' => 3],
            ['name' => 'Gajah', 'file' => 'Gajah.png', 'categories_id' => 3],
            ['name' => 'Jerapah', 'file' => 'Jerapah.png', 'categories_id' => 3],
            ['name' => 'Ular', 'file' => 'Ular.png', 'categories_id' => 3],
            ['name' => 'Ikan', 'file' => 'Ikan.png', 'categories_id' => 3],
            ['name' => 'Burung', 'file' => 'Burung.png', 'categories_id' => 3],
            ['name' => 'Semut', 'file' => 'Semut.png', 'categories_id' => 3],
            ['name' => 'Monyet', 'file' => 'Monyet.png', 'categories_id' => 3],
            ['name' => 'Sapi', 'file' => 'Sapi.png', 'categories_id' => 3],
            ['name' => 'Kambing', 'file' => 'Kambing.png', 'categories_id' => 3],
            ['name' => 'Unta', 'file' => 'Unta.png', 'categories_id' => 3],
            ['name' => 'Penguin', 'file' => 'Penguin.png', 'categories_id' => 3],
            ['name' => 'Zebra', 'file' => 'Zebra.png', 'categories_id' => 3],
            ['name' => 'Serigala', 'file' => 'Serigala.png', 'categories_id' => 3],
            ['name' => 'Buaya', 'file' => 'Buaya.png', 'categories_id' => 3],
            ['name' => 'Tikus', 'file' => 'Tikus.png', 'categories_id' => 3],
            ['name' => 'Kupu-kupu', 'file' => 'Kupu-kupu.png', 'categories_id' => 3],
            ['name' => 'Capung', 'file' => 'Capung.png', 'categories_id' => 3],
            ['name' => 'Lebah', 'file' => 'Lebah.png', 'categories_id' => 3],
            // buah with categories id = 4
            ['name' => 'Jeruk', 'file' => 'Jeruk.png', 'categories_id' => 4],
            ['name' => 'Apel', 'file' => 'Apel.png', 'categories_id' => 4],
            ['name' => 'Anggur', 'file' => 'Anggur.png', 'categories_id' => 4],
            ['name' => 'Pisang', 'file' => 'Pisang.png', 'categories_id' => 4],
            ['name' => 'Pepaya', 'file' => 'Pepaya.png', 'categories_id' => 4],
            ['name' => 'Pir', 'file' => 'Pir.png', 'categories_id' => 4],
            ['name' => 'Alpukat', 'file' => 'Alpukat.png', 'categories_id' => 4],
            ['name' => 'Rambutan', 'file' => 'Rambutan.png', 'categories_id' => 4],
            ['name' => 'Durian', 'file' => 'Durian.png', 'categories_id' => 4],
            ['name' => 'Kelapa', 'file' => 'Kelapa.png', 'categories_id' => 4],
            ['name' => 'Markisa', 'file' => 'Markisa.png', 'categories_id' => 4],
            ['name' => 'Manggis', 'file' => 'Manggis.png', 'categories_id' => 4],
            ['name' => 'Naga', 'file' => 'Naga.png', 'categories_id' => 4],
            ['name' => 'Leci', 'file' => 'Leci.png', 'categories_id' => 4],
            ['name' => 'Mangga', 'file' => 'Mangga.png', 'categories_id' => 4],
            ['name' => 'Jambu', 'file' => 'Jambu.png', 'categories_id' => 4],
            ['name' => 'Salak', 'file' => 'Salak.png', 'categories_id' => 4],
            ['name' => 'Melon', 'file' => 'Melon.png', 'categories_id' => 4],
            ['name' => 'Semangka', 'file' => 'Semangka.png', 'categories_id' => 4],
            ['name' => 'Kurma', 'file' => 'Kurma.png', 'categories_id' => 4],
            ['name' => 'Nanas', 'file' => 'Nanas.png', 'categories_id' => 4],
            ['name' => 'Strawberry', 'file' => 'Strawberry.png', 'categories_id' => 4],
            ['name' => 'Belimbing', 'file' => 'Belimbing.png', 'categories_id' => 4],
            ['name' => 'Delima', 'file' => 'Delima.png', 'categories_id' => 4],
        ])->each(function ($item, $key) {
            Pictures::forceCreate($item);
        });
    }
}
