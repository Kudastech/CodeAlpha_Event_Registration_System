<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Venue;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Kudastech',
            'email' => 'kudastech@gmail.com',
            'password' => Hash::make('password'),
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'User Kudastech',
            'email' => 'user@gmail.com',
            'password' => Hash::make('password'),
            // 'is_admin' => true
        ]);



        $venues = Venue::factory(10)->create();

        Event::factory(20)->create([
            'venue_id' => $venues->random()->id,
        ]);
    }
}
