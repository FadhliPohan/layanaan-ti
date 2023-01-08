<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aduan;
use App\Models\Inventaris;
use App\Models\Scrup;
use App\Models\Sperpat;
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
        User::factory(10)->create();
        Aduan::factory(20)->create();
        Inventaris::factory(20)->create();
        Sperpat::factory(20)->create();
        Scrup::factory(20)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
