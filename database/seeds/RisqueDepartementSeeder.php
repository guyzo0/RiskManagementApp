<?php

use Illuminate\Database\Seeder;

class RisqueDepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('risqueDepartements')->insert([
            'id' => 1,
            'titre' => 'urner', 
           'Date_creation' => date("2020:12:09"),
           'redacteur' => 'momo',
           'participants' => 'joel, romo.',
           'valideur' => 'jule',
           'contexte' => 'plydg',
           'perimetre' => 'mhgf',
           'consequence_metier' => 'okjhgd',
           'manifestation_origine' => 'poijh',
           'menace' => 'bfdr',
           'besoin_securite' => 'efficience',
           'niveau_impact' => 3,
           'type_menace' => 'accident',
           'potentialite_intrinseque' => 1,
           'justification_potentialite_intrinseque' => 'zfdh',
           'gravite_intrinseque' => 3,
           'label_gravite_intrinseque' => 'inadmissible',
           'mesures_confinement' => 'gfdrt',
           'efficacite_mesures_confininement' => 1,
           'mesures_palliation' => 'plmk',
           'efficacite_mesures_palliation' => 4,
           'impact_actuel' => 1,
           'impact_residuel' => 3,
           'mesures_dissuation' => 'mjhd',
           'efficacite_mesures_dissuation' => 1,
           'mesures_prevention' => 'yyyh',
           'efficacite_mesures_prevention' => 4,
           'potentialite_actuel' => 1,
           'potentialite_residuel' => 3,
           'niveau_gravite' => 4,
           'label_gravite' => 'inadmissible',
           'preconisations1' => 'jhg',
           'efficacite_preconisations1' => 3,
           'preconisation2' => 'lpm',
           'efficacite_preconisation2' => 3,
           'departement_id' => 1,
       ]);
    }
    
}
