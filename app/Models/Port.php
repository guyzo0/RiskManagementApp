<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $fillable = ['nom_port', 'direction', 'departement', 'division', 'equipement', 'carte'];

    public function carte()
    {
        return $this->belongsTo('App/Models/Carte');
    }
    public function risquePort()
    {
        return $this->hasMany('App/Models/RisquePort');
    }

}
