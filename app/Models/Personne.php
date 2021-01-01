<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = ['nom_personne', 'direction', 'departement', 'division'];

    public function division()
    {
        return $this->belongsTo('App/Models/Division');
    }
    public function risquePersonne()
    {
        return $this->hasMany('App/Models/RisquePersonne');
    }
}
