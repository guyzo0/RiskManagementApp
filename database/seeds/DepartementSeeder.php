<?php

use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departements')->insert([
            [   
                'nom_departement' => 'Core',
                'direction' => 'Network',
                'direction_id' => 1,

            ],
            [
                'nom_departement' => 'DATA Center',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'Transmission',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'Technical',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'Infrastructure',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'Mechanical-Electrical',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'NOC',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'Radio',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'TECH-REGION',
                'direction' => 'Network',
                'direction_id' => 1,
            ],
            [
                'nom_departement' => 'IS',
                'direction' => 'Information-System',
                'direction_id' => 1,
            ],
            ]);
    }
}
