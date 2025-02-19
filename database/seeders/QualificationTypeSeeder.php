<?php

namespace Database\Seeders;

use App\Models\QualificationType;
use Illuminate\Database\Seeder;

class QualificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QualificationType::create([
            'CD_QUALIF_TYPE' => 'BE',
            'LB_QUALIF_TYPE' => 'Brevet Elémentaire',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'BAT',
            'LB_QUALIF_TYPE' => "Brevet d'Aptitude Technique",
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'BS',
            'LB_QUALIF_TYPE' => 'Brevet Supérieur',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'BM',
            'LB_QUALIF_TYPE' => 'Brevet de Maitrise',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'BHT',
            'LB_QUALIF_TYPE' => 'Brevet Haute Technicité',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'C',
            'LB_QUALIF_TYPE' => 'Certificat',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'C CDM',
            'LB_QUALIF_TYPE' => 'Certificat Cadre de Maitrise',
        ]);

        QualificationType::create([
            'CD_QUALIF_TYPE' => 'M',
            'LB_QUALIF_TYPE' => 'Mention',
        ]);
    }
}
