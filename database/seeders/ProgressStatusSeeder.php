<?php

namespace Database\Seeders;

use App\Models\ProgressStatus;
use Illuminate\Database\Seeder;

class ProgressStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgressStatus::create([
            'LB_PROGRESS_STATUS' => 'Non commencé',
        ]);

        ProgressStatus::create([
            'LB_PROGRESS_STATUS' => 'En cours',
        ]);

        ProgressStatus::create([
            'LB_PROGRESS_STATUS' => 'Terminé',
        ]);
    }
}
