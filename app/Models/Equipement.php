<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable = ['nom_equipement' , 'direction', 'departement', 'division'];

    public function division()
    {
        return $this->belongsTo('App/Models/Division');
    }

    
    public function modules()
    {
        return $this->hasMany('App/Models/Module');
    }

    public function risqueEquipement()
    {
        return $this->hasMany('App/Models/RisqueEquipement');
    }
}
