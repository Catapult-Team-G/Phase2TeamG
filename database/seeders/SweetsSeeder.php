<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SweetsSeeder extends Seeder
{
    public function run()
    {
        DB::table('sweets')->insert([
            ['id' => 1, 'sweet_name' => 'みたらし団子', 'store' => '京都府京都市左京区下鴨松ノ木町53', 'price' => 450, 'image_path' => 'images/1.jpg'],
            ['id' => 2, 'sweet_name' => 'もみじ饅頭', 'store' => '広島県広島市東区光町1丁目13-23', 'price' => 250, 'image_path' => 'images/2.jpg'],
            ['id' => 3, 'sweet_name' => 'フルーツ大福', 'store' => '愛知県名古屋市千種区日進通5-2-4', 'price' => 520, 'image_path' => 'images/3.webp'],
            ['id' => 4, 'sweet_name' => '練り切り', 'store' => '山形県山形市十日町3-10-36', 'price' => 345, 'image_path' => 'images/4.jpg'],
            ['id' => 5, 'sweet_name' => 'さくら餅', 'store' => '福岡県 福岡市博多区 上川端町 12-20', 'price' => 650, 'image_path' => 'images/1.jpg'],
            ['id' => 6, 'sweet_name' => 'クッキー', 'store' => '東京都中央区銀座７丁目８−７', 'price' => 950, 'image_path' => 'images/6.png'],
            ['id' => 7, 'sweet_name' => 'ドーナッツ', 'store' => '東京都調布市仙川町１丁目１２−２', 'price' => 870, 'image_path' => 'images/7.jpg'],
        ]);
    }
}
