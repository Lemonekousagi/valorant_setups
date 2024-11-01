<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sides')->insert([
            'name' => '攻め'
        ]);

        DB::table('sides')->insert([
            'name' => '攻め'
        ]);
    }
}
