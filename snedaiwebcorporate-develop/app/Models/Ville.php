<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
	protected $guarded=[];
	
    public function departement(){
        return $this->belongsTo('App\Models\Departement');
    }
}