<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['country_id' => 3, 'city_name' => 'Rome', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 3, 'city_name' => 'Watican', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 5, 'city_name' => 'New-york', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 5, 'city_name' => 'California', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 6, 'city_name' => 'NYC', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 6, 'city_name' => 'CRC', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 2, 'city_name' => 'Colombo', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 2, 'city_name' => 'Chilaw', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 1, 'city_name' => 'Delhi', 'created_at' => null, 'updated_at' => null],
            ['country_id' => 1, 'city_name' => 'Calcata', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
