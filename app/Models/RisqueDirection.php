<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RisqueDirection extends Model
{
    
    protected $fillable = [
        'titre' , 'Date_creation' , 'redacteur' , 'participants' , 'valideur' , 'contexte' , 
        'perimetre' , 'consequence_metier' , 'manifestation_origine' , 'menace' , 'besoin_securite' ,
        'niveau_impact' , 'type_menace' , 'potentialite_intrinseque' , 'justification_potentialite_intrinseque' ,
        'gravite_intrinseque' , 'label_gravite_intrinseque', 'mesures_confinement', 'efficacite_mesures_confininement', 
        'mesures_palliation', 'efficacite_mesures_palliation', 'impact_actuel', 'impact_residuel', 'mesures_dissuation', 
        'efficacite_mesures_dissuation', 'mesures_prevention', 'efficacite_mesures_prevention', 'potentialite_actuel', 
        'potentialite_residuel', 'niveau_gravite', 'label_gravite', 'preconisations1', 'efficacite_preconisations1', 
        'preconisation2', 'efficacite_preconisation2' 
                          ];

      public function direction()
   {
      return $this->belongsTo('App/Models/Direction');
   }
   
}
