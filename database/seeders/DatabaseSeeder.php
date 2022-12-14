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
        \App\Models\User::factory(10)->create();
        $this->call(PrefecturesSeeder::class);
        $this->call(SweetsSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(ReviewsSeeder::class);
        // \App\Models\User::factory(10)->create();

        // $this->call(PrefecturesSeeder::class);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
