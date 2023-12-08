<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Advert;
use App\Models\Listing;
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
        // seed the database
        $user = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'digimage@salvtec.co.sz',
            'password' => bcrypt('SuperSecretPassword'),
        ]);


        Listing::factory(10)->create([
            'user_id' => $user->id
        ]);

        Advert::factory(6)->create([
            'user_id' => $user->id
        ]);
    }
}
