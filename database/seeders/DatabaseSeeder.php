<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Models\User::factory(10)->create();
=======
>>>>>>> レビュー投稿機能を仮実装
        $this->call(PrefecturesSeeder::class);
        // \App\Models\User::factory(10)->create();

        // $this->call(PrefecturesSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
