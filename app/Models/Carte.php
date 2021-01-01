<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    protected $fillable = ['nom_carte', 'direction', 'departement', 'division', 'equipement'];

    public function modules()
    {
        return $this->belongsTo('App/Models/Module');
    }

    public function ports()
    {
        return $this->hasMany('App/Models/Port');
    }
    public function risqueCarte()
    {
        return $this->hasMany('App/Models/RisqueCarte');
    }
}
