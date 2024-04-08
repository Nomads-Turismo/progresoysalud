<?php

namespace PackTable\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pack;

class PacksTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pack::create([
            'name' => 'Pack Ski',
            'price_1_day' => 25.00,
            'price_2_days' => 42.00,
            'price_3_days' => 58.00,
            'price_4_days' => 68.00,
            'price_5_days' => 78.00,
            'price_6_days' => 88.00,
            'price_7_days' => 98.00,
        ]);
        Pack::create([
            'name' => 'Pack Ski Premium',
            'price_1_day' => 25.00,
            'price_2_days' => 42.00,
            'price_3_days' => 58.00,
            'price_4_days' => 68.00,
            'price_5_days' => 78.00,
            'price_6_days' => 88.00,
            'price_7_days' => 98.00,
        ]);
        Pack::create([
            'name' => 'Pack Ski Vip',
            'price_1_day' => 25.00,
            'price_2_days' => 42.00,
            'price_3_days' => 58.00,
            'price_4_days' => 68.00,
            'price_5_days' => 78.00,
            'price_6_days' => 88.00,
            'price_7_days' => 98.00,
        ]);
        Pack::create([
            'name' => 'Pack Ski Junior',
            'price_1_day' => 25.00,
            'price_2_days' => 42.00,
            'price_3_days' => 58.00,
            'price_4_days' => 68.00,
            'price_5_days' => 78.00,
            'price_6_days' => 88.00,
            'price_7_days' => 98.00,
        ]);
        Pack::create([
            'name' => 'Pack SnowBoard',
            'price_1_day' => 25.00,
            'price_2_days' => 42.00,
            'price_3_days' => 58.00,
            'price_4_days' => 68.00,
            'price_5_days' => 78.00,
            'price_6_days' => 88.00,
            'price_7_days' => 98.00,
        ]);
    }
}
