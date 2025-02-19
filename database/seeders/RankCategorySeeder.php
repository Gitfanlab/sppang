<?php

namespace Database\Seeders;

use App\Models\RankCategory;
use Illuminate\Database\Seeder;

class RankCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RankCategory::create([
            'CD_RANK_CAT' => 'OFF_GEN',
            'LB_RANK_CAT' => 'Officiers Généraux',
        ]);

        RankCategory::create([
            'CD_RANK_CAT' => 'OFF_SUP',
            'LB_RANK_CAT' => 'Officiers Supérieurs',
        ]);

        RankCategory::create([
            'CD_RANK_CAT' => 'OFF_SUB',
            'LB_RANK_CAT' => 'Officiers Subalternes',
        ]);

        RankCategory::create([
            'CD_RANK_CAT' => 'OMS',
            'LB_RANK_CAT' => 'Officiers Mariniers Supérieurs',
        ]);

        RankCategory::create([
            'CD_RANK_CAT' => 'OM',
            'LB_RANK_CAT' => 'Officiers Mariniers',
        ]);

        RankCategory::create([
            'CD_RANK_CAT' => 'EQ',
            'LB_RANK_CAT' => 'Equipages',
        ]);
    }
}
