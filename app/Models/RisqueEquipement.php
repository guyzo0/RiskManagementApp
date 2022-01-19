<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RisqueEquipement extends Model
{
     protected $fillable = [
          'titre' , 'redacteur' , 'participants' , 'valideur' , 'contexte' , 
          'perimetre' , 'consequence_metier' , 'manifestation_origine' , 'menace' , 'besoin_securite' ,
          'niveau_impact' , 'type_menace' , 'potentialite_intrinseque' , 'justification_potentialite_intrinseque' ,
          'gravite_intrinseque' , 'label_gravite_intrinseque', 'mesures_confinement', 'efficacite_mesures_confininement', 
          'mesures_palliation', 'efficacite_mesures_palliation', 'niveau_impact', 'impact_residuel', 'mesures_dissuation', 
          'efficacite_mesures_dissuation', 'mesures_prevention', 'efficacite_mesures_prevention', 'potentialite_actuel', 
          'potentialite_residuel', 'niveau_gravite', 'label_gravite', 'preconisations1', 'efficacite_preconisations1', 
          'preconisation2', 'efficacite_preconisation2', 'validation' 
                            ];

        public function equipement()
   {
         return $this->belongsTo('App/Models/Equipement');
   }
   

   public function setGravite_intrinseque()
   {
        $s = $this->niveau_impact;
        $z = $this->potentialite_intrinseque;

        if (( $s==1 && $z==1) || ($this-> $s==1 && $z==2) || ( $s==1 && $this->$z==3) || ( $s==2 && $z==1))
           {
              $this->gravite_intrinseque = 1;
           }     
         if (( $s==1 && $z==4) || ( $s==2 && $z==2) || ( $s==2 && $z==3) || ( $s==3 && $z==1) || ( $s==4 && $z==1))
           {
              $this->gravite_intrinseque = 2;
           }           
           if (( $s==2 && $z==4) || ( $s==3 && $z==2) ||  ( $s==3 && $z==3) || ( $s==4 && $z==2))
           {
              $this->gravite_intrinseque = 3;
           }
           if (( $s==3 && $z==4) || ($s==4 && $z==3) || ( $s==4 && $z==4))
           {
              $this->gravite_intrinseque = 4;
           }

   }

   public function setImpact_residuel()
   {

        if ($this->besoin_securite == 'disponibilite')
        {   $s = 5-($this->efficacite_mesures_confininement);
            $z = $this->efficacite_mesures_palliation + 7*($this->niveau_impact -1);

             if (
                  (($s>0 && $s<5 )&&($z>0 && $z<5 )) || (($s>0 && $s<3 )&&($z>9 && $z<12 )) || (($s>2 && $s<5 )&&($z==11)) ||
                   ($s==1 && ($z>16 && $z<19)) || (($s>1 && $s<5 ) && $z==18 ) || (($s>0 && $s<5 )&& $z==25)                  
             )
              {
                   $this->impact_residuel = 1;
              }
              if (
                   (($s>0 && $s<5)&&($z>7 && $z<10)) || (($s>2 && $s<5)&&( $z=10 )) || ( $s==1 && ($z>14 && $z<17 )) || 
                    ($s==2 && ( $z>15 && $z<18 )) || (( $s>2 && $s<5 ) && $z==17) || ($s==1 && ($z>21 && $z<25 )) || (($s>1 && $s<5) && $z==24)
                   )
               {
                    $this->impact_residuel = 2;
               }

               if ((($s==1 && $s==5) && ($z==15)) || (($s>2 && $s<5)&&($z==16)) || ($s==2 && $z==22) || (($s>1 && $s<5)&&($z==23)))
               {
                    $this->impact_residuel = 3;
               }

               if (($s>2 && $s<5)&&($z==22))
               {
                    $this->impact_residuel = 4;
               }

        }

        if ($this->besoin_securite == 'integrite')
        {
             $s = 16-($this->efficacite_mesures_confininement);
             $z = $this->efficacite_mesures_palliation + 7*($this->niveau_impact -1);
             if (
                  (($s>11 && $s<16)&&($z>0 && $z<5)) || ($s==12 && ($z>7 && $z<12)) || (($s==13) && ($z>9 && $z<12) ) ||
                   (($s>13 && $s<16) && $z==11) || (($s==12)&&($z>14 && $z<19)) || (($s==13) && ($z>16 && $z<19)) || 
                   (($s>13 && $s<16) && $z==18) || (($s==12)&&($z>21 && $z<26)) || (($s>12 && $s<16) && $z==25)                  
             )
              {
                   $this->impact_residuel = 1;
              }

              if (
                   (($s>12 && $s<16)&&($z>7 && $z<10)) || (($s>13 && $s<16) && $z==10) || ($s==13 && ($z>14 && $z<17)) ||
                    (($s>13 && $s<16) && $z==17) || ($s==13 && ($z>21 && $z<25)) || (($s>13 && $s<16) && $z==24)                   
                   )
               {
                    $this->impact_residuel = 2;
               }

               if ((($s>13 && $s<16)&&($z>14 && $z<17)) || ($s==14 && ($z>21 && $z<24)) || ($s==15 && $z==23))
               {
                    $this->impact_residuel = 3;
               }  

               if ($s==15 && $z==22)
               {
                    $this->impact_residuel = 4;
               }

        }

        if ($this->besoin_securite == 'confidentialite')
        {
              $s = 27-($this->efficacite_mesures_confininement);
              $z = $this->efficacite_mesures_palliation + 7*($this->niveau_impact -1);
             if (
                  (($s>22 && $s<27)&&($z>0 && $z<5)) || (($s>22 && $s<25)&&($z>8 && $z<12)) || 
                  (($s>24 && $s<27)&&($z>9 && $z<12)) || (($s>22 && $s<25)&&($z>16 && $z<19)) || 
                   (($s>24 && $s<27) && $z==18) || ($s==23 && ($z>23 && $z<26)) || ($s==24 && $z==25)
                  )
                   {
                        $this->impact_residuel = 1;
                   }
              if (
                   (($s>22 && $s<27) && $z==8) || (($s>24 && $s<27) && $z==9) || (($s>22 && $s<25)&&($z>14 && $z<17)) ||
                     (($s>24 && $s<27)&& $z==17 ) || (($s>22 && $s<25)&&($z>21 && $z<24)) || 
                    ($s==24 && $z==24) || (($s>24 && $s<27)&& $z==25)                   
                   )
               {
                    $this->impact_residuel = 2;
               }

               if ((($s>24 && $s<27)&&($z>14 && $z<17)) || ($s==25 && ($z>21 && $z<25)) || ($s==26 && $z==24))
               {
                    $this->impact_residuel = 3;
               } 

               if ($s==26 && ($z>21 && $z<24))
               {
                    $this->impact_residuel = 4;
               }

         }

         if ($this->besoin_securite == 'efficience')
         {
               $s = 38-($this->efficacite_mesures_confininement);
               $z = $this->efficacite_mesures_palliation + 7*($this->niveau_impact -1);
              if (
                   (($s>33 && $s<38)&&($z>0 && $z<5)) || (($s==34)&&($z>7 && $z<12)) || ($s==35 && $z==10) || 
                   (($s>34 && $s<38)&&($z==11)) || (($s==34) && ($z>14 && $z<19)) || ($s==35 && ($z==17)) || 
                   (($s>34 && $s<38)&&($z==18)) || (($s==34) && ($z>21 && $z<26)) || (($s>34 && $s<38)&&($z==25))
                   )
                    {
                         $this->impact_residuel = 1;
                    }
               if (
                    (($s>34 && $s<38)&&($z>7 && $z<10)) || (($s>35 && $s<38) && ($z==10)) || (($s==35)&&($z>14 && $z<17)) ||
                    (($s>35 && $s<38)&& $z==17 ) || (($s==35)&&($z>21 && $z<25)) || (($s>35 && $s<38)&& $z==24)                   
                    )
                {
                     $this->impact_residuel = 2;
                }

                if ((($s>35 && $s<38)&&($z>14 && $z<17)) || (($s==36) && ($z>21 && $z<25)) || ($s==37 && $z==23))
                {
                     $this->impact_residuel = 3;
                } 

                if ($s==37 && $z==22)
                {
                     $this->impact_residuel = 4;
                }

          }

   }

   public function setPotentialite_residuel()
   {
        if ($this->type_menace == 'accident' || $this->type_menace == 'erreur')
        {
               $z = $this->efficacite_mesures_prevention + 7*($this->potentialite_intrinseque - 1);

             if (($z>0 && $z<5) || ($z==11) || ($z==18) || ($z==25))
             {
                   $this->potentialite_residuel = 1;
             }

             if(($z>7 && $z<11) || ($z==17) || ($z==24))
             {
                   $this->potentialite_residuel = 2;
             }

             if($z>14 && $z<17)
             {
                   $this->potentialite_residuel = 3;
             }

             if($z>21 && $z<24)
             {
                   $this->potentialite_residuel = 4;
             }
        }

        if ($this->type_menace =='volontaire')
        {
              $s = 27 - ($this->efficacite_mesures_dissuation);
              $z = $this->efficacite_mesures_prevention + 7*($this->potentialite_intrinseque - 1);

              if (
                   (($s>22 && $s<27)&&($z>0 && $z<5)) || (($s==23)&&($z>7 && $z<12)) || ($s==24 && $z==10) || 
                   (($s>23 && $s<27)&&($z==11)) || (($s>22 && $s<25) && ($z>16 && $z<19)) || (($s>24 && $s<27) && ($z==18)) || 
                   (($s==23)&&($z==25))
                   )
                    {
                         $this->potentialite_residuel = 1;
                    }

                    if (
                        (($s>23 && $s<27)&&($z>7 && $z<10)) || (($s>24 && $s<27) && ($z==10)) || 
                        (($s>22 && $s<25)&&($z>14 && $z<17)) || (($s==23)&&($z>21 && $z<25) ) || 
                        (($s>24 && $s<27) && ($z==17)) || (($s==24)&&($z>23 && $z<26)) || (($s>24 && $s<27)&& $z==25)                   
                        )
                    {
                         $this->potentialite_residuel = 2;
                    }
    
                    if ((($s>24 && $s<27)&&($z>14 && $z<17)) || (($s==24) && ($z>21 && $z<24)) || (($s>24 && $s<27) && ($z==24)))
                    {
                         $this->potentialite_residuel = 3;
                    } 
    
                    if (($s>24 && $s<27)&&($z>21 && $z<24))
                    {
                         $this->potentialite_residuel = 4;
                    }
              
        }


   }

   public function setNiveau_gravite()
   {
         $s = $this->impact_actuel;
         $z = $this->potentialite_actuel;

         if (( $s==1 && $z==1) || ($s==1 && $z==2) || ( $s==1 && $z==3) || ( $s==2 && $z==1))
         {
              $this->niveau_gravite = 1;
         }     
         if (( $s==1 && $z==4) || ( $s==2 && $z==2) || ( $s==2 && $z==3) || ( $s==3 && $z==1) || ( $s==4 && $z==1))
         {
              $this->niveau_gravite = 2;
         }           
         if (( $s==2 && $z==4) || ( $s==3 && $z==2) ||  ( $s==3 && $z==3) || ( $s==4 && $z==2))
         {
              $this->niveau_gravite = 3;
         }
         if (( $s==3 && $z==4) || ($s==4 && $z==3) || ( $s==4 && $z==4))
         {
              $this->niveau_gravite = 4;
         }
   }

   public function setLabel_gravite_intrinseque()
   {
        if ($this->gravite_intrinseque == 1 || $this->gravite_intrinseque == 2)
        {
              $this->label_gravite_intrinseque = 'toléré';
        }

        if ($this->gravite_intrinseque == 3)
        {
              $this->label_gravite_intrinseque = 'inadmissible';
        }

        if ($this->gravite_intrinseque == 4)
        {
              $this->label_gravite_intrinseque = 'insupportable';
        }
   }

   public function setLabel_gravite()
   {
        if ($this->niveau_gravite == 1 || $this->niveau_gravite == 2)
        {
              $this->label_gravite = 'toléré';
        }

        if ($this->niveau_gravite == 3)
        {
              $this->label_gravite = 'inadmissible';
        }

        if ($this->niveau_gravite == 4)
        {
              $this->label_gravite = 'insupportable';
        }
   }
   
}
