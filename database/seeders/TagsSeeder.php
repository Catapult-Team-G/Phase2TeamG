<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    public function run()
    {
        DB::table('tags')->insert([
            ['id' => 1, 'tag' => '和菓子'],
            ['id' => 2, 'tag' => '洋菓子'],
            ['id' => 3, 'tag' => 'スナック'],
            ['id' => 4, 'tag' => 'グミ'],
            ['id' => 5, 'tag' => 'チョコレート'],
            ['id' => 6, 'tag' => '飴'],
            ['id' => 7, 'tag' => '餡子'],
            ['id' => 8, 'tag' => '餅'],
            ['id' => 9, 'tag' => '団子'],
            ['id' => 10, 'tag' => '饅頭'],
            ['id' => 11, 'tag' => 'フルーツ'],
            ['id' => 12, 'tag' => 'クッキー'],
            ['id' => 13, 'tag' => 'ドーナッツ'],
            ['id' => 14, 'tag' => 'プレーン'],
        ]);
    }
}
