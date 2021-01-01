<?php

use Illuminate\Database\Seeder;

class PortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ports')->insert([
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'GSW2KB-A-0', 'carte' => 'SW256B', 'carte_id' => 1],
            ['type_port' => 'Optical', 'nom_port' => 'ETH', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-0', 'carte' => 'ETP', 'carte_id' => 2],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-0', 'carte' => 'ETP', 'carte_id' => 2],
            ['type_port' => 'Optical', 'nom_port' => 'ETH', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'carte' => 'ETP', 'carte_id' => 3],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'carte' => 'ETP', 'carte_id' => 3],
            ['type_port' => 'Optical', 'nom_port' => 'ETH', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'carte' => 'ETP-A', 'carte_id' => 4],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'carte' => 'ETP-A', 'carte_id' => 4],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'GSW2KB-A-1', 'carte' => 'SW256B', 'carte_id' => 5],
            ['type_port' => 'Optical', 'nom_port' => 'ETH', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-2', 'carte' => 'ETP', 'carte_id' => 6],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-2', 'carte' => 'ETP', 'carte_id' => 6],
            ['type_port' => 'Optical', 'nom_port' => 'ETH',  'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'carte' => 'ETP', 'carte_id' => 7],
            ['type_port' => 'Electronic', 'nom_port' => 'SB',  'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'carte' => 'ETP', 'carte_id' => 7],
            ['type_port' => 'Optical', 'nom_port' => 'ETH', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'carte' => 'ETP-A', 'carte_id' => 8],
            ['type_port' => 'Electronic', 'nom_port' => 'SB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'carte' => 'ETP-A', 'carte_id' => 8],
            ['type_port' => 'Electronic', 'nom_port' => 'SER', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'carte' => 'PCU2-E', 'carte_id' => 9],
            ['type_port' => 'Electronic', 'nom_port' => 'J8', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'carte' => 'AS7-D', 'carte_id' => 10],
            ['type_port' => 'Electronic', 'nom_port' => 'J7', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'carte' => 'CP1D-A', 'carte_id' => 12],
            ['type_port' => 'Electronic', 'nom_port' => 'J6', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'carte' => 'CP1D-A', 'carte_id' => 12],
            ['type_port' => 'Electronic', 'nom_port' => 'USB', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'carte' => 'CP1D-A', 'carte_id' => 12],

        ]);
    }
}
