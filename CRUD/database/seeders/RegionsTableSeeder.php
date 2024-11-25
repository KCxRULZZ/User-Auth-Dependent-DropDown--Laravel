<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            ['region_name' => 'Asia', 'created_at' => null, 'updated_at' => null],
            ['region_name' => 'Europe', 'created_at' => null, 'updated_at' => null],
            ['region_name' => 'America', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
