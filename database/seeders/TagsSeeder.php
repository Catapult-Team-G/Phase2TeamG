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

        DB::table('sweet_tag')->insert([
            ['id' => 1, 'sweet_id' => 1, 'tag_id' => 1],
            ['id' => 2, 'sweet_id' => 1, 'tag_id' => 8],
            ['id' => 3, 'sweet_id' => 1, 'tag_id' => 9],
            ['id' => 4, 'sweet_id' => 2, 'tag_id' => 1],
            ['id' => 5, 'sweet_id' => 2, 'tag_id' => 7],
            ['id' => 6, 'sweet_id' => 2, 'tag_id' => 10],
            ['id' => 7, 'sweet_id' => 3, 'tag_id' => 1],
            ['id' => 8, 'sweet_id' => 3, 'tag_id' => 8],
            ['id' => 9, 'sweet_id' => 3, 'tag_id' => 11],
            ['id' => 10, 'sweet_id' => 4, 'tag_id' => 1],
            ['id' => 11, 'sweet_id' => 4, 'tag_id' => 7],
            ['id' => 12, 'sweet_id' => 5, 'tag_id' => 1],
            ['id' => 13, 'sweet_id' => 5, 'tag_id' => 7],
            ['id' => 14, 'sweet_id' => 5, 'tag_id' => 8],
            ['id' => 15, 'sweet_id' => 6, 'tag_id' => 2],
            ['id' => 16, 'sweet_id' => 6, 'tag_id' => 12],
            ['id' => 17, 'sweet_id' => 6, 'tag_id' => 14],
            ['id' => 18, 'sweet_id' => 6, 'tag_id' => 5],
            ['id' => 19, 'sweet_id' => 7, 'tag_id' => 2],
            ['id' => 20, 'sweet_id' => 7, 'tag_id' => 13],
            ['id' => 21, 'sweet_id' => 7, 'tag_id' => 14],
            ['id' => 22, 'sweet_id' => 7, 'tag_id' => 5],
        ]);
    }
}
