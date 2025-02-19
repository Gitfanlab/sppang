<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gender::create([
            'CD_GENDER' => 'M',
            'LB_GENDER' => 'Masculin',
        ]);

        Gender::create([
            'CD_GENDER' => 'F',
            'LB_GENDER' => 'Feminin',
        ]);
    }
}
