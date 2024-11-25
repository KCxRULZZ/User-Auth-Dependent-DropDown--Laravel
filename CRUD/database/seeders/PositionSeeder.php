<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        Position::create(['name' => 'Manager']);
        Position::create(['name' => 'Team Lead']);
        Position::create(['name' => 'Developer']);
    }
}
