<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $user1 = \App\Models\User::create([
            'username' => 'Drill_Raffie25',
            'password' => Hash::make('admin'),
            'first_name' => 'Raphaelle Jazmine',
            'last_name' => 'Rodriguez',
        ]);

        $user2 = \App\Models\User::create([
            'username' => 'Alexander',
            'password' => Hash::make('admin'),
            'first_name' => 'Lanz Alexander',
            'last_name' => 'Malto',
        ]);

        Post::create([
            'user_id' => $user1->id,
            'title' => 'my post 1',
            'content' => 'dummy post 1',
        ]);

        Post::create([
            'user_id' => $user2->id,
            'title' => 'my post 2',
            'content' => 'dummy post 2',
        ]);
    }
}
