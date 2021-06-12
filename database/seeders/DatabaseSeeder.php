<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(11)->create();
        \App\Models\Transaction::factory(1)->create();
        \App\Models\Merchandise::factory(1)->create();
    }
}
