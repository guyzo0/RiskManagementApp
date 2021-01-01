<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = ['nom_departement' , 'direction'];

    public function direction()
    {
        return $this->belongsTo('App/Models/Direction');
    }

    public function divisions()
    {
        return $this->hasMany('App/Models/Divison');
    }
    public function risqueDepartement()
    {
        return $this->hasMany('App/Models/RisqueDepartement');
    }
}
