<?php

use Illuminate\Database\Seeder;

class CarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cartes')->insert([
            ['nom_carte' => 'SW256B', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'GSW2KB-A-0', 'module_id' => 1],
            ['nom_carte' => 'ETP', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-0', 'module_id' => 2],
            ['nom_carte' => 'ETP', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'module_id' => 3],
            ['nom_carte' => 'ETP-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-1', 'module_id' => 3],
            ['nom_carte' => 'SW256B', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'GSW2KB-A-1', 'module_id' => 4],
            ['nom_carte' => 'ETP', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-2', 'module_id' => 5],
            ['nom_carte' => 'ETP', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'module_id' => 6],
            ['nom_carte' => 'ETP-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'ETC-3', 'module_id' => 6],
            ['nom_carte' => 'PCU2-E', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'module_id' => 7],
            ['nom_carte' => 'AS7-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'module_id' => 7],
            ['nom_carte' => 'FTRB-0', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'module_id' => 7],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'module_id' => 7],
            ['nom_carte' => 'PSC6-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-0', 'module_id' => 7],
            ['nom_carte' => 'PCU2-E', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-1', 'module_id' => 8],
            ['nom_carte' => 'AS7-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-1', 'module_id' => 8],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-1', 'module_id' => 8],
            ['nom_carte' => 'PSC6-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-1', 'module_id' => 8],
            ['nom_carte' => 'PCU2-E', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'AS7-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'PSC6-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'FTRB-2', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'FTRB-3', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-2', 'module_id' => 9],
            ['nom_carte' => 'PCU2-E', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-3', 'module_id' => 10],
            ['nom_carte' => 'AS7-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-3', 'module_id' => 10],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-3', 'module_id' => 10],
            ['nom_carte' => 'PSC6-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'BCSU-3', 'module_id' => 10],
            ['nom_carte' => 'CL3TG-UA', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'CLS-0', 'module_id' => 11],
            ['nom_carte' => 'CL3TG-UA', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'CLS-1', 'module_id' => 12],
            ['nom_carte' => 'FTRB-1', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'PSC6-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'AS7-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'W-1', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'W-0', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'SERO-B', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'HWAT-B', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'DCAR1-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'OMU', 'module_id' => 13],
            ['nom_carte' => 'PSC6-C', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'LANU-0', 'module_id' => 14],
            ['nom_carte' => 'ESB24-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'LANU-0', 'module_id' => 14],
            ['nom_carte' => 'PSC6-C', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'LANU-1', 'module_id' => 15],
            ['nom_carte' => 'ESB24-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'LANU-1', 'module_id' => 15],
            ['nom_carte' => 'SWPRO-C', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-0', 'module_id' => 16],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-0', 'module_id' => 16],
            ['nom_carte' => 'ESB24-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-0', 'module_id' => 16],
            ['nom_carte' => 'PSC6-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-1', 'module_id' => 17],
            ['nom_carte' => 'SWPRO-C', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-1', 'module_id' => 17],
            ['nom_carte' => 'CP1D-A', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-1', 'module_id' => 17],
            ['nom_carte' => 'ESB24-D', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'MCMU-1', 'module_id' => 17],
            ['nom_carte' => 'PDFU-0', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'PDFU', 'module_id' => 18],
            ['nom_carte' => 'PDFU-1', 'equipement' => 'BSC Nokia', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'module' => 'PDFU', 'module_id' => 18],
            


        ]);

    }
}
