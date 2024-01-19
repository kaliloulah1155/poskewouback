<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    protected $guarded=[];
	
    public function departement(){
        return $this->belongsTo('App\Models\Departement');
    }
}
