<?php

use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->insert([
            ['nom_division' => 'NSS', 'direction' => 'Network', 'departement' => 'Core', 'departement_id' => 1, ],
            ['nom_division' => 'BSS', 'direction' => 'Network', 'departement' => 'Core', 'departement_id' => 1,],
            ['nom_division' => 'PS VAS', 'direction' => 'Network', 'departement' => 'Core', 'departement_id' => 1,],
            ['nom_division' => 'Power', 'direction' => 'Network', 'departement' => 'DATA Center', 'departement_id' => 2,],
            ['nom_division' => 'Telecom', 'direction' => 'Network', 'departement' => 'DATA Center', 'departement_id' => 2,],
            ['nom_division' => 'IP Transmission', 'direction' => 'Network', 'departement' => 'Transmission', 'departement_id' => 3,],
            ['nom_division' => 'Optical Transmission', 'direction' => 'Network', 'departement' => 'Transmission', 'departement_id' => 3,],
            ['nom_division' => 'MicroWave Transmission', 'direction' => 'Network', 'departement' => 'Transmission', 'departement_id' => 3,],
            ['nom_division' => 'Tools and process', 'direction' => 'Network', 'departement' => 'Technical', 'departement_id' => 4,],
            ['nom_division' => 'General Planning', 'direction' => 'Network', 'departement' => 'Technical', 'departement_id' => 4,],
            ['nom_division' => 'Construction and Design', 'direction' => 'Network', 'departement' => 'Technical', 'departement_id' => 4,],
            ['nom_division' => 'Transmission', 'direction' => 'Network', 'departement' => 'Infrastructure', 'departement_id' => 5,],
            ['nom_division' => 'Achèvement et Factures', 'direction' => 'Network', 'departement' => 'Infrastructure', 'departement_id' => 5,],
            ['nom_division' => 'Génie Civil', 'direction' => 'Network', 'departement' => 'Infrastructure', 'departement_id' => 5,],
            ['nom_division' => 'Access', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'departement_id' => 6,],
            ['nom_division' => 'Communication ', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'departement_id' => 6,],
            ['nom_division' => 'Solution', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'departement_id' => 6,],
            ['nom_division' => 'TSS', 'direction' => 'Network', 'departement' => 'NOC', 'departement_id' => 7,],
            ['nom_division' => 'NSS', 'direction' => 'Network', 'departement' => 'NOC', 'departement_id' => 7,],
            ['nom_division' => 'BSS', 'direction' => 'Network', 'departement' => 'NOC', 'departement_id' => 7,],
            ['nom_division' => 'IT', 'direction' => 'Network', 'departement' => 'NOC', 'departement_id' => 7,],
            ['nom_division' => 'SUPPORT', 'direction' => 'Network', 'departement' => 'NOC', 'departement_id' => 7,],
            ['nom_division' => 'Optimisation', 'direction' => 'Network', 'departement' => 'Radio', 'departement_id' => 8,],
            ['nom_division' => 'Planification', 'direction' => 'Network', 'departement' => 'Radio', 'departement_id' => 8,],
            ['nom_division' => 'QoS', 'direction' => 'Network', 'departement' => 'Radio', 'departement_id' => 8,],
            ['nom_division' => 'Power', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'departement_id' => 9,],
            ['nom_division' => 'Telecom', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'departement_id' => 9,],
            ['nom_division' => 'System', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'OCS', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'Data Minning', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'VAS', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'SUPPORT', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'APPLICATION', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'DEVELOPMENT', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => 10,],
            ['nom_division' => 'Information System Security', 'direction' => 'Information-System', 'departement' => 'IS', 'departement_id' => '10',],
            
        ]);
    }
}