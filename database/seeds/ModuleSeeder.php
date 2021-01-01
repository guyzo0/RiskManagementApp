<?php

use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->insert([
            ['nom_module' => 'GSW2KB-A-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'ETC-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'ETC-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'GSW2KB-A-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'ETC-2', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'ETC-3', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'BCSU-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'BCSU-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'BCSU-2', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'BCSU-3', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'CLS-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'CLS-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'OMU', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'LANU-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'LANU-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'MCMU-0', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'MCMU-1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
            ['nom_module' => 'PDFU', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'equipement' => 'BSC Nokia', 'equipement_id' => 1],
        ]);
    }
}
