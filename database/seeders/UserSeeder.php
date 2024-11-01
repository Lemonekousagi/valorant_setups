<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Lemoneko',
            'email' => 'lemonsquash55@gmail.com',
            'password' => Hash::make('Motoki358'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
