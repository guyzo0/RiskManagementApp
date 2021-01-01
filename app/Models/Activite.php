<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activite extends Model
{
    protected $fillable = ['nom_activite', 'direction', 'departement', 'division'];

    public function division()
    {
        return $this->belongsTo('App/Models/Division');
    }
    public function risqueActivite()
    {
        return $this->hasMany('App/RisqueActivite');
    }
}
