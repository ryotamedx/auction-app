<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'name' => 'エアマックス 95',
            'description' => '1995年のランニングマックスモデルの最新版。〜',
            'price' => 25000,
            'seller' => 'Taro',
            'email' => 'taro@example.com',
            'image_url' => 'https://〜',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $param = [
            [
                'name' => 'フットスケープ',
                'description' => '横にシューレースがある斬新な〜。',
                'price' => 18000,
                'seller' => 'Jin',
                'email' => 'jin@example.com',
                'image_url' => 'https://〜',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ポンプヒューリー',
                'description' => 'ポンプを押すと、空気によって〜。',
                'price' => 18000,
                'seller' => 'Dan',
                'email' => 'dan@example.com',
                'image_url' => 'https://〜',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        DB::table('items')->insert($param);
    }
}
