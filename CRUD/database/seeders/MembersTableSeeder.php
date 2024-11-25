<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            ['city_id' => 1, 'name' => 'John Doe', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 2, 'name' => 'Jane Smith', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 3, 'name' => 'Michael Brown', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 7, 'name' => 'Alice Johnson', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 8, 'name' => 'Bob Davis', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 1, 'name' => 'Eve White', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 4, 'name' => 'David Wilson', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 5, 'name' => 'Olivia Martin', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 6, 'name' => 'Liam Clark', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 9, 'name' => 'Sophia Adams', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 10, 'name' => 'James Moore', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 3, 'name' => 'Charlotte Taylor', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 7, 'name' => 'Daniel Jackson', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 8, 'name' => 'Mia Harris', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 1, 'name' => 'Noah Martinez', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 4, 'name' => 'Lucas Thompson', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 6, 'name' => 'Amelia Garcia', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 5, 'name' => 'Benjamin Wilson', 'position_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 9, 'name' => 'Ella Rodriguez', 'position_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['city_id' => 10, 'name' => 'Alexander Lee', 'position_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
