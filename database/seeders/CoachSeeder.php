<?php

namespace Database\Seeders;

use App\Models\Coach;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    public function run(): void
    {
        Coach::create([
            'user_id' => 2,
            'name' => 'Eric Baillargeon',
            'email' => 'email@email.com',
            'phone' => '1231231233',
            'position' => 'Head Coach',
        ]);

        Coach::create([
            'user_id' => 2,
            'name' => 'Travis Lennon',
            'email' => 'email@email.com',
            'phone' => '1231231233',
            'position' => 'Assistant Coach',
        ]);

        Coach::create([
            'user_id' => 2,
            'name' => 'Zac Hansen',
            'email' => 'email@email.com',
            'phone' => '1231231233',
            'position' => 'Assistant Coach',
        ]);

        Coach::create([
            'user_id' => 2,
            'name' => 'Jay Weston',
            'email' => 'email@email.com',
            'phone' => '1231231233',
            'position' => 'Assistant Coach',
        ]);

        Coach::create([
            'user_id' => 2,
            'name' => 'Jim Abbate',
            'email' => 'email@email.com',
            'phone' => '1231231233',
            'position' => 'Assistant Coach',
        ]);
    }
}
