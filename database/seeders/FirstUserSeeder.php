<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FirstUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Joe Lohr',
            'slug' => 'lohr',
            'email' => 'emailme@joelohr.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        User::create([
            'name' => 'Eric Baillargeon',
            'slug' => 'baillargeon',
            'division' => '10U',
            'team_name' => 'baillargeon',
            'email' => 'joe.lohr@outlook.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);
    }
}
