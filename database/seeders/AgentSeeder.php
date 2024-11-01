<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            'name' => 'ジェット'
        ]);
        DB::table('agents')->insert([
            'name' => 'レイズ'
        ]);

        DB::table('agents')->insert([
            'name' => 'レイナ'
        ]);

        DB::table('agents')->insert([
            'name' => 'フェニックス'
        ]);

        DB::table('agents')->insert([
            'name' => 'ヨル'
        ]);

        DB::table('agents')->insert([
            'name' => 'ネオン'
        ]);

        DB::table('agents')->insert([
            'name' => 'アイソ'
        ]);

        DB::table('agents')->insert([
            'name' => 'オーメン'
        ]);

        DB::table('agents')->insert([
            'name' => 'ヴァイパー'
        ]);

        DB::table('agents')->insert([
            'name' => 'ブリムストーン'
        ]);

        DB::table('agents')->insert([
            'name' => 'アストラ'
        ]);

        DB::table('agents')->insert([
            'name' => 'ハーバー'
        ]);

        DB::table('agents')->insert([
            'name' => 'クローヴ'
        ]);

        DB::table('agents')->insert([
            'name' => 'ブリーチ'
        ]);

        DB::table('agents')->insert([
            'name' => 'ソーヴァ'
        ]);

        DB::table('agents')->insert([
            'name' => 'スカイ'
        ]);

        DB::table('agents')->insert([
            'name' => 'KAY/O'
        ]);

        DB::table('agents')->insert([
            'name' => 'フェイド'
        ]);

        DB::table('agents')->insert([
            'name' => 'ゲッコー'
        ]);

        DB::table('agents')->insert([
            'name' => 'セージ'
        ]);

        DB::table('agents')->insert([
            'name' => 'キルジョイ'
        ]);

        DB::table('agents')->insert([
            'name' => 'サイファー'
        ]);

        DB::table('agents')->insert([
            'name' => 'チェンバー'
        ]);

        DB::table('agents')->insert([
            'name' => 'デッドロック'
        ]);

        DB::table('agents')->insert([
            'name' => 'ヴァイス'
        ]);
    }
    
}
