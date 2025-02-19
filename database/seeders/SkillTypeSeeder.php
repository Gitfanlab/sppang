<?php

namespace Database\Seeders;

use App\Models\SkillType;
use Illuminate\Database\Seeder;

class SkillTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillType::create([
            'LB_SKILL_TYPE' => 'Compétence',
        ]);

        SkillType::create([
            'LB_SKILL_TYPE' => 'Savoir-faire',
        ]);

        SkillType::create([
            'LB_SKILL_TYPE' => 'Savoir-être',
        ]);
    }
}
