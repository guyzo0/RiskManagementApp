<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['nom_module', 'direction', 'departement', 'division', 'equipement', 'carte'];

    public function equipement()
    {
        return $this->belongsTo('App/Models/Equipement');
    }

    
    public function cartes()
    {
        return $this->hasMany('App/Models/Carte');
    }


    public function risqueModule()
    {
        return $this->hasMany('App/Models/RisqueModule');
    }
}
