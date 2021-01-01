<?php

use Illuminate\Database\Seeder;

class EquipementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipements')->insert([
            ['nom_equipement' => 'MSC', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'MGW', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'HLR+VLR', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'One NDS', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'NETACT Core', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'SBC', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'NSS', 'division_id' => 1,],
            ['nom_equipement' => 'BSC Nokia7', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'BSC wawei5', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'BNC Nokia3', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'MCRNC Nokia1', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'RNC WaWei2', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'TP50007', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'IPClock', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'NETACT RAN+OMS', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'M2000', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'U2000', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'PRS', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'BSS', 'division_id' => 2,],
            ['nom_equipement' => 'SGSN', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'GGSN', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'PCRF', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'DNS', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'CMD', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'SMSC', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'MMSC', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'CRBT', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'FireWall', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Core', 'division' => 'PS VAS', 'division_id' => 3,],
            ['nom_equipement' => 'Transformer', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'Generator', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'PAC', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'UPS', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'Battery', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'ATS', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Power', 'division_id' => 4,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'DATA Center', 'division' => 'Telecom', 'division_id' => 5,],
            ['nom_equipement' => 'SRT', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'AGG', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'ART', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'CRT', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'ASW', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'CoreSW', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'IP Transmission', 'division_id' => 6,],
            ['nom_equipement' => 'PRC+SSU', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Optical Transmission', 'division_id' => 7,],
            ['nom_equipement' => 'DWDM', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Optical Transmission', 'division_id' => 7,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Optical Transmission', 'division_id' => 7,],
            ['nom_equipement' => 'NEC Server', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Microwave Transmission', 'division_id' => 8,],
            ['nom_equipement' => 'MicroWave', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Microwave Transmission', 'division_id' => 8,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Transmission', 'division' => 'Microwave Transmission', 'division_id' => 8,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Technical', 'division' => 'Tools and Process', 'division_id' => 9,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Technical', 'division' => 'General planning', 'division_id' => 10,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Technical', 'division' => 'Construction and Design', 'division_id' => 11,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Infrastucture', 'division' => 'Transmission', 'division_id' => 12,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Infrastucture', 'division' => 'Achèvement et Factures', 'division_id' => 13,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Infrastucture', 'division' => 'Génie Civil', 'division_id' => 14,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'division' => 'Access', 'division_id' => 15,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'division' => 'Communication', 'division_id' => 16,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Mechanical-Electrical', 'division' => 'Solution', 'division_id' => 17,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'NOC', 'division' => 'TSS', 'division_id' => 18,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'NOC', 'division' => 'NSS', 'division_id' => 19,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'NOC', 'division' => 'BSS', 'division_id' => 20,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'NOC', 'division' => 'IT', 'division_id' => 21,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'NOC', 'division' => 'SUPPORT', 'division_id' => 22,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Radio', 'division' => 'Optimisation', 'division_id' => 23,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Radio', 'division' => 'Planification', 'division_id' => 24,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'Radio', 'division' => 'QoS', 'division_id' => 25,],
            ['nom_equipement' => 'Generator', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'Battery', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'BTS & NODEB', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'FAN System', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'SITE', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Power', 'division_id' => 26,],
            ['nom_equipement' => 'Generator', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'Battery', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'BTS & NODEB', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'FAN System', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'SITE', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Network', 'departement' => 'TECH-REGION', 'division' => 'Telecom', 'division_id' => 27,],
            ['nom_equipement' => 'SAN', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'System', 'division_id' => 28,],
            ['nom_equipement' => 'FireWall', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'System', 'division_id' => 28,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'System', 'division_id' => 28,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'OCS', 'division_id' => 29,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'Data Minning', 'division_id' => 30,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'VAS', 'division_id' => 31,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'SUPPORT', 'division_id' => 32,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'APPLICATION', 'division_id' => 33,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'DEVELOPMENT', 'division_id' => 34,],
            ['nom_equipement' => 'COMPUTER', 'direction' => 'Information-System', 'departement' => 'IS', 'division' => 'Information System Security', 'division_id' => 35,],

        ]);
    }
}
