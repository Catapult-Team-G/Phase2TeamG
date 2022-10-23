<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            ['id' => 1,
            'user_id' => 1,
            'sweet_id' => 1,
            'rate' => 4,
            'review' => 'すごくおいしい！'
            ],
            [
            'id' => 2,
            'user_id' => 2,
            'sweet_id' => 1,
            'rate' => 2,
            'review' => 'ちょっと甘すぎた'
            ],
            [
            'id' => 3,
            'user_id' => 3,
            'sweet_id' => 1,
            'rate' => 5,
            'review' => '最高のみたらし'
            ],
            [
            'id' => 4,
            'user_id' => 4,
            'sweet_id' => 1,
            'rate' => 3,
            'review' => 'たれがいい'
            ],
            [
            'id' => 5,
            'user_id' => 5,
            'sweet_id' => 1,
            'rate' => 5,
            'review' => 'お気に入り'
            ],

        ]);
    }
}
