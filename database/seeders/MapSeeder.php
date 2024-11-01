<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maps')->insert([
            'name' => 'アセント'
        ]);

        DB::table('maps')->insert([
            'name' => 'ヘイブン'
        ]);

        DB::table('maps')->insert([
            'name' => 'スプリット'
        ]);

        DB::table('maps')->insert([
            'name' => 'バインド'
        ]);

        DB::table('maps')->insert([
            'name' => 'フラクチャー'
        ]);

        DB::table('maps')->insert([
            'name' => 'アイスボックス'
        ]);

        DB::table('maps')->insert([
            'name' => 'ブリーズ'
        ]);

        DB::table('maps')->insert([
            'name' => 'パール'
        ]);

        DB::table('maps')->insert([
            'name' => 'ロータス'
        ]);

        DB::table('maps')->insert([
            'name' => 'サンセット'
        ]);

        DB::table('maps')->insert([
            'name' => 'アビス'
        ]);
    }
}
