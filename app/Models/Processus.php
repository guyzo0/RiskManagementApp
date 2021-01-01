<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Processus extends Model
{
    protected $fillable = ['nom_processus', 'direction', 'departement', 'division'];

    public function division()
    {
        return $this->belongsTo('App/Models/Division');
    }
    public function risqueProcessus()
    {
        return $this->hasMany('App/Models/RisqueProcessus');
    }
}
