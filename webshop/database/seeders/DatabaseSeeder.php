<?php

namespace Database\Seeders;

use App\Models\Prices;
use App\Models\Review;
use App\Models\Reviews;
use App\Models\User;
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
        Reviews::factory(30)->create();
        
        // \App\Models\User::factory(10)->create();
    }
}
