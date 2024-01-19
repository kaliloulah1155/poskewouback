<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ctact_telephonique extends Model
{
   protected $guarded=[];
    protected $table = 'ctact_telephonique';

    public function Ctact_telephonique(){
        return $this->hasOne('App\models\Ctact_site','id_site','id_site');
    }
}
