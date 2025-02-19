<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            StageTypeSeeder::class,
            GenderSeeder::class,
            OUEnvironmentSeeder::class,
            ProgressStatusSeeder::class,
            QualificationTypeSeeder::class,
            RankCategorySeeder::class,
            RankSeeder::class,
            SkillTypeSeeder::class,
        ]);
    }
}
