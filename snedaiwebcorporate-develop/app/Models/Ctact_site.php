<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ctact_site extends Model
{
   protected $guarded=[];

   protected $table = 'ctact_site';

    public function Pays(){
        return $this->hasOne('App\Models\Ctact_pays','idpays','id_pays');
    }

     public function Telephone(){
        return $this->hasMany('App\Models\Ctact_telephonique','id_site','id_site');
    }

     public function Situation(){
        return $this->hasMany('App\Models\Ctact_situation','id_site','id_site');
    }
     public function Emails(){
        return $this->hasMany('App\Models\Ctact_email','id_site','id_site');
    }
}
