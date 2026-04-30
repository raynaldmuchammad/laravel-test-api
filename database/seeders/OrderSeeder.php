<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 1, 'created_at' => now()],
            ['user_id' => 2, 'created_at' => now()],
            ['user_id' => 2, 'created_at' => now()],
            ['user_id' => 2, 'created_at' => now()],
            ['user_id' => 2, 'created_at' => now()],
            ['user_id' => 2, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
            ['user_id' => 3, 'created_at' => now()],
        ];

        Order::insert($data);
    }
}
