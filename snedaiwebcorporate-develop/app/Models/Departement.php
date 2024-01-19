<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
	protected $guarded=[];
    public function ville(){
        return $this->hasMany('App\Models\Ville');
    }

    public function region(){
        return $this->belongsTo('App\Models\Region');
    }

    public function commune(){
        return $this->hasMany('App\Models\Commune');
    }
}
