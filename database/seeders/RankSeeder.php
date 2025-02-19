<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Seeder;

class RankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rank::create([
            'CD_RANK' => 'AL',
            'LB_RANK' => 'Amiral',
            'CD_RANK_CAT' => '1',
        ]);

        Rank::create([
            'CD_RANK' => 'VAE',
            'LB_RANK' => "Vice-Amiral d'Escadre",
            'CD_RANK_CAT' => '1',
        ]);

        Rank::create([
            'CD_RANK' => 'VA',
            'LB_RANK' => 'Vice-Amiral',
            'CD_RANK_CAT' => '1',
        ]);

        Rank::create([
            'CD_RANK' => 'CA',
            'LB_RANK' => 'Contre-Amiral',
            'CD_RANK_CAT' => '1',
        ]);

        Rank::create([
            'CD_RANK' => 'CV',
            'LB_RANK' => 'Capitaine de Vaisseau',
            'CD_RANK_CAT' => '2',
        ]);

        Rank::create([
            'CD_RANK' => 'CF',
            'LB_RANK' => 'Capitaine de Frégate',
            'CD_RANK_CAT' => '2',
        ]);

        Rank::create([
            'CD_RANK' => 'CC',
            'LB_RANK' => 'Capitaine de Corvette',
            'CD_RANK_CAT' => '2',
        ]);

        Rank::create([
            'CD_RANK' => 'LV',
            'LB_RANK' => 'Lieutenant de Vaisseau',
            'CD_RANK_CAT' => '2',
        ]);

        Rank::create([
            'CD_RANK' => 'EV1',
            'LB_RANK' => 'Enseigne de Vaisseau de 1ère classe',
            'CD_RANK_CAT' => '3',
        ]);

        Rank::create([
            'CD_RANK' => 'EV2',
            'LB_RANK' => 'Enseigne de Vaisseau de 2e classe',
            'CD_RANK_CAT' => '3',
        ]);

        Rank::create([
            'CD_RANK' => 'ASP',
            'LB_RANK' => 'Aspirant',
            'CD_RANK_CAT' => '3',
        ]);

        Rank::create([
            'CD_RANK' => 'MAJ',
            'LB_RANK' => 'Major',
            'CD_RANK_CAT' => '4',
        ]);

        Rank::create([
            'CD_RANK' => 'MP',
            'LB_RANK' => 'Maître Principal',
            'CD_RANK_CAT' => '4',
        ]);

        Rank::create([
            'CD_RANK' => 'PM',
            'LB_RANK' => 'Premier Maître',
            'CD_RANK_CAT' => '4',
        ]);

        Rank::create([
            'CD_RANK' => 'MT',
            'LB_RANK' => 'Maître',
            'CD_RANK_CAT' => '5',
        ]);

        Rank::create([
            'CD_RANK' => 'SM',
            'LB_RANK' => 'Second Maître',
            'CD_RANK_CAT' => '5',
        ]);

        Rank::create([
            'CD_RANK' => 'QM1',
            'LB_RANK' => 'Quartier-Maître de 1ère classe',
            'CD_RANK_CAT' => '6',
        ]);

        Rank::create([
            'CD_RANK' => 'QM2',
            'LB_RANK' => 'Quartier-Maître de 2e classe',
            'CD_RANK_CAT' => '6',
        ]);

        Rank::create([
            'CD_RANK' => 'MO',
            'LB_RANK' => 'Matelot',
            'CD_RANK_CAT' => '6',
        ]);
    }
}
