<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        Player::create([
            'user_id' => 2,
            'name' => 'Brysen Ray',
            'number' => 3,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Wyatt Thennes',
            'number' => 5,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Nolan Hansen',
            'number' => 8,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Henry Lusk',
            'number' => 10,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Cooper Lennon',
            'number' => 11,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Ryan Mackay',
            'number' => 12,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Jax Weston',
            'number' => 17,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Vincent Abbate',
            'number' => 23,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Jacob Lohr',
            'number' => 26,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Anthony Vlahos',
            'number' => 44,
        ]);

        Player::create([
            'user_id' => 2,
            'name' => 'Liam Baillargeon',
            'number' => 50,
        ]);
    }
}
