<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "admin",
            'email' => "ameen@humblar.in",
            'type' => "admin",
            'password' => Hash::make('Password'),
        ]);

        DB::table('users')->insert([
            'name' => "user",
            'email' => "ameen@test.in",
            'type' => "user",
            'password' => Hash::make('Password'),
        ]);
    }
}
