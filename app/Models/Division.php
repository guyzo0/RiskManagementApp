<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['nom_division' , 'direction', 'departement'];

    public function departement()
    {
        return $this->belongsTo('App/Models/Departement');
    }

     public function Equipement()
    {
        return $this->hasMany('App/Models/Equipement');
    }

    public function personnes()
    {
        return $this->hasMany('App/Models/Personne');
    }

    public function activites()
    {
        return $this->hasMany('App/Models/Activite');
    }

    public function processuses()
    {
        return $this->hasMany('App/Models/Processus');
    }
    public function risqueDivision()
    {
        return $this->hasMany('App/Models/RisqueDivision');
    }
}
