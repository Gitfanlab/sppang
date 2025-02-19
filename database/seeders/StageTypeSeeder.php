<?php

namespace Database\Seeders;

use App\Models\StageType;
use Illuminate\Database\Seeder;

class StageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StageType::create([
            'LB_STAGE_TYPE' => 'AFFECTATION',
        ]);

        StageType::create([
            'LB_STAGE_TYPE' => 'FORMATION',
        ]);

        StageType::create([
            'LB_STAGE_TYPE' => 'QUALIFICATION',
        ]);
    }
}
