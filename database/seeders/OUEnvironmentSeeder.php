<?php

namespace Database\Seeders;

use App\Models\OUEnvironment;
use Illuminate\Database\Seeder;

class OUEnvironmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OUEnvironment::create([
            'CD_OU_ENV' => 'EMB',
            'LB_OU_ENV' => 'Embarqué',
            'LB_COLOR' => 'info',
        ]);

        OUEnvironment::create([
            'CD_OU_ENV' => 'TERRE',
            'LB_OU_ENV' => 'A terre',
            'LB_COLOR' => 'success',
        ]);

        OUEnvironment::create([
            'CD_OU_ENV' => 'FORMA',
            'LB_OU_ENV' => 'Formation',
            'LB_COLOR' => 'danger',
        ]);

        OUEnvironment::create([
            'CD_OU_ENV' => 'PA',
            'LB_OU_ENV' => 'Porte Avion',
            'LB_COLOR' => 'gray',
        ]);
    }
}
