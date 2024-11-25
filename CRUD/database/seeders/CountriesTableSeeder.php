<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            ['region_id' => 1, 'country_name' => 'India', 'created_at' => null, 'updated_at' => null],
            ['region_id' => 1, 'country_name' => 'Srilanka', 'created_at' => null, 'updated_at' => null],
            ['region_id' => 2, 'country_name' => 'Italy', 'created_at' => null, 'updated_at' => null],
            ['region_id' => 2, 'country_name' => 'France', 'created_at' => null, 'updated_at' => null],
            ['region_id' => 3, 'country_name' => 'North America', 'created_at' => null, 'updated_at' => null],
            ['region_id' => 3, 'country_name' => 'South America', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
