<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = ['nom_direction'];

    public function departements()
    {
        return $this->hasMany('App/Models/Departement');
    }
    public function risqueDirection()
    {
        return $this->hasMany('App/Models/RisqueDirection');
    }

}
